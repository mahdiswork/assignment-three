<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
       $name = "Md. Mahdi Hasan";
       $age = 21;
       
       $data = [
            'id' => $id,
           'name' => $name,
           'age' => $age
       ];

       $cookie_name = "access_token";
       $value = "123-XYZ";
       $minutes = 60;
       $path = "/";
       $domain = $_SERVER['SERVER_NAME'];
       $secure = false;
       $httpOnly = true;

       return response($data, 200)->withCookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
