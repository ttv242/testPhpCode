<?php
session_start();
require_once "config.php";
spl_autoload_register(function ($class) {
    require "controllers/" . $class . ".php";
});
CONST project = "/projectPhp/";


$router = [
    'get' => [
        
        // PagesController
        ''  =>  [new PagesController, 'home'],
        'about' => [new PagesController, 'about'],
        'news' => [new PagesController, 'news'],
        'contact'  => [new PagesController, 'contact'],
        'errors' => [new PagesController, 'errors'],

        // usersController
        'register' => [new usersController, 'register'],
        'login' => [new usersController, 'login'],
        'logout' => [new usersController, 'logout_'],
        'forgotpassword' => [new usersController, 'forgotPassword'],
        'changepassword' => [new usersController, 'changePassword'],
        
        'userprofile' => [new usersController, 'userProfile'],
        
        
    ],
    'post' => [
        'login_' => [new usersController, 'login_'],

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
