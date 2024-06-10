<?php

namespace Hey\Pro\Controllers\Admin;

use Hey\Pro\Commons\Controller;
use Hey\Pro\Commons\Helper;
use Hey\Pro\Models\Brand;
use Rakit\Validation\Validator;

class BrandController extends Controller
{
    private Brand $brand;

    public function __construct()
    {
        $this->brand = new Brand();
    }

    public function index()
    {
        $brands = $this->brand->all();
        $this->renderViewAdmin('viewProducts.brands.index', [
            'brands' => $brands
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('viewProducts.brands.create');
    }
    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name' => 'required|max:50',
            'logo' => 'uploaded_file:0,2M,png,jpg,jpeg',
            'img' => 'uploaded_file:0,2M,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('Location: ' . url('admin/brands/create'));
            exit;
        } else {

            $data = [
                'name' => $_POST['name'],
            ];

            if (isset($_FILES['ImageUploadLogo']) && $_FILES['ImageUploadLogo']['size'] > 0) {

                $from = $_FILES['ImageUploadLogo']['tmp_name'];
                $to = 'uploads/' . time() . $_FILES['ImageUploadLogo']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['logo'] = $to;
                } else {
                    $_SESSION['errors']['ImageUploadLogo'] = 'Upload Không thành công';

                    header('Location: ' . url('admin/brands/create'));
                    exit;
                }
            }
            if (isset($_FILES['ImageUpload']) && $_FILES['ImageUpload']['size'] > 0) {

                $from = $_FILES['ImageUpload']['tmp_name'];
                $to = 'uploads/' . time() . $_FILES['ImageUpload']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img'] = $to;
                } else {
                    $_SESSION['errors']['ImageUpload'] = 'Upload Không thành công';

                    header('Location: ' . url('admin/brands/create'));
                    exit;
                }
            }
            $this->brand->insert($data);
            header('Location: ' . url('admin/brands'));
            exit();
        }
    }
    public function edit($id)
    {
        $brand = $this->brand->findByID($id);

        $this->renderViewAdmin('viewProducts.brands.edit', [
            'brand' => $brand
        ]);
    }

    public function update($id)
    {
        $brand = $this->brand->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name' => 'required|max:50',
            'logo' => 'uploaded_file:0,2M,png,jpg,jpeg',
            'img' => 'uploaded_file:0,2M,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/brands/{$brand['id']}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
            ];

            $flagUpload = false;
            if (isset($_FILES['logo']) && $_FILES['logo']['size'] > 0) {

                $flagUpload = true;

                $from = $_FILES['logo']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['logo']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['logo'] = $to;
                } else {
                    $_SESSION['errors']['logo'] = 'Upload Không thành công';

                    header('Location: ' . url("admin/brands/{$brand['id']}/edit"));
                    exit;
                }
            }
            if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {

                $flagUpload = true;

                $from = $_FILES['img']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['img']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img'] = $to;
                } else {
                    $_SESSION['errors']['img'] = 'Upload Không thành công';

                    header('Location: ' . url("admin/brands/{$brand['id']}/edit"));
                    exit;
                }
            }

            $this->brand->update($id, $data);

            if (
                $flagUpload
                && $brand['logo']
                && $brand['img']
                && file_exists(PATH_ROOT . $brand['logo'])
                && file_exists(PATH_ROOT . $brand['img'])
            ) {
                unlink(PATH_ROOT . $brand['img']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/brands'));
            exit;
        }
    }

    public function delete($id)
    {
        $this->brand->delete($id);

        header('Location: ' . url('admin/brands'));
        exit();
    }
}