<?php

namespace App\Http\Controllers;


use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Core\Auth;
use Core\Request;

class OrderController
{

    public function __construct()
    {
        if (!Auth::check()) {
            redirect('auth/login');
        }
    }


    public function cart()
    {
        $cartModel = new Cart();
        $user = Auth::user();
        $productModel = new Product();
        $carts = $cartModel->where(['user_id' => $user['id']]);
        if (empty($carts)) {
            $products = $productModel->getAll();
            return view('app.cart-empty', compact('products'));
        } else {
            return view('app.cart', compact('carts'));
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
        $cartModel = new Cart();
        $user = Auth::user();
        $productModel = new Product();
        $addressModel = new Address();
        $addresses = $addressModel->where(['user_id' => $user['id']]);
        $carts = $cartModel->where(['user_id' => $user['id']]);
        return view('app.shopping', compact('carts', 'user', 'addresses'));
    }


    public function plus()
    {
        $request = new Request();
        $inputs = $request->all();
        $cartModel = new Cart();
        $cart = $cartModel->find($inputs['id']);
        if ($cart['count'] < 5) {
            $inputs['count'] = ++$cart['count'];
            $data = $cartModel->update($inputs['id'], $inputs);
        }
        redirectBack();
    }


    public function min()
    {
        $request = new Request();
        $inputs = $request->all();
        $cartModel = new Cart();
        $cart = $cartModel->find($inputs['id']);
        if ($cart['count'] > 1) {
            $cartModel->update($inputs['id'], ['count' => --$cart['count']]);
        }
        redirectBack();
    }

    public function orderStore()
    {
        $request = new Request();
        $inputs = $request->all();
        $cartModel = new Cart();
        $user = Auth::user();
        $productModel = new Product();
        $addressModel = new Address();
        $addresses = $addressModel->where(['user_id' => $user['id']]);
        $carts = $cartModel->where(['user_id' => $user['id']]);
        $price = 0;


        foreach ($carts as $cartItem) {
            $productModel = new \App\Models\Product();
            $product = $productModel->find($cartItem["product_id"]);
            $price += $product['price'] * $cartItem['count'];
        }


        $order = new Order();
        $orderItem = new OrderItem();
        $inputs = [
            "user_id" => $user['id'],
            "address_id" => $inputs['address_id'],
            "tracking_number" => rand(11111, 99999),
            "total_price" => $price
        ];

        $userOrder = $order->create($inputs);
        foreach ($carts as $cartItem) {
            $inputs = [
                "order_id" => $userOrder['id'],
                "product_id" => $cartItem["product_id"],
                "count" => $cartItem["count"],
            ];
            $orderItem->create($inputs);
        }
        redirect('pay-order?id=' . $userOrder['id']);
    }

    public function payOrder()
    {
        $request = new Request();
        $id = $request->all()['id'];
        $order = new Order();
        $orderItem = new OrderItem();
        $order = $order->find($id);
        $orderItems = $orderItem->where(['order_id' => $order['id']]);
        return view('app.shopping-peyment' , compact('order' , 'orderItems'));
    }

    public function confirmOrder()
    {
        $request = new Request();
        $id = $request->all()['order_id'];
        $order = new Order();
        $order->update($id , ['status' => 'paid']);
        redirect('success-order?order_id=' . $id);
    }

    public function success()
    {
        $request = new Request();
        $id = $request->all()['order_id'];
        $order = new Order();
        $orderItem = new OrderItem();
        $order = $order->find($id);
        $orderItems = $orderItem->where(['order_id' => $order['id']]);
        $addressModel = new Address();
        $address = $addressModel->find($order['address_id']);
        $user = Auth::user();
        return view('app.shopping-complete-buy'  , compact('order' , 'address' , 'user' , 'orderItems'));
    }


}