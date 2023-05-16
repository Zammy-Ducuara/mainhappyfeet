<?php
    class Seller extends Credential{        
        protected $salary;
        public function __construct(){
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        }
        # Salario del Vendedor y del Administrador
        public function setSalary($salary){
            $this->salary = $salary;
        }
        public function getSalary(){
            return $this->salary;
        }
        # CU012 - Crear Vendedor
        public function createSeller(){} 
        # CU13 - Consultar Usuarios
        public function readUser(){}
        # CU14 - Actualizar Usuario
        public function updateUser(){}
        # CU# - Generar reporte impreso de usuarios
        public function printedUserReport(){}
        # CU# - Generar reporte gráfico de usuarios
        public function graphicUserReport(){}
    }
?>