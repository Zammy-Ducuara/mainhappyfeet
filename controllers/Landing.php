<?php session_start();
    class Landing{        
        public function __construct(){
            if (empty($_SESSION['profile'])) {
                $_SESSION['profile'] = null;
                $_SESSION['session'] = null;
            }
        }
        public function main(){
            require_once "views/company/header.view.php";
            require_once "views/company/index.view.php";
            require_once "views/company/footer.view.php";
        }
    }
?>