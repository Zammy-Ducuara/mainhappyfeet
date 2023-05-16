<?php
    class User{
        private $dbh;
        protected $rolCode;
        protected $rolName;
        protected $userCode;
        protected $userName;
        protected $userLastName;
        protected $userEmail;
        public function __construct(){
            try {
                $this->dbh = DataBase::connection();
            } catch (Exception $e) {
                die($e->getMessage());
            }
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        }
        public function __construct2($rolCode,$rolName){
            $this->rolCode = $rolCode;
            $this->rolName = $rolName;
        }
        public function __construct6($rolCode,$rolName,$userCode,$userName,$userLastName,$userEmail){
            $this->rolCode = $rolCode;
            $this->rolName = $rolName;
            $this->userCode = $userCode;
            $this->userName = $userName;
            $this->userLastName = $userLastName;
            $this->userEmail = $userEmail;
        }
        # Código del Rol
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        }
        public function getRolCode(){
            return $this->rolCode;
        }
        # Nombre del Rol
        public function setRolName($rolName){
            $this->rolName = $rolName;
        }
        public function getRolName(){
            return $this->rolName;
        }
        # Código de Usuario
        public function setUserCode($userCode){
            $this->userCode = $userCode;
        }
        public function getUserCode(){
            return $this->userCode;
        }
        # Nombres de Usuario
        public function setUserName($userName){
            $this->userName = $userName;
        }
        public function getUserName(){
            return $this->userName;
        }
        # Apellidos de Usuario
        public function setUserLastName($userLastName){
            $this->userLastName = $userLastName;
        }
        public function getuserLastName(){
            return $this->userLastName;
        }
        # Email de Usuario
        public function setUserEmail($userEmail){
            $this->userEmail = $userEmail;
        }
        public function getUserEmail(){
            return $this->userEmail;
        }        
        # CU04 - Crear Rol
        public function createRol(){
            try {                
                $sql = 'INSERT INTO ROLES VALUES (:rolCode,:rolName)';                
                $stmt = $this->dbh->prepare($sql);                
                $stmt->bindValue('rolCode', $this->getRolCode());
                $stmt->bindValue('rolName', $this->getRolName());                
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU05 - Consultar Roles
        public function readRol(){
            try {
                $rolList = [];
                $sql = 'SELECT * FROM ROLES';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $rol) {
                    $rolList[] = new User(
                        $rol['rol_code'],
                        $rol['rol_name']
                    );
                }
                return $rolList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU06_01 - Obtener el código del Rol
        public function getRolByCode($rolCode){
            try {
                $sql = "SELECT * FROM ROLES WHERE rol_code=:rolCode";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $rolCode);
                $stmt->execute();
                $rolDb = $stmt->fetch();
                $rol = new User(
                    $rolDb['rol_code'],
                    $rolDb['rol_name']
                );
                return $rol;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU06 - Actualizar Rol
        public function updateRol(){
            try {                
                $sql = 'UPDATE ROLES SET
                            rol_code = :rolCode,
                            rol_name = :rolName
                        WHERE rol_code = :rolCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $this->getRolCode());
                $stmt->bindValue('rolName', $this->getRolName());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU07 - Eliminar Rol
        public function deleteRol($rolCode){
            try {
                $sql = 'DELETE FROM ROLES WHERE rol_code = :rolCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $rolCode);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }            
        }        
        # CU09 - Crear Usuario
        public function createUser(){}
        # CU16 - Eliminar Usuario
        public function deleteUser(){}        
    }
?>