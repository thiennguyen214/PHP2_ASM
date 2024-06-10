<?php

namespace Hey\Pro\Controllers\Admin;

use Hey\Pro\Commons\Controller;
use Hey\Pro\Commons\Helper;
use Hey\Pro\Models\Origin;
use Rakit\Validation\Validator;

class OriginController extends Controller
{
    private Origin $origin;

    public function __construct()
    {
        $this->origin = new Origin();
    }

    public function index()
    {
        $origins = $this->origin->all();
        $this->renderViewAdmin('viewProducts.origins.index', [
            'origins' => $origins
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('viewProducts.origins.create');
    }
    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/origins/create'));
            exit;
        } else {

            $data = [
                'name' => $_POST['name'],
            ];
            $this->origin->insert($data);
            header('Location: ' . url('admin/origins'));
            exit();
        }
    }
    public function edit($id)
    {
        $origin = $this->origin->findByID($id);

        $this->renderViewAdmin('viewProducts.origins.edit', [
            'origin' => $origin
        ]);
    }

    public function update($id)
    {
        $origin = $this->origin->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/origins/{$origin['id']}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
            ];
            $this->origin->update($id, $data);
            header('Location: ' . url('admin/origins'));
            exit;
        }
    }

    public function delete($id)
    {
        $this->origin->delete($id);

        header('Location: ' . url('admin/origins'));
        exit();
    }
}