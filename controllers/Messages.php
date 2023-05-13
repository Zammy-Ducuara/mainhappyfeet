<?php
    class Messages{
        public function __construct(){}
        # CU016 - Crear Mensaje
        public function main(){
            require_once "views/roles/company/header.view.php";            
            echo "Controlador para crear mensaje";
            require_once "views/roles/company/footer.view.php";
        }
        # CU17 - Consultar Mensajes
        public function readMessage(){
            echo "Controlador para consultar mensajes";
        }
        # CU18 - Actualizar Mensaje
        public function updateMessage(){
            echo "Controlador para actualizar mensaje";
        }
        # CU19 - Eliminar Mensaje
        public function deleteMessage(){
            echo "Controlador para eliminar mensaje";
        }
    }
?>