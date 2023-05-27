<?php 
    require_once "models/Employee.php";
    require_once "models/Customer.php";
    class Login{
        public function __construct(){}        
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/company/header.view.php";            
                require_once "views/company/login.view.php";            
                require_once "views/company/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $credential = new Credential(
                    $_POST['userEmail'],
                    $_POST['credentialPass']
                );
                $credential = $credential->login();
                if ($credential) {
                    $status = $credential->getCredentialStatus();
                    $rol = $credential->getRolName();                    
                    if ($status == 1) {                        
                        if ($rol == "admin") {
                            echo "Administrador";                            
                        } elseif ($rol == "seller") {
                            echo "Vendedor";
                        } elseif ($rol == "customer") {
                            echo "Cliente";
                        }
                    } else {
                        echo "El usuario no está activo";
                    }
                } else {
                    echo "No hay registro en DB";
                }
            }
        }        
        public function forgotLogin(){
            require_once "views/company/header.view.php";            
            require_once "views/company/forgot.view.php";            
            require_once "views/company/footer.view.php";
        }
    }
?>