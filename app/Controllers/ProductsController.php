<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;
use Composer\XdebugHandler\Process;

class ProductsController extends BaseController
{
    public function index()
    {
        $output = view('templates/header');
        $output .= view('home');
        $output .= view('templates/footer');
        return $output;
    }

    public function products()
    {
        $productModel = model(ProductModel::class);
        $data['products'] = $productModel->getAll();

        $output = view('templates/header');
        $output .= view('products_view', $data);
        $output .= view('templates/footer');
        return $output;
    }

    public function productDetail(int $id)
    {
        $productModel = model(ProductModel::class);

        $data['products'] = $productModel->product($id);

        $output = view('templates/header');
        $output .= view('product_view', $data);
        $output .= view('templates/footer');
        return $output;
    }

    public function search()
    {
        $request = service('request');
        $query = $request->getGet('q');
        $category = $request->getGet('category');

        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $query)) {
            return redirect()->back()->with('error', 'Invalid search items');
        }

        $productModel = model(ProductModel::class);

        $data['products'] = $productModel->searchMethod($query, $category);

        $output = view('templates/header');
        $output .= view('products_view', $data);
        $output .= view('templates/footer');
        return $output;
    }

    public function add()
    {
        $output = view('templates/header');
        $output .= view('add_product');
        $output .= view('templates/footer');
        return $output;
    }
    public function addProduct()
    {
        $productModel = model(ProductModel::class);

        $file = $this->request->getFile('image');
        $imageName = null;

        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getRandomName();

            $file->move(FCPATH . 'uploads', $imageName);
        }

        if (! $imageName) {
            return redirect()->back()->with('error', 'Image upload failed');
        }

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'image'       => 'uploads/' . $imageName,
            'category'    => $this->request->getPost('category'),
        ];

        $insertID = $productModel->insert($data);

        if (! $insertID) {
            return redirect()->back()->with('error', 'Could not add item');
        }

        return redirect()->back()->with('success', 'Item added # ' . $insertID);
    }
}