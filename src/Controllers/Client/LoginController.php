<?php

namespace Hey\Pro\Controllers\Client;

use Hey\Pro\Commons\Controller;
use Hey\Pro\Commons\Helper;
use Hey\Pro\Models\User;

class LoginController extends Controller
{
    private User $user;
    private Helper $Helper;

    public function __construct()
    {
        $this->user = new User();
        $this->Helper = new Helper();
    }

    public function showFormLogin()
    {
        auth_check();

        $this->renderViewClient('login');
    }

    public function login()
    {
        auth_check();

        try {
            $user = $this->user->findByEmail($_POST['email']);


            if (empty($user)) {
                throw new \Exception('Không tồn tại email: ' . $_POST['email']);
            }

            $flag = password_verify($_POST['password'], $user['pass']);
            // $Helper = $this->Helper->debug($user['pass']);
            // $Helper = $this->Helper->debug($user['pass']);

            if ($flag) {

                $_SESSION['user'] = $user;

                unset($_SESSION['cart']);


                if ($user['role'] == 1) {
                    header('Location: ' . url('admin/users/'));
                    exit;
                }

                header('Location: ' . url(''));
                exit;
            }

            throw new \Exception('Sai Mật Khẩu!');
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();

            header('Location: ' . url('login'));
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['cart-' . $_SESSION['user']['id']]);
        unset($_SESSION['user']);

        header('Location: ' . url('log/'));
        exit;
    }
}