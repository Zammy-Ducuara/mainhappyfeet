<?php
    class Message{
        private $dbh;        
        private $userCode;        
        private $userName;        
        private $userLastName;
        private $userEmail;
        private $messageDate;        
        private $messageTo;        
        private $messageSubject;        
        private $messageDescription;
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
        public function __construct5($userCode,$messageDate,$messageTo,$messageSubject,$messageDescription){            
            $this->userCode = $userCode;
            $this->messageDate = $messageDate;
            $this->messageTo = $messageTo;
            $this->messageSubject = $messageSubject;
            $this->messageDescription = $messageDescription;
        }
        public function __construct8($userCode,$userName,$userLastName,$userEmail,$messageDate,$messageTo,$messageSubject,$messageDescription){            
            $this->userCode = $userCode;
            $this->userName = $userName;
            $this->userLastName = $userLastName;
            $this->userEmail = $userEmail;
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
        public function createMessageUser(){
            try {
                $sql = 'INSERT INTO MESSAGES VALUES (
                            :userCode,
                            :MessageDate,
                            :MessageTo,
                            :MessageSubject,
                            :MessageDescription
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('userCode', $this->getUserCode());
                $stmt->bindValue('MessageDate', date('Y-m-d'));
                $stmt->bindValue('MessageTo', "profealbeiro2020@gmail.com");
                $stmt->bindValue('MessageSubject', $this->getMessageSubject());
                $stmt->bindValue('MessageDescription', $this->getMessageDescription());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU018 - Crear Mensaje
        public function createMessage(){}
        # CU19 - Consultar mis Mensajes
        public function readMessageProfile(){}
        # CU20 - Consultar Mensajes
        public function readMessage(){
            try {
                $messageList = [];
                $sql = 'SELECT * FROM USERS INNER JOIN MESSAGES ON users.user_code = messages.user_code;';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $message) {
                    $messageList[] = new Message(
                        $message['user_code'],
                        $message['user_name'],
                        $message['user_lastname'],
                        $message['user_email'],
                        $message['message_date'],
                        $message['message_to'],
                        $message['message_subject'],
                        $message['message_description']
                    );
                }
                return $messageList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU21 - Eliminar Mensaje
        public function deleteMessage($userCode){
             try {
                $sql = 'DELETE FROM MESSAGES WHERE user_code = :userCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('userCode', $userCode);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>