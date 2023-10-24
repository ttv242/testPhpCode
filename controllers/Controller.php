<?php
class Controller
{
    public function __construct()
    {
    }
    
    protected function getDataFromJson($filePath)
    {
        if (file_exists($filePath)) {
            $jsonString = file_get_contents($filePath); // Đọc nội dung của tệp JSON
            $data = json_decode($jsonString, true); // Chuyển đổi JSON thành một mảng trong PHP
            
            return $data;
        } else {
            echo "Không tồn tại " . $filePath;
        }
    }

    function checkLoginUsers()
    {
        if (isset($_SESSION['role']) == false || $_SESSION['role'] != true) {
            // $_SESSION['back'] =  $_SERVER['REQUEST_URI'];
            header("location:" . ROOT_URL . "login");
            exit();
        }
    }
}
?>