<?php
    require_once "models/User.php";
    class Roles{
        public function __construct(){}
        # CU04 - Crear Rol
        public function createRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/01_users/create_rol.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rolObj = new User(null,$_POST['rolName']);
                header("Location: ?c=Roles&a=readRol");
            }
        }
        # CU05 - Consultar Roles
        public function readRol(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/read_rol.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU06 - Actualizar Rol
        public function updateRol(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/update_rol.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU07 - Eliminar Rol
        public function deleteRol(){
            echo "Controlador para eliminar rol";
        }
    }
?>