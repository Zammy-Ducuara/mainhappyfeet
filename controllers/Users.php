<?php
    class Users{
        public function __construct(){}        
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