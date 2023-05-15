<?php
    class Messages{
        public function __construct(){}
        # CU017 - Crear Mensaje Usuario
        public function main(){            
            require_once "views/company/header.view.php";
            require_once "views/company/contact.view.php";            
            require_once "views/company/footer.view.php";
        }
        # CU018 - Crear Mensaje Perfil
        public function createMessage(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/create_message.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU19 - Consultar sus Mensajes
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