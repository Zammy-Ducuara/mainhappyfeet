<?php
    require_once "models/model_dto/Rol.php";
    require_once "models/model_dao/RolDao.php";
    class Users{
        private $rolDao;
        public function __construct(){
            $this->rolDao = new RolDao;
        }
        public function createRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/1_users/rol_create.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {                
                $rolDto = new Rol(
                    $_POST['rolCodigo'],
                    $_POST['rolNombre']
                );                
                $this->rolDao->rolCreateDao($rolDto);
                header("Location: ?c=Users&a=readRol");
            }
        }
        public function readRol(){
            $roles = $this->rolDao->rolReadDao();            
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/1_users/rol_read.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        public function updateRol(){}
        public function deleteRol(){}
    }
?>