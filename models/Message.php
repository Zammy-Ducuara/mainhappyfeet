<?php
    class Message{        
        private $userCode;        
        private $messageDate;        
        private $messageTo;        
        private $messageSubject;        
        private $messageDescription;
        public function __construct(){
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        }
        public function __construct5($userCode,$messageDate,$messageTo,$messageSubject,$messageDescription){            
            $this->userCode = $userCode;
            $this->messageDate = $messageDate;
            $this->messageTo = $messageTo;
            $this->messageSubject = $messageSubject;
            $this->messageDescription = $messageDescription;
        }
        # Código de Usuario
        public function setUserCode($userCode){
            $this->userCode = $userCode;
        }
        public function getUserCode(){
            return $this->userCode;
        }        
        # Fecha del Mensaje
        public function setMessageDate($messageDate){
            $this->messageDate = $messageDate;
        }
        public function getMessageDate(){
            return $this->messageDate;
        }        
        # Para Mensaje
        public function setMessageTo($messageTo){
            $this->messageTo = $messageTo;
        }
        public function getMessageTo(){
            return $this->messageTo;
        }        
        # Asunto del Mensaje
        public function setMessageSubject($messageSubject){
            $this->messageSubject = $messageSubject;
        }
        public function getMessageSubject(){
            return $this->messageSubject;
        }        
        # Descripción del Mensaje
        public function setMessageDescription($messageDescription){
            $this->messageDescription = $messageDescription;
        }
        public function getMessageDescription(){
            return $this->messageDescription;
        }
        # CU017 - Crear Mensaje Usuario
        public function createMessageUser(){}
        # CU018 - Crear Mensaje
        public function createMessage(){}
        # CU19 - Consultar mis Mensajes
        public function readMessageProfile(){}
        # CU20 - Consultar Mensajes
        public function readMessage(){}
        # CU21 - Eliminar Mensaje
        public function deleteMessage(){}
    }
?>