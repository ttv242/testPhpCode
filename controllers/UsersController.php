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
        $name = $_POST["name"];
        $email = $_POST["email"];
        $birthday = $_POST["birthday"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = 0;
        if (!empty($name) && !empty($username) && !empty($password)) {
            $data = $this->model->getAllUsers();
            // print_r($data);
            if (!empty($data)) {
                $check = false;
                foreach ($data as $key => $value) {
                    // print_r($value);
                    if ($value["username"] !== $username) {
                        $check = true;
                    } else if ($value["username"] === $username) {
                        $check = false;
                        break;
                    }
                }

                if ($check === true) {
                    // echo "" . $value["username"] . " " . $username;
                    $userId = $this->model->register($name, $email, $birthday, $username, $password, $role);
                    // echo $status;
                    if (isset($userId)) {
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
                $userId = $this->model->register($name, $email, $birthday, $username, $password, $role);
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
                // echo $key;
                print_r($value);
                // foreach ($value as $k => $v) {
                // print_r($v);
                // echo $v['username'] . " " . $v['password'];
                if ($value['username'] === $username) {
                    if ($value['password'] === $password) {
                        $_SESSION['id'] = $value['id'];
                        $_SESSION['name'] = $value['name'];
                        $_SESSION['username'] = $value['username'];
                        $_SESSION['email'] = $value['email'];
                        $_SESSION['birthday'] = $value['birthday'];
                        header('location: ' . project . '');
                        break;
                    } else
                        $error = 'Mật khẩu không tồn tại';
                    $_SESSION["error"] = $error;
                    header("location: " . project . "login?error");
                } else
                    $error = 'Tài khoản không tồn tại';
                $_SESSION["error"] = $error;
                header("location: " . project . "login?error");
                // }

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

    public function userProfile()
    {
        // $birthday = $_SESSION["birthday"]; //
        // Birthday
        // Banking
        // Phone
        // Nickname
        // Address fk
        // Avatar img
        // Link fb
        // 
        // echo $_GET["username"];
        $username = $_GET["username"];
        if (isset($username)) {
            // Check user
            $data = $this->userProfile;
            $check = false;
            foreach ($data as $key => $value) {
                // print_r($value);
                if ($value["username"] === $username) {
                    $check = true;
                    break;
                }
            }

            if ($check == true) {
                $name = $value["name"];
                $email = $value["email"];
                $birthday = $value["birthday"];
                $title = "Hồ sơ " . $name;
                $friends = $data;
                $pages = "views/public/pages/auth/userProfile.php";
                include "views/master.php";
            } else {
                echo "Không tồn tại " . $username;
            }

        } else {
            echo "Không tồn tại " . $username;
            // header("location: /projectPhp/login");
        }
    }

    public function updateUserProfile()
    {
        $this->checkLoginUsers();

        $username = $_GET["username"];

        if (isset($_SESSION["username"]) && isset($username)) {
            $data = $this->userProfile;
            foreach ($data as $value) {
                if ($value["username"] === $username) {
                    $id = $value["id"];
                    $name = $value["name"];
                    $email = $value["email"];
                    $birthday = $value["birthday"];
                    $title = "Cập nhật thông tin tài khoản " . $username;
                    $pages = "views/public/pages/updateUserProfile.php";
                    include "views/master.php";
                    break;
                }
            }

        }

    }
    public function updateUserProfile_()
    {
        if (isset($_SESSION["status"])) {
            unset($_SESSION['status']);
        }

        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $birthday = $_POST["birthday"];
        echo $id . " " . $name . " " . $email . " " . $birthday;
        if (!empty($name) && !empty($email) && $birthday > 18) {
            $status = $this->model->updateUserProfile($id, $name, $email, $birthday);
        }

        // $status = $status == true ? "Cập nhật thành công" : "Cập nhật không thành công";
        if ($status == true) {
            $status = "Cập nhật thành công";
            $userId = $this->model->getUserById($id);
            $this->updatedDataIntoJson($this->userProfile, 'public/json/usersProfile.json', $userId);
        } else
            $status = "Cập nhật không thành công";
        $_SESSION["status"] = $status;

        header("Location: " . project . "updateuserprofile?username=" . $_SESSION["username"] . "&status");
    }
}
?>