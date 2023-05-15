<?php
    class Login{
        public function __construct(){}
        # CU01 - Iniciar Sesión
        public function main(){
            require_once "views/company/header.view.php";            
            require_once "views/company/login.view.php";            
            require_once "views/company/footer.view.php";
        }
        # CU02 - Recuperar Contraseña
        public function forgotLogin(){
            require_once "views/company/header.view.php";            
            require_once "views/company/forgot.view.php";            
            require_once "views/company/footer.view.php";
        }
    }
?>