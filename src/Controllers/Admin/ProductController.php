<?php

namespace Hey\Pro\Controllers\Admin;

use Hey\Pro\Commons\Controller;
use Hey\Pro\Commons\Helper;
use Hey\Pro\Models\Brand;
use Hey\Pro\Models\Origin;
use Hey\Pro\Models\Product;
use Hey\Pro\Models\Type;
use Rakit\Validation\Validator;

class ProductController extends Controller
{
    private Product $product;
    private Type $type;
    private Brand $brand;
    private Origin $origin;

    public function __construct()
    {
        $this->product = new Product();
        $this->type = new Type();
        $this->brand = new Brand();
        $this->origin = new Origin();
    }

    public function index()
    {
        $products = $this->product->all();
        $this->renderViewAdmin('viewProducts.products.index', [
            'products' => $products,
        ]);

    }

    public function create()
    {
        $types = $this->type->all();
        $brands = $this->brand->all();
        $origins = $this->origin->all();
        $this->renderViewAdmin(
            'viewProducts.products.create',
            [
                'types' => $types,
                'brands' => $brands,
                'origins' => $origins
            ]
        );
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name' => 'required|max:50',
            'price' => 'required|numeric|min:0|max:999999.99',
            'price_sale' => 'required|numeric|min:0|max:999999.99',
            'so_luong_ban' => 'required|integer|min:0|max:999999',
            'so_luong_kho' => 'required|integer|min:0|max:999999',
            'img' => 'uploaded_file:0,2M,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/products/create'));
            exit;
        } else {

            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'price_sale' => $_POST['price_sale'],
                'so_luong_ban' => $_POST['so_luong_ban'],
                'so_luong_kho' => $_POST['so_luong_kho'],
                'brand_id' => $_POST['brand_id'],
                'type_id' => $_POST['type_id'],
                'origin_id' => $_POST['origin_id'],
                'mota' => $_POST['mota'],
            ];

            if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {

                $from = $_FILES['img']['tmp_name'];
                $to = 'uploads/' . time() . $_FILES['img']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img'] = $to;
                } else {
                    $_SESSION['errors']['img'] = 'Upload Không thành công';

                    header('Location: ' . url('admin/products/create'));
                    exit;
                }
            }
            $this->product->insert($data);
            header('Location: ' . url('admin/products'));
            exit();
        }
    }

    public function show($id)
    {
        $product = $this->product->findByID($id);
        $types = $this->type->all();
        $brands = $this->brand->all();
        $origins = $this->origin->all();

        $this->renderViewAdmin('viewProducts.products.show', [
            'product' => $product,
            'types' => $types,
            'brands' => $brands,
            'origins' => $origins
        ]);
    }

    public function edit($id)
    {
        $product = $this->product->findByID($id);
        $types = $this->type->all();
        $brands = $this->brand->all();
        $origins = $this->origin->all();

        $this->renderViewAdmin('viewProducts.products.edit', [
            'product' => $product,
            'types' => $types,
            'brands' => $brands,
            'origins' => $origins
        ]);
    }

    public function update($id)
    {
        $product = $this->product->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name' => 'required|max:50',
            'price' => 'required|numeric|min:0|max:999999.99',
            'price_sale' => 'required|numeric|min:0|max:999999.99',
            'so_luong_ban' => 'required|integer|min:0|max:999999',
            'so_luong_kho' => 'required|integer|min:0|max:999999',
            'img' => 'uploaded_file:0,2M,png,jpg,jpeg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/products/{$product['id']}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'price_sale' => $_POST['price_sale'],
                'so_luong_ban' => $_POST['so_luong_ban'],
                'so_luong_kho' => $_POST['so_luong_kho'],
                'brand_id' => $_POST['brand_id'],
                'type_id' => $_POST['type_id'],
                'origin_id' => $_POST['origin_id'],
                'mota' => $_POST['mota'],
            ];

            $flagUpload = false;
            if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {

                $flagUpload = true;

                $from = $_FILES['img']['tmp_name'];
                $to = 'uploads/' . time() . $_FILES['img']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img'] = $to;
                } else {
                    $_SESSION['errors']['img'] = 'Upload Không thành công';

                    header('Location: ' . url("admin/products/{$product['id']}/edit"));
                    exit;
                }
            }

            $this->product->update($id, $data);

            if (
                $flagUpload
                && $product['img']
                && file_exists(PATH_ROOT . $product['img'])
            ) {
                unlink(PATH_ROOT . $product['img']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/products'));
            exit;
        }
    }

    public function delete($id)
    {
        $this->product->delete($id);

        header('Location: ' . url('admin/products'));
        exit();
    }
}