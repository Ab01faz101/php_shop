<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Core\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        if (Auth::user()['is_admin'] == 0){
            redirect('404');
        }
    }
    public function index()
    {
        return view('admin.dashboard');
    }
}