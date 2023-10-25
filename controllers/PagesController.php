<?php
class PagesController extends Controller
{
    public function __construct() {
        
    }
    public function home()
    {

        $this->checkLoginUsers();
        $title = "Trang chủ";
        $pages = "views/public/pages/subpages/home.php";
        include("views/master.php");
    }
    public function about()
    {
        $title = "Giới thiệu";
        $pages = "views/public/pages/subpages/about.php";
        include("views/master.php");
    }
    public function news()
    {
        $title = "Tin tức";
        $pages = "views/public/pages/news.php";
        include("views/master.php");
    }
    public function contact()
    {
        $title = "Liên hệ";
        $pages = "views/public/pages/contact.php";
        include("views/master.php");
    }
    // public function notFound()
    // {
    //     $title = "Lỗi 404 - Not Found";
    //     include("views/public/pages/errors/404.php");
    // }
}
?>