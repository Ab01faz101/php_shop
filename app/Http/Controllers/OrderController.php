<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Product;
use Core\Auth;
use Core\Request;

class OrderController
{

    public function __construct()
    {
        if (!Auth::check()){
            redirect('auth/login');
        }
    }


    public function cart()
    {
        $cartModel = new Cart();
        $user = Auth::user();
        $productModel = new Product();
        $carts = $cartModel->where(['user_id'=> $user['id']]);
        if (empty($carts)){
            $products = $productModel->getAll();
            return view('app.cart-empty' , compact('products'));
        }else{
            return view('app.cart' , compact('carts'));
        }
    }

    public function addToCart()
    {
        $request = new Request();
        $inputs = $request->all();
        $user = Auth::user();
        $inputs['user_id'] = $user['id'];
        $cartModel = new Cart();
        $cartModel->create($inputs);
        redirect('/cart');
    }

    public function removeToCart()
    {
        $request = new Request();
        $inputs = $request->all();
        $user = Auth::user();
        $cartModel = new Cart();
        $cartModel->delete($inputs['id']);
        redirect('/cart');
    }


    public function order()
    {

    }

    public function orderStore()
    {
        $request = new Request();
        $inputs = $request->all();
        dd($inputs);
    }



}