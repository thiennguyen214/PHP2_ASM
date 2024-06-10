<?php

namespace Hey\Pro\Controllers\Admin;

use Hey\Pro\Commons\Controller;
use Hey\Pro\Commons\Helper;
use Hey\Pro\Models\Type;
use Rakit\Validation\Validator;

class TypeController extends Controller
{
    private Type $type;

    public function __construct()
    {
        $this->type = new Type();
    }

    public function index()
    {
        $types = $this->type->all();
        $this->renderViewAdmin('viewProducts.type.index', [
            'types' => $types
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('viewProducts.type.create');
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

            header('Location: ' . url('admin/type_pros/create'));
            exit;
        } else {

            $data = [
                'name' => $_POST['name'],
            ];
            $this->type->insert($data);
            header('Location: ' . url('admin/type_pros'));
            exit();
        }
    }
    public function edit($id)
    {
        $type = $this->type->findByID($id);

        $this->renderViewAdmin('viewProducts.type.edit', [
            'type' => $type
        ]);
    }

    public function update($id)
    {
        $type = $this->type->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/type_pros/{$type['id']}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
            ];
            $this->type->update($id, $data);
            header('Location: ' . url('admin/type_pros'));
            exit;
        }
    }

    public function delete($id)
    {
        $this->type->delete($id);

        header('Location: ' . url('admin/type_pros'));
        exit();
    }
}