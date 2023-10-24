<?php
class PagesController extends Controller
{
    public function home()
    {
        $title = "Trang chủ";
        $pages = "views/public/pages/home.php";
        include("views/master.php");
    }
    public function about()
    {
        $title = "Giới thiệu";
        $pages = "views/public/pages/about.php";
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
}
?>