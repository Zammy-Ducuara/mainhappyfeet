<?php
    class User{
        protected $rolCode;
        protected $rolName;
        protected $userCode;
        protected $userName;
        protected $userLastName;
        protected $userEmail;
        public function __construct(){
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
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
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        public function getLastName(){
            return $this->lastName;
        }
        # Email de Usuario
        public function setUserEmail($userEmail){
            $this->userEmail = $userEmail;
        }
        public function getUserEmail(){
            return $this->userEmail;
        }
        # CU04 - Crear Rol
        public function createRol(){}
        # CU09 - Crear Usuario
        public function createUser(){}
    }
?>