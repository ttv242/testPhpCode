<?php 
    class UsersController extends Controller {
        private $userProfile;
        public function __construct() {
            $this->userProfile = $this->getDataFromJson(PUBLIC_URL . 'json/usersProfile.json');
        }
        public function register() {
            if (!isset($_SESSION["username"])) {
                $title = "Đăng ký";
                include "views/master.php";
            } else {
                header("location: " .project. "userProfile");                
            }
        }
        public function login() {
            if (!isset($_SESSION["username"])) {
                $title = "Đăng nhập";
                $pages = "views/public/pages/login.php";
                include "views/master.php";
            } else {
                header("location: " .project. "userProfile");                
            }
        }
        public function login_() {
            $title = "Đăng nhập";
            if (isset($_POST["username"]) && isset($_POST["password"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                echo" ". $username ." ". $password ." - ";
                $data = $this->userProfile;
                // print_r($data);
                foreach ($data as $key => $value) {
                    foreach ($value as $k => $v) {
                        // print_r($value[7]);
                        echo $v['username'] . " " . $v['password'];
                        if ($v['username'] === $username) {
                            if ($v['password'] === $password) {
                                $_SESSION['id'] = $v['id'];
                                $_SESSION['name'] = $v['name'];
                                $_SESSION['username'] = $v['username'];
                                $_SESSION['email'] = $v['email'];
                                $_SESSION['age'] = $v['age'];
                                header('location: ' . project . 'userProfile?username=' . $v['username']);
                                break;
                            } else $error = 'Mật khẩu không tồn tại';
                        } else $error = 'Tài khoản không tồn tại';
                    }

                }

            }
        }
        
        public function logout_() {
            $title = "Đăng xuất";
            session_unset(); // Xóa tất cả các biến session
            header('location:' . project);
            include "views/master.php";
        }
        
        public function forgotPassword() {
            $title = "Quên mật khẩu";
            include "views/master.php";
        }
        public function changePassword() {
            $title = "Đổi mật khẩu";
            include "views/master.php";
        }
        
        public function userProfile() {
            $id = $_SESSION["id"];
            $name = $_SESSION["name"];
            $username = $_SESSION["username"];
            $email = $_SESSION["email"];
            $age = $_SESSION["age"];

            $friends = $this->userProfile['usersProfile'];
            
            if (isset($username)) {
                $title = "Hồ sơ " . $name;
                $pages = "views/public/pages/userProfile.php";
                include "views/master.php";
            } else {
                header("location: /projectPhp/login");
            }
        }
    }
?>