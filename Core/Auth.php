<?php

namespace Core;

use App\Models\User;

class Auth
{
    private static $sessionKey = 'user_auth';
    
    public static function attempt($credentials)
    {
        $userModel = new User();
        $user = $userModel->where(['email' => $credentials['email']]);
        
        if ($user && $credentials['password'] == $user[0]['password']) {
            $_SESSION[self::$sessionKey] = $user[0]['id'];
            return true;
        }
        return false;
    }
    
    public static function check()
    {
        return isset($_SESSION[self::$sessionKey]);
    }
    
    public static function user()
    {
        if (self::check()) {
            $userModel = new User();
            return $userModel->find($_SESSION[self::$sessionKey]);
        }
        return null;
    }
    
    public static function logout()
    {
        unset($_SESSION[self::$sessionKey]);
    }

}