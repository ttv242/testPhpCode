<?php
require_once "models/users.php";

class UsersController extends Controller
{
    private $userProfile;
    private $model = null;
    public function __construct()
    {
        $this->model = new users;

        $this->userProfile = $this->getDataFromJson('public/json/usersProfile.json');
    }
    public function register()
    {
        if (!isset($_SESSION["username"])) {
            $title = "Đăng ký";
            include "views/public/pages/auth/register.php";
        } else {
            header("location: " . project . "userProfile" . $_SESSION["username"]);
        }
    }
    public function register_()
    {
        // Chưa cập nhật mã hóa mật khẩu... Lưu ý md5 password nối chuỗi username băm (bảo mật cấp 2)...!!!
        session_unset();
        $full_name = $_POST["full_name"];
        // $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        // echo " ". $full_name ." ". $username ." ". $password;
        if (!empty($full_name) && !empty($username) && !empty($password)) {
            // Lấy tất cả data user
            $data = $this->model->getAllUsers();
            // print_r($data);

            // Nếu có data user
            if (!empty($data)) {
                $check = false;

                // Lọc tất cả user
                foreach ($data as $key => $value) {
                    // print_r($value);

                    // Nếu không tồn tại user đăng ký
                    if ($value["username"] !== $username) {
                        $check = true;
                    } else if ($value["username"] === $username) {
                        $check = false;
                        break;
                    }
                }

                if ($check === true) {
                    // echo "" . $value["username"] . " " . $username;
                    $userId = $this->model->register($full_name, $username, $password);
                    // echo $userId;
                    if (isset($userId) && $userId !== null) {
                        // print_r($data);
                        $userId = $this->model->getUserById($userId);
                        $this->importDataIntoJson($this->userProfile, 'public/json/usersProfile.json', $userId);
                        $success = "Đăng ký tài khoản thành công...!";
                        $_SESSION["success"] = $success;
                        header("location: " . project . "login?success");
                    } else {
                        $error = 'Đăng ký thất bại...!';
                        header('location: ' . project . 'register?error=' . $error);
                    }

                } else {
                    $error = "Tài khoản " . $username . " đã tồn tại, vui lòng đăng ký lại...!";
                    $_SESSION["error"] = $error;
                    header("location: " . project . "register?error");
                }
            } else {
                $role = 1;
                $userId = $this->model->register($full_name, $username, $password, $role);
                // echo $status;
                if (isset($userId) && !empty($userId)) {
                    // print_r($data);
                    $userId = $this->model->getUserById($userId);
                    $this->importDataIntoJson($this->userProfile, 'public/json/usersProfile.json', $userId);
                    $success = "Đăng ký tài khoản thành công...!";
                    $_SESSION["success"] = $success;
                    header("location: " . project . "login?success");
                } else {
                    $error = 'Đăng ký thất bại...!';
                    header('location: ' . project . 'register?error');
                }
            }
        } else {
            $error = "Vui lòng cung cấp đủ thông tin...!";
            $_SESSION["error"] = $error;
            header("location: " . project . "register?error");
        }
    }
    public function login()
    {
        // Phân quyền user ở dashboard bằng middleware tại Admincontroller role == 1 
        // Mã hóa POST username & password -> login
        if (!isset($_SESSION["username"])) {
            // $data = $this->userProfile;
            $title = "Đăng nhập";
            include "views/public/pages/auth/login.php";
        } else {
            header("location: " . project . "userProfile");
        }
    }
    public function login_()
    {
        session_unset();

        if (isset($_POST["username"]) && isset($_POST["password"])) {

            $username = $_POST["username"];
            $password = $_POST["password"];
            // echo " " . $username . " " . $password . " - ";
            $data = $this->userProfile;
            // $this->updatedDataIntoJson($this->userProfile, 'public/json/usersProfile.json', $data);
            // print_r($data);
            foreach ($data as $key => $value) {
                if ($value['username'] === $username) {
                    if ($value['password'] === $password) {
                        foreach ($value as $key2 => $value2) {
                            if ($key2 == 'created_at' || $key2 == 'updated_at') {
                                if (empty($value2) || $value2 === "") {
                                    $value[$key2] = "Chưa cập nhật";
                                } else {
                                    $timestamp = strtotime($value2);
                                    $formattedDate = date('d/m/Y H:i:s', $timestamp);
                                    $value[$key2] = $formattedDate;
                                }
                            } else {
                                if (empty($value2) || $value2 === "") {
                                    $value[$key2] = "Chưa cập nhật";
                                }
                            }

                            $_SESSION[$key2] = $value[$key2];
                        }

                        header('location: ' . project . '');
                        break;
                    } else {
                        $error = 'Mật khẩu không tồn tại';
                        $_SESSION["error"] = $error;
                        header("location: " . project . "login?error");
                    }
                } else {
                    $error = 'Tài khoản không tồn tại';
                    $_SESSION["error"] = $error;
                    header("location: " . project . "login?error");
                }
            }
        }
    }

