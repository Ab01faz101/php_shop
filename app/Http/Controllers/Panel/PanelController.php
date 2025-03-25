<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Core\Auth;
use Core\FileManager;
use Core\Request;
use Core\Validator;

class PanelController extends Controller
{
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
        return view('app.panel.profile-addresses' , compact('user' , 'addresses'));
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
        dd($inputs);

        $valid = $validator->validate($inputs, $rules);
        if (!$valid) {
            redirectBack();
        }



    }
    

}