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

    public function store(){
        $request = new Request();
        $data = $request->post();
        $validator = new Validator();
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
        $valid = $validator->validate($data, $rules);


        dd($valid);
    }

}