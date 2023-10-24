<?php 
    class AdminController extends Controller {
        public function __construct() {
            
            // Check login users
            $this->checkLoginUsers();
        }

        public function dashboard() {

        }
    }
?>