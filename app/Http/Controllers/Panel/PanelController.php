<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\City;
use App\Models\Order;
use App\Models\Province;
use App\Models\User;
use Core\Auth;
use Core\FileManager;
use Core\Request;
use Core\Validator;

class PanelController extends Controller
{
    public function __construct()
    {
        if (!Auth::check()){
            redirect('auth/login');
        }
    }

    public function panel()
    {
        $user = Auth::user();
        return view('app.panel.profile' , compact('user'));
    }


    public function personal()
    {
        $user = Auth::user();
        return view('app.panel.profile-personal-info' , compact('user'));
    }
    public function personalEdit()
    {
        $user = Auth::user();
        return view('app.panel.profile-additional-info' , compact('user'));
    }
    
    
    public function personalUpdate()
    {
        $request = new Request();
        $inputs = $request->post();
        $user = Auth::user();
        if (isset($_FILES['profile']) && !empty($_FILES['profile']['tmp_name'])) {
            $fileManager = new FileManager('public/profiles/');
            $inputs['profile'] = $fileManager->uploadFile($_FILES['profile']);
        }else{
            $inputs['profile'] = $user['profile'];
        }
        $userModel = new User();
        $userModel->update($user['id'] , $inputs);
        redirectBack();
    }


    public function address()
    {
        $user = Auth::user();
        $addressModel = new Address();
        $addresses = $addressModel->where(['user_id' => $user['id']]);
        $provinceModel = new Province();
        $cityModel = new City();
        $provinces = $provinceModel->getAll();
        $cities = $cityModel->getAll();
        return view('app.panel.profile-addresses' ,
         compact('user' , 'provinces' , 'cities' , 'addresses'));
    }

    function getCity()
    {
        $request = new Request();
        $province_id = $request->all()['province_id'];
        $cityModel = new City();
        $cities = $cityModel->where(['province_id' => $province_id]);
        toJson($cities);
    }
    function deleteAddress()
    {
        $request = new Request();
        $address_id = $request->all()['id'];
        $addressModel = new Address();
        $addressModel->delete($address_id);
        redirectBack();
    }

    public function storeAddress()
    {
        $request = new Request();
        $inputs = $request->post();
        $validator = new Validator();
        $rules = [
            'name' => 'required',
            'phone' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'post_code' => 'required',
        ];

        $valid = $validator->validate($inputs, $rules);
        if (!$valid) {
            redirectBack();
        }
        $user = Auth::user();
        $addressModel = new Address();
        $inputs['user_id'] = $user['id'];
        $addressModel->create($inputs);
        redirectBack();
    }

    public function orders()
    {
        $user = Auth::user();
        $order = new Order();
        $orders = $order->where(['user_id' => $user['id']]);
        return view('app.panel.profile-orders' , compact('user' , 'orders'));
    }
    

}