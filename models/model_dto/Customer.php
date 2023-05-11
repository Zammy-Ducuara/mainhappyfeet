<?php
    class Customer extends Credential{
        private $CustomerBirthDate;
        public function __construct(){
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
        }
        public function setCustomerBirthDate($CustomerBirthDate){
            $this->CustomerBirthDate;
        }
        public function getCustomerBirthDate(){
            return $this->CustomerBirthDate;
        }
    }
?>