<?php
    class Roles{
        public function __construct(){}
        # CU04 - Crear Rol
        public function createRol(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/createRol.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU05 - Consultar Roles
        public function readRol(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/readRol.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU06 - Actualizar Rol
        public function updateRol(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/updateRol.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU07 - Eliminar Rol
        public function deleteRol(){
            echo "Controlador para eliminar rol";
        }
    }
?>