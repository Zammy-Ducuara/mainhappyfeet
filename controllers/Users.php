<?php
    class Users{
        public function __construct(){}        
        # CU08 - Crear Usuario
        public function createUser(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/create_user.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU09 - Crear Administrador
        public function createAdmin(){
            echo "Controlador para crear administrador";
        }
        # CU010 - Crear Cliente
        public function createCustomer(){
            echo "Controlador para crear cliente";
        }
        # CU011 - Crear Vendedor
        public function createSeller(){
            echo "Controlador para crear vendedor";
        }
        # CU12 - Consultar Usuarios
        public function readUser(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/read_user.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU13 - Actualizar Usuario
        public function updateUser(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/update_user.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU14 - Eliminar Usuario
        public function deleteUser(){
            echo "Controlador para eliminar usuarios";
        }
    }
?>