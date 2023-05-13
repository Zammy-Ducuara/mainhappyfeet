<?php
    class Landing{
        public function __construct(){}
        public function main(){
            require_once "views/roles/company/header.view.php";
            require_once "views/roles/company/index.view.php";
            require_once "views/roles/company/footer.view.php";
        }
    }
?>