<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Core\Request;
use Core\Validator;

class ProductController
{
    public function index()
    {
        $product = new Product();
        $categories = $product->getAll();
        return view('admin.product.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store()
    {
        $request = new Request();
        $inputs = $request->post();
        $validator = new Validator();
        $rules = [
            'name' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        if (!$valid) {
            redirect('admin/product/create');
        }

        $product = new Product();
        $product->create($inputs);
        redirect('admin/product');
    }

    public function edit()
    {
        $request = new Request();
        $id = $request->get();
        $productModel = new Product();
        $product = $productModel->find($id['id']);

        return view('admin.product.update', compact('product'));
    }

    public function update()
    {
        $request = new Request();
        $id = $request->get();
        $inputs = $request->post();
        $productModel = new Product();
        $product = $productModel->find($id['id']);
        $validator = new Validator();
        $rules = [
            'name' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        if (!$valid) {
            redirect('admin/product/edit?id=' . $product['id']);
        }

        $productModel->update($id['id'] , $inputs);
        redirect('admin/product');
    }

    public function delete()
    {
        $request = new Request();
        $id = $request->get();
        $productModel = new Product();
        $productModel->delete($id['id']);
        redirect('admin/product');
    }
}