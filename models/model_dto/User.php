<?php
    class User{
        protected $rolCode;
        protected $rolName;
        protected $userCode;
        protected $userNames;
        protected $userLastNames;
        protected $userEmail;
        public function __construct(){
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
        }
        public function __construct6($rolCode,$rolName,$userCode,$userNames,$userLastNames,$userEmail){
            $this->rolCode = $rolCode;
            $this->rolName = $rolName;
            $this->userCode = $userCode;
            $this->userNames = $userNames;
            $this->userLastNames = $userLastNames;
            $this->userEmail = $userEmail;
        }
        public function setRolCode($rolCode){
            $this->rolCode;
        }
        public function getRolCode(){
            return $this->rolCode;
        }        
        public function setRolName($rolName){
            $this->rolName;
        }
        public function getRolName(){
            return $this->rolName;
        }        
        public function setUserCode($userCode){
            $this->userCode;
        }
        public function getUserCode(){
            return $this->userCode;
        }        
        public function setUserNames($userNames){
            $this->userNames;
        }
        public function getUserNames(){
            return $this->userNames;
        }        
        public function setUserLastNames($userLastNames){
            $this->userLastNames;
        }
        public function getUserLastNames(){
            return $this->userLastNames;
        }        
        public function setUserEmail($userEmail){
            $this->userEmail;
        }
        public function getUserEmail(){
            return $this->userEmail;
        }        
    }
?>