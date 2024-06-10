<?php

namespace Hey\Pro\Controllers\Client;

use Hey\Pro\Commons\Controller;
use Hey\Pro\Commons\Helper;
use Hey\Pro\Models\Brand;
use Hey\Pro\Models\Origin;
use Hey\Pro\Models\Product;
use Hey\Pro\Models\Type;

class ProductController extends Controller
{
    private Product $product;
    private Type $type;
    private Brand $brand;
    private Origin $origin;
    private Helper $Helper;
    public function __construct()
    {
        $this->product = new Product();
        $this->type = new Type();
        $this->brand = new Brand();
        $this->origin = new Origin();
        $this->Helper = new Helper();
    }
    public function log()
    {
        $this->renderViewClient('login', []);
    }
    public function index()
    {
        $fnames = $this->brand->charter();
        $top10Pro = $this->product->all();
        $brandsh = $this->brand->all();
        $brandsh = $this->brand->all();
        foreach ($fnames as $fname) {

            // $ascbrand[] = $this->brand->ascBrand($fname);

            $brands[$fname['initial']] = $this->brand->ascbrand($fname['initial']);
        }
        // $Helper = $this->Helper->debug($brands);
        $this->renderViewClient('viewAll.home', [
            'fnames' => $fnames,
            'brands' => $brands,
            'brandsh' => $brandsh,
            'top10Pro' => $top10Pro,
        ]);
    }
    public function detail($id)
    {

        $products = $this->product->all($id);
        $product = $this->product->findByID($id);
        $types = $this->type->all();
        $brands = $this->brand->all();
        $origins = $this->origin->all();

        $this->renderViewClient('viewAll.produc', [
            'product' => $product,
            'types' => $types,
            'brands' => $brands,
            'origins' => $origins,
            'products' => $products,
        ]);
    }

}