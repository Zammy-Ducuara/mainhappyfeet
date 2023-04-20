<?php
    class Login{
        public function __construct(){}
        public function main(){
            require_once "views/roles/business/header.view.php";
            require_once "views/business/login.view.php";
            require_once "views/roles/business/footer.view.php";
        }
    }
?>