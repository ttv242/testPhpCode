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

    public function processUploadedFiles($files, $destination)
    {
        // Kiểm tra xem $files có phải là một mảng các tệp tin hay không
        if (is_array($files['name'])) {
            // Trường hợp nhiều ảnh được tải lên
            $uploadedFiles = [];

            foreach ($files['name'] as $key => $name) {
                $tmpName = $files['tmp_name'][$key];
                $error = $files['error'][$key];

                // Kiểm tra xem có lỗi xảy ra khi tải lên không
                if ($error === UPLOAD_ERR_OK) {
                    $destinationPath = $destination . '/' . $name;

                    // Di chuyển tệp tin tải lên vào đích
                    if (move_uploaded_file($tmpName, $destinationPath)) {
                        $uploadedFiles[] = $destinationPath;
                    } else {
                        // Xử lý lỗi di chuyển tệp tin
                    }
                } else {
                    // Xử lý lỗi tải lên
                }
            }

            // Trả về mảng các đường dẫn tới các tệp tin đã tải lên thành công
            return $uploadedFiles;
        } else {
            // Trường hợp chỉ một ảnh được tải lên
            $name = $files['name'];
            $tmpName = $files['tmp_name'];
            $error = $files['error'];

            // Kiểm tra xem có lỗi xảy ra khi tải lên không
            if ($error === UPLOAD_ERR_OK) {
                $destinationPath = $destination . '/' . $name;

                // Di chuyển tệp tin tải lên vào đích
                if (move_uploaded_file($tmpName, $destinationPath)) {
                    // Trả về đường dẫn tới tệp tin đã tải lên thành công
                    return $destinationPath;
                } else {
                    // Xử lý lỗi di chuyển tệp tin
                }
            } else {
                // Xử lý lỗi tải lên
            }
        }

        // Trả về false nếu có lỗi xảy ra
        return false;
    }
}
?>