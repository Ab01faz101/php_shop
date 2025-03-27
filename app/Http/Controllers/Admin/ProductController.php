<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use Core\Auth;
use Core\FileManager;
use Core\Request;
use Core\Validator;

class ProductController
{
    public function __construct()
    {
        if (Auth::user()['is_admin'] == 0){
            redirect('404');
        }
    }
    public function index()
    {
        $product = new Product();
        $products = $product->getAll();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $category = new ProductCategory();
        $categories = $category->getAll();
        return view('admin.product.create', compact('categories'));
    }

    public function store()
    {
        $request = new Request();
        $inputs = $request->post();
        $image = $_FILES['image'];
        $validator = new Validator();
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        if (!$valid) {
            redirect('admin/product/create');
        }
        $fileManager = new FileManager('public/images/products/');
        $inputs['image'] = $fileManager->uploadFile($_FILES['image']);
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
        $category = new ProductCategory();
        $categories = $category->getAll();
        return view('admin.product.update', compact('product', 'categories'));
    }

    public function update()
    {
        $request = new Request();
        $inputs = $request->post();
        $id = $request->get();
        $productModel = new Product();
        $product = $productModel->find($id['id']);
        if (isset($_FILES['image'])) {
            $image = $_FILES['image'];
        }
        $validator = new Validator();
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        if (!$valid) {
            redirect('admin/product/create');
        }
        if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
            $fileManager = new FileManager('public/images/products/');
            $inputs['image'] = $fileManager->uploadFile($_FILES['image']);
        }else{
            $inputs['image'] = $product['image'];
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

    public function orders()
    {
        $user = Auth::user();
        $order = new Order();
        $orders = $order->getAll();
        return view('admin.order' , compact('orders'));
    }


}