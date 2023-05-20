<?php
    class Employee extends Credential{
        private $dbh;        
        protected $employeeSalary;
        public function __construct(){
            try {
                $this->dbh = DataBase::connection();
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function __construct11($employeeSalary){            
            $this->employeeSalary = $employeeSalary;
        }
        # Salario Empleado (Vendedor o Administrador)
        public function setEmployeeSalary($employeeSalary){
            $this->employeeSalary = $employeeSalary;
        }
        public function getEmployeeSalary(){
            return $this->employeeSalary;
        }        
        # CU012 - Crear Empleado (Vendedor o Administrador)
        public function createEmployee(){
            
        }
        # CU# - Generar reporte impreso de usuarios
        public function printedUserReport(){}
        # CU# - Generar reporte gráfico de usuarios
        public function graphicUserReport(){}
    }
?>