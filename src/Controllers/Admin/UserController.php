<?php

namespace Hey\Pro\Controllers\Admin;

use Hey\Pro\Commons\Controller;
use Hey\Pro\Commons\Helper;
use Hey\Pro\Models\User;
use Rakit\Validation\Validator;

use const Hey\Pro\Commons\PATH_ASSET;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        // [$users, $totalPage] = $this->user->paginate($_GET['page'] ?? 1);

        // $this->renderViewAdmin('users.index', [
        //     'users' => $users,
        //     'totalPage' => $totalPage
        // ]);
        $users = $this->user->all();
        $this->renderViewAdmin('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('users.create');
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'pass' => 'required|min:6',
            'tell' => 'required|regex:/^\d{10}$/',
            'address' => 'required|max:70',
            'img' => 'uploaded_file:0,2M,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/users/create'));
            exit;
        } else {

            $data = [
                'name' => $_POST['name'],
                'img' => $_POST['img'],
                'email' => $_POST['email'],
                'pass' => password_hash($_POST['pass'], PASSWORD_DEFAULT),
                'tell' => $_POST['tell'],
                'address' => $_POST['address'],
                'role' => $_POST['role'],
            ];

            if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {

                $from = $_FILES['img']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['img']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img'] = $to;
                } else {
                    $_SESSION['errors']['img'] = 'Upload Không thành công';

                    header('Location: ' . url('admin/users/create'));
                    exit;
                }
            }
            $this->user->insert($data);
            header('Location: ' . url('admin/users'));
            exit();
        }
    }

    public function show($id)
    {
        $user = $this->user->findByID($id);

        $this->renderViewAdmin('users.show', [
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $user = $this->user->findByID($id);

        $this->renderViewAdmin('users.edit', [
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $user = $this->user->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'pass' => 'min:6',
            'tell' => 'required|regex:/^\d{10}$/',
            'address' => 'required|max:70',
            'img' => 'uploaded_file:0,2M,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/users/{$user['id']}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'pass' => !empty($_POST['pass'])
                    ? password_hash($_POST['pass'], PASSWORD_DEFAULT) : $user['pass'],
                'tell' => $_POST['tell'],
                'address' => $_POST['address'],
                'role' => $_POST['role'],
            ];

            $flagUpload = false;
            if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {

                $flagUpload = true;

                $from = $_FILES['img']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['img']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img'] = $to;
                } else {
                    $_SESSION['errors']['img'] = 'Upload Không thành công';

                    header('Location: ' . url("admin/users/{$user['id']}/edit"));
                    exit;
                }
            }

            $this->user->update($id, $data);

            if (
                $flagUpload
                && $user['img']
                && file_exists(PATH_ROOT . $user['img'])
            ) {
                unlink(PATH_ROOT . $user['img']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/users'));
            exit;
        }
    }

    public function delete($id)
    {
        $this->user->delete($id);

        header('Location: ' . url('admin/users'));
        exit();
    }


}