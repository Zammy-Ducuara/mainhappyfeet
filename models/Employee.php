<?php
    require_once "models/Credential.php";
    class Employee extends Credential{
        private $dbh;        
        private $employeeCode;
        private $employeeSalary;
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
        public function __construct2($employeeCode,$employeeSalary){            
            $this->employeeCode = $employeeCode;
            $this->employeeSalary = $employeeSalary;
        }
        # Código de Empleado
        public function setEmployeeCode($employeeCode){
            $this->employeeCode = $employeeCode;
        }
        public function getEmployeeCode(){
            return $this->employeeCode;
        }
        # Salario Empleado (Vendedor o Administrador)
        public function setEmployeeSalary($employeeSalary){
            $this->employeeSalary = $employeeSalary;
        }
        public function getEmployeeSalary(){
            return $this->employeeSalary;
        }

/*  ---------------------------------------------------------------------------  */
/*  -------------------------- CASOS DE USO EMPLEADO --------------------------  */
/*  ---------------------------------------------------------------------------  */

        # CU013 - Crear Empleado (Vendedor o Administrador)
        public function createEmployee(){
            try {
                $sql = "INSERT INTO EMPLOYEES VALUES (
                    :employeeCode,
                    :employeeSalary
                )";                
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('employeeCode', $this->getEmployeeCode());                
                $stmt->bindValue('employeeSalary', $this->getEmployeeSalary());
                $stmt->execute();                
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU# - Generar reporte impreso de usuarios
        public function printedUserReport(){}
        # CU# - Generar reporte gráfico de usuarios
        public function graphicUserReport(){}
    }
?>