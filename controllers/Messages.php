<?php
    require_once "models/User.php";
    require_once "models/Message.php";
    class Messages{
        public function __construct(){}
        # CU017 - Crear Mensaje Usuario
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/company/header.view.php";
                require_once "views/company/contact.view.php";            
                require_once "views/company/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {                
                $userObj = new User(
                    null,
                    null,
                    $_POST['userName'],
                    $_POST['userLastName'],
                    $_POST['userEmail']
                );
                $userCode = $userObj->createUser();
                $messageObj = new Message(
                    $userCode,
                    null,
                    null,                    
                    $_POST['messageSubject'],
                    $_POST['messageDescription']
                );
                $messageObj->createMessageUser();
                header("Location: ?c=Messages");
            }
        }
        # CU018 - Crear Mensaje
        public function createMessage(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/create_message.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU19 - Consultar mis Mensajes
        public function readMessageProfile(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/read_message_profile.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU20 - Consultar Mensajes
        public function readMessage(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/read_message.view.php";
            require_once "views/roles/admin/footer.view.php";
        }        
        # CU21 - Eliminar Mensaje
        public function deleteMessage(){
            echo "Controlador para eliminar mensaje";
        }
    }
?>