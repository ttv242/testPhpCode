<?php

require_once "models/database.php";

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

    protected function importDataIntoJson($currentData, $filePath, $data)
    {
        if (isset($currentData) && isset($filePath) && isset($data)) {
            if (!in_array($data, $currentData)) {
                $currentData[] = $data;
            }
            // }

            // Chuyển đổi mảng thành định dạng JSON
            $newJsonData = json_encode($currentData, JSON_PRETTY_PRINT);

            // Ghi dữ liệu JSON vào tệp
            file_put_contents($filePath, $newJsonData);

            // In ra thông báo thành công
            echo "Dữ liệu đã được nhập vào tệp JSON thành công.";
        }
    }

    protected function updatedDataIntoJson($currentData, $filePath, $data)
{
    if (!empty($currentData) && !empty($filePath) && !empty($data)) {
        // Đọc dữ liệu hiện tại từ tệp JSON
        $jsonData = file_get_contents($filePath);

        // Chuyển đổi dữ liệu JSON thành mảng
        $dataArray = json_decode($jsonData, true);

        // Lặp qua các mục trong mảng hiện tại
        foreach ($dataArray as &$currentItem) {
            if ($currentItem["id"] === $data["id"]) {
                $currentItem = $data;
                break;
            }
        }

        // Chuyển đổi mảng thành định dạng JSON
        $newJsonData = json_encode($dataArray, JSON_PRETTY_PRINT);

        // Ghi dữ liệu JSON vào tệp
        file_put_contents($filePath, $newJsonData);

        // In ra thông báo thành công
        // echo "Dữ liệu đã được cập nhật vào tệp JSON thành công.";
    }
}

    function checkLoginUsers()
    {
        if (isset($_SESSION['username']) == false || $_SESSION['username'] == "") {
            // $_SESSION['back'] =  $_SERVER['REQUEST_URI'];
            header("location:" . project . "login");
            exit();
        }
    }
}
?>