    public function logout_()
    {
        $title = "Đăng xuất";
        session_unset(); // Xóa tất cả các biến session
        header("location: " . project . "login");
    }

    public function forgotPassword()
    {
        $title = "Quên mật khẩu";
        include "views/master.php";
    }
    public function changePassword()
    {
        $title = "Đổi mật khẩu";
        include "views/master.php";
    }



    public function getDataUserProfile($username)
    {
        if (isset($username)) {
            $this->checkLoginUsers();
            // Check user
            $data = $this->userProfile;
            $check = false;
            $userData = [];
            foreach ($data as $key => $value) {
                // print_r($value);
                if ($value["username"] === $username) {
                    $check = true;
                    $userData = $value;
                    break;
                }
            }

            if ($check == true) {
                $data = $userData;
                $count = 0;

                foreach ($data as $key => $value) {
                    if ($key == 'created_at' || $key == 'updated_at') {
                        if (empty($value) || $value === "") {
                            $data[$key] = "Chưa cập nhật";
                            $count++;
                        } else {
                            $timestamp = strtotime($value);
                            $formattedDate = date('d/m/Y H:i:s', $timestamp);
                            $data[$key] = $formattedDate;
                        }
                    } else {
                        if (empty($value) || $value === "") {
                            $data[$key] = "Chưa cập nhật";
                            $count++;
                        }
                    }
                }


                // print_r($data);
                $percent = round(($count + 1) * 100 / 19);
                return array('data' => $data, 'percent' => $percent);

            } else {
                return false;
            }

        } else {
            return false;
        }
    }
    public function userProfile()
    {
        $username = $_GET["username"];
        $getDataUserProfile = $this->getDataUserProfile($username);

        if (isset($getDataUserProfile) && $getDataUserProfile != false) {
            $data = $getDataUserProfile["data"];
            $percent = $getDataUserProfile['percent'];
            $title = "Hồ sơ " . $data['full_name'];
            $pages = "views/public/pages/auth/userProfile.php";
            include "views/master.php";
        } else {
            echo "Không tồn tại " . $username;
            // header("location: /projectPhp/login");
        }
    }

    public function updateUserProfile()
    {

        $username = $_SESSION["username"];
        if ($username === $_GET["username"]) {
            $getDataUserProfile = $this->getDataUserProfile($username);
        } else header("Location: " . project . "updateuserprofile?username=" . $_SESSION["username"]);

        if (isset($getDataUserProfile) && $getDataUserProfile != false) {
            $data = $getDataUserProfile['data'];
            $percent = $getDataUserProfile['percent'];
            if ($data["username"] === $username) {
                foreach ($data as $key => $val) {
                    ${$key} = $val;
                }

                $title = "Cập nhật thông tin tài khoản " . $username;
                $pages = "views/public/pages/auth/updateUserProfile.php";
                include "views/master.php";
            }
        } else header("Location: " . project . "updateuserprofile?username=" . $_SESSION["username"]);
    }
    public function updateUserProfile_()
    {
        if (isset($_SESSION["status"])) {
            unset($_SESSION['status']);
        }

        // Kiểm tra xem form đã được submit hay chưa
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy tất cả các bài đăng từ form
            $posts = [];

            foreach ($_POST as $key => $value) {
                // Kiểm tra nếu trường dữ liệu là một bài đăng
                if (strpos($key, 'post_') === 0) {
                    $postId = substr($key, strlen('post_'));
                    $postContent = $value;

                    // Lưu thông tin bài đăng vào mảng
                    $posts[$postId] = $postContent;
                }
            }

            $destination = "public/uploads/avatar_img";

            if (isset($_FILES['avatar_img']) && file_exists($destination)) {
                $result = $this->processUploadedFiles($_FILES['avatar_img'], $destination);
                print_r($_FILES['avatar_img']);
            }

            // print_r($_POST);
        }

        // $id = $_POST["id"];
        // $full_name = $_POST["full_name"];
        // $email = $_POST["email"];
        // $birthday = $_POST["birthday"];
        // echo $id . " " . $full_name . " " . $email . " " . $birthday;
        // if (!empty($full_name) && !empty($email) && $birthday > 18) {
        //     $status = $this->model->updateUserProfile($id, $full_name, $email, $birthday);
        // }

        // // $status = $status == true ? "Cập nhật thành công" : "Cập nhật không thành công";
        // if ($status == true) {
        //     $status = "Cập nhật thành công";
        //     $userId = $this->model->getUserById($id);
        //     $this->updatedDataIntoJson($this->userProfile, 'public/json/usersProfile.json', $userId);
        // } else
        //     $status = "Cập nhật không thành công";
        // $_SESSION["status"] = $status;

        // header("Location: " . project . "updateuserprofile?username=" . $_SESSION["username"] . "&status");
    }
}
?>