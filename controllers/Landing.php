<?php
    class Landing{
        public function __construct(){}
        public function main(){
            require_once "views/roles/company/header.view.php";
            require_once "views/roles/company/index.view.php";
            require_once "views/roles/company/footer.view.php";
        }        
        # CU03 - Cerrar Sesión
        public function logout(){
            echo "Controlador para cerrar sesión";
        }
        # CU04 - Crear Rol
        public function createRol(){
            echo "Controlador para crear rol";
        }
        # CU05 - Consultar Roles
        public function readRol(){
            echo "Controlador para consultar roles";
        }
        # CU06 - Actualizar Rol
        public function updateRol(){
            echo "Controlador para actualizar rol";
        }
        # CU07 - Eliminar Rol
        public function deleteRol(){
            echo "Controlador para eliminar rol";
        }
        # CU08 - Crear Usuario
        public function createUser(){
            echo "Controlador para crear usuario";
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
            echo "Controlador para consultar usuarios";
        }
        # CU13 - Actualizar Usuario
        public function updateUser(){
            echo "Controlador para actualizar usuarios";
        }
        # CU14 - Eliminar Usuario
        public function deleteUser(){
            echo "Controlador para eliminar usuarios";
        }
        # CU15 - Registrarse
        public function register(){
            echo "Controlador para registrarse";
        }
        # CU# - Generar reporte impreso de usuarios
        public function printedUserReport(){
            echo "Controlador para generar reporte impreso de usuarios";
        }        
        # CU# - Generar reporte gráfico de usuarios
        public function graphicUserReport(){
            echo "Controlador para generar reporte gráfico de usuarios";
        }
    }
?>