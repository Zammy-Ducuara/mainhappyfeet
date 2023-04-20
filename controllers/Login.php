<?php
    class Login{
        public function __construct(){}
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/business/header.view.php";
                require_once "views/business/login.view.php";
                require_once "views/roles/business/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Captura de datos
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                // Validaciones
                if ($user == 'admin' && $pass == '12345') {
                    header('Location: ?c=Dashboard');                    
                } else {
                    require_once "views/roles/business/header.view.php";
                    require_once "views/business/login.view.php";
                    echo "<h1>Datos Incorrectos</h1>";
                    require_once "views/roles/business/footer.view.php";
                }
                
            }
        }
    }
?>