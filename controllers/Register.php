<?php
    class Register{
        public function __construct(){}
        # CU08 - Registrarse
        public function main(){
            require_once "views/company/header.view.php";
            echo "Controlador para registrarse";            
            require_once "views/company/footer.view.php";
        }
    }
?>