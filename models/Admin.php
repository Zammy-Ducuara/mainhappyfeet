<?php
    class Admin extends Seller{
        public function __construct(){
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        }
        # CU10 - Crear Administrador
        public function createAdmin(){}

    }
?>