<?php

namespace App\Http\Controllers\Auth;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Core\Request;
use Core\Validator;
use App\Http\Controllers\Controller;

class AuthController extends Controller

{
    public function loginView()
    {
        return view("app.auth.login");
    }


    public function registerView()
    {
        return view("app.auth.register");
    }

    public function passwordChangeView()
    {
        return view("app.auth.password-chage");
    }


    public function register(Request $request){
        
    }

    public function login(Request $request){
        
    }

    public function passwordChange(Request $request){
        
    }


}