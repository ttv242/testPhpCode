<?php
session_start();
require_once "config.php";
spl_autoload_register(function ($class) {
    require "controllers/" . $class . ".php";
});
CONST project = "/projectPhp/";
const BASE_DIR = __DIR__;
define('PUBLIC_URL', '/public/');


$router = [
    'get' => [
        
        // PagesController
        ''  =>  [new PagesController, 'home'],
        'about' => [new PagesController, 'about'],
        'news' => [new PagesController, 'news'],
        'contact'  => [new PagesController, 'contact'],
        'errors/404' => [new PagesController, 'notFound'],

        // usersController
        'register' => [new usersController, 'register'],
        'login' => [new usersController, 'login'],
        'logout' => [new usersController, 'logout_'],
        'forgotpassword' => [new usersController, 'forgotPassword'],
        'changepassword' => [new usersController, 'changePassword'],
        
        'userprofile' => [new usersController, 'userProfile'],
        'updateuserprofile' => [new usersController, 'updateUserProfile'],
        
        
    ],
    'post' => [
        'register_' => [new usersController, 'register_'],
        'login_' => [new usersController, 'login_'],
        'updateuserprofile_' => [new usersController, 'updateUserProfile_'],

    ]
];



$path = substr($_SERVER['REQUEST_URI'], strlen(project)); //Loai?idloai=1&page=3

$arr = explode("?", $path);  // ['Loai', 'idloai=1&page=3]
$route = strtolower($arr[0]);  //loai

// echo $arr[0];
if (count($arr) >= 2) parse_str($arr[1], $params);  // [idloai=>1, page=>3]
else $params = [];
$method = strtolower($_SERVER['REQUEST_METHOD']); //get
if (!array_key_exists($method, $router)) die("Method khong phù hợp:" . $method);
if (!array_key_exists($route, $router[$method])) die("Route đâu có:" . $route);
$action = $router[$method][$route];  // [0 => SanphamController, 1 => detail]
call_user_func($action);
