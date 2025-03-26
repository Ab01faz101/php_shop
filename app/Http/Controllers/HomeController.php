<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Core\Request;
use Core\Validator;

class HomeController extends Controller

{
    public function index()
    {
        $categoryModel = new ProductCategory;
        $productModel = new Product();
        $mobileCategory = $categoryModel->where(["name" => "برنامه نویسی موبایل"])[0];
        $webCategory = $categoryModel->where(["name" => "برنامه نویسی وب"])[0];


        $mobileProducts = $productModel->where(["category_id"=> $mobileCategory['id']]);
        $webProducts = $productModel->where(["category_id"=> $webCategory['id']]);
        return view("app.index" ,
         compact('mobileCategory' ,'webCategory' , 'mobileProducts' , 'webProducts'));
    }

    public function product()
    {
        $request = new Request();
        $id = $request->get()['id'];
        $productModel = new Product();
        $product = $productModel->find($id);
        $categoryModel = new ProductCategory();
        $category = $categoryModel->find($product['category_id']);
        $products = $productModel->where(['category_id' => $product['category_id']]);
        return view('app.single-product' , compact('product' , 'category' , 'products'));
    }

    public function welcome()
    {
        return view('app.welcome');
    }

}