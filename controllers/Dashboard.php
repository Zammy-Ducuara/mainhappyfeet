<?php session_start();
    require_once "models/Credential.php";
    class Dashboard{
        public function __construct(){}
        public function main(){
            require_once "views/roles/admin/header.view.php";
            $profile = unserialize($_SESSION['profile']);
            echo "<br>" . $profile->getRolCode();
            echo "<br>" . $profile->getUserCode();            
            echo "<br>" . $profile->getUserName();            
            // require_once "views/roles/admin/admin.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
    }
?>