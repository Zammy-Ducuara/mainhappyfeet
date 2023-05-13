<?php
    class Login{
        public function __construct(){}
        # CU01 - Iniciar Sesión
        public function main(){
            require_once "views/roles/company/header.view.php";
            header("Location:?c=Dashboard");            
            require_once "views/roles/company/footer.view.php";
        }
        # CU02 - Recuperar Contraseña
        public function forgotLogin(){
            echo "Controlador para recuperar contraseña";
        }
    }
?>