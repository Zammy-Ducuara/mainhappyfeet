<?php
    class Credential extends User{
        protected $credentialPhoto;
        protected $credentialId;
        protected $credentialStartDate;
        protected $credentialPass;
        protected $credentialStatus;
        public function __construct(){
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
        }
        public function __construct5($credentialPhoto,$credentialId,$credentialStartDate,$credentialPass,$credentialStatus){
            $this->credentialPhoto = $credentialPhoto;
            $this->credentialId = $credentialId;
            $this->credentialStartDate = $credentialStartDate;
            $this->credentialPass = $credentialPass;
            $this->credentialStatus = $credentialStatus;
        }
        public function setCredentialPhoto($credentialPhoto){
            $this->credentialPhoto;
        }
        public function getCredentialPhoto(){
            return $this->credentialPhoto;
        }
        public function setCredentialId($credentialId){
            $this->credentialId;
        }
        public function getCredentialId(){
            return $this->credentialId;
        }
        public function setCredentialStartDate($credentialStartDate){
            $this->credentialStartDate;
        }
        public function getCredentialStartDate(){
            return $this->credentialStartDate;
        }
        public function setCredentialPass($credentialPass){
            $this->credentialPass;
        }
        public function getCredentialPass(){
            return $this->credentialPass;
        }
        public function setCredentialStatus($credentialStatus){
            $this->credentialStatus;
        }
        public function getCredentialStatus(){
            return $this->credentialStatus;
        }
        
    }
?>