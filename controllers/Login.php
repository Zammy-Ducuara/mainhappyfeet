<?php
    require_once "models/model_dto/Credential.php";
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
                $userDto = new Credential(
                    $_POST['user'], 
                    $_POST['pass']
                );
                if ($userDto->getCodigoUser() == 'admin' && $userDto->getPassUser() == '12345') {
                    header('Location: ?c=Dashboard');                    
                } else {
                    require_once "views/roles/business/header.view.php";
                    require_once "views/business/login.view.php";
                    echo "<h3>Datos Incorrectos</h3>";
                    require_once "views/roles/business/footer.view.php";
                }
            }
        }
    }
?>