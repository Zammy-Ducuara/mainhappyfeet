<?php
    class Users{
        public function __construct(){}        
        # CU09 - Crear Usuario
        public function createUser(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/create_user.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU10 - Crear Administrador
        public function createAdmin(){
            echo "Controlador para crear administrador";
        }
        # CU011 - Crear Cliente
        public function createCustomer(){
            echo "Controlador para crear cliente";
        }
        # CU012 - Crear Vendedor
        public function createSeller(){
            echo "Controlador para crear vendedor";
        }
        # CU13 - Consultar Usuarios
        public function readUser(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/read_user.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU14 - Actualizar Usuario
        public function updateUser(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/update_user.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU15 - Editar Perfil
        public function editProfile(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/edit_profile.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU16 - Eliminar Usuario
        public function deleteUser(){
            echo "Controlador para eliminar usuarios";
        }
    }
?>