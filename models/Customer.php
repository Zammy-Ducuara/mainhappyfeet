<?php
    require_once "models/Credential.php";    
    class Customer extends Credential{
        private $dbh;
        protected $customerBirthDate;
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
        public function setCustomerBirthDate($customerBirthDate){
            $this->customerBirthDate = $customerBirthDate;
        }
        public function getCustomerBirthDate(){
            return $this->customerBirthDate;
        }               
    }
?>