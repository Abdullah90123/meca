<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductsController extends BaseController
{
    public function index()
    {
        $output = view('templates/header');
        $output .= view('home');
        $output .= view('templates/footer');
        echo $output;
    }

    public function products()
    {
        $productModel = model(ProductModel::class);
        $data['products'] = $productModel->getAll();

        $output = view('templates/header');
        $output .= view('products_view', $data);
        $output .= view('templates/footer');
        echo $output;
    }
}
