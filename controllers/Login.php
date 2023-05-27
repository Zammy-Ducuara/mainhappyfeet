<?php session_start(); 
    require_once "models/Employee.php";
    require_once "models/Customer.php";
    class Login{
        private $session;
        public function __construct(){
            $this->session = new Credential;
        }        
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
                    if ($status == 1) {                        
                        $credential = serialize($credential);                        
                        $_SESSION['profile'] = $credential;
                        header("Location: ?c=Dashboard");
                    } else {
                        echo "El usuario no está activo";
                    }
                } else {
                    echo "El usuario no está registrado en DB";
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