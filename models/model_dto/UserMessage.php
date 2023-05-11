<?php
    class UserMessage{
        private $userCode;
        private $userMessageDate;
        private $userMessageIssue;
        private $userMessageDescription;        
        public function __construct(){
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
        }
        public function __construct4($userCode,$userMessageDate,$userMessageIssue,$userMessageDescription){
            $this->userCode = $userCode;
            $this->userMessageDate = $userMessageDate;
            $this->userMessageIssue = $userMessageIssue;
            $this->userMessageDescription = $userMessageDescription;
        }
        public function setUserCode($userCode){
            $this->userCode;
        }
        public function getUserCode(){
            return $this->userCode;
        }
        public function setMessageDate($messageDate){
            $this->messageDate;
        }
        public function getMessageDate(){
            return $this->messageDate;
        }
        public function setMessageIssue($messageIssue){
            $this->messageIssue;
        }
        public function getMessageIssue(){
            return $this->messageIssue;
        }
        public function setMessageDescription($messageDescription){
            $this->messageDescription;
        }
        public function getMessageDescription(){
            return $this->messageDescription;
        }
    }
?>