<?php
    class Messages{
        public function __construct(){}
        # CU016 - Crear Mensaje Usuario
        public function main(){            
            require_once "views/company/header.view.php";
            echo "Controlador para que el usuario envíe mensajes";
            require_once "views/company/footer.view.php";
        }
        # CU016 - Crear Mensaje Roles
        public function createMessage(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/create_message.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU17 - Consultar Mensajes
        public function readMessage(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/read_message.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU18 - Actualizar Mensaje
        public function updateMessage(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/modules/01_users/update_message.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
        # CU19 - Eliminar Mensaje
        public function deleteMessage(){
            echo "Controlador para eliminar mensaje";
        }
    }
?>