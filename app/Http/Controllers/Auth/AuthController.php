<?php

namespace App\Http\Controllers\Auth;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Core\Request;
use Core\Validator;
use App\Http\Controllers\Controller;
use Core\Auth;
class AuthController extends Controller
{
    private function chckAuth()
    {
        if (Auth::check()) {
            redirect('/');
        }
    }
    public function loginView()
    {
        $this->chckAuth();
        return view("app.auth.login");
    }


    public function registerView()
    {
        $this->chckAuth();
        return view("app.auth.register");
    }

    public function passwordChangeView()
    {
        $this->chckAuth();
        return view("app.auth.password");
    }


    public function register()
    {
        $request = new Request();
        $inputs = $request->all();
        $validator = new Validator();
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        $userModel = new User();
        $users = $userModel->where(['email' => $inputs['email']]);
        $user = isset($users[0]) ? $users[0] : null;
        if (!$valid || ($user && isset($user['id']) && !empty($user['id']))) {
            flash('error', 'کاربر در سیستم وجود دارد');
            redirect('auth/register');
            return false;
        }


        $userModel->create($inputs);
        flash('register', 'ثبت نام با موفقیت انجام شد');
        redirect('auth/login');
    }

    public function login()
    {
        $request = new Request();
        $inputs = $request->all();
        $validator = new Validator();
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        $userModel = new User();
        if (!$valid) {
            flash('error', 'مقدار ایمیل و پسورد را وارد نمایید');
            redirect('auth/login');
        }
        if (Auth::attempt($inputs)) {
            flash('login', 'ورود موفقیت آمیز بود');
            redirect('/');
        } else {
            flash('error', 'ورود موفقیت آمیز نبود');
        }
    }

    public function passwordChange()
    {
        $request = new Request();
        $inputs = $request->all();
        $validator = new Validator();
        $rules = [
            'old_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        $userModel = new User();
        if (!$valid) {
            flash('error', 'مقدار  پسورد را وارد نمایید');
            redirect('auth/chage-password');
            return false;
        }
        $user = Auth::user();
        if ($inputs['old_password'] == $user['password'] && $inputs['password'] == $inputs['confirm_password']) {
            $userModel = new User();
            $userModel->update($user['id'], ['password' => $inputs['password']]);
            redirect('/');
        } else {
            flash('error', 'اطلاعات صحیع نمی باشد');
            redirect('auth/chage-password');
        }
    }


    public function logout()
    {
        Auth::logout();
        redirect('auth/login');
    }

}