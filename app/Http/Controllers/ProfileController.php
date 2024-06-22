<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'name'=>$name,
            'age'=>$age,
            'id'=>$id
        ];

$cookie_name ="access_token";
$value = "123-XYZ";
$minutes = time()+60*1;
$path = '/';
$domain = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';
$secure = false;
$httpOnly = true;
        $cookie_domain = 
        setcookie(
            $cookie_name,
            $value,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );
        http_response_code(200);
        return json_encode($data);



    }
}
