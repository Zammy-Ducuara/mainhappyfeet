<?php 
    class RolDao{
        private $dbh;
        public function __construct(){
            try {
				$this->dbh = DataBase::connection();
			} catch (Exception $e) {
				die($e->getMessage());
			}
        }
        public function rolCreateDao($rolDto){            
            try {
				// Crear la Consulta
				$sql = 'INSERT INTO ROLES VALUES (
							:rolCodigo,							
							:rolNombre
						)';
				// Preparar la BBDD para la consulta
				$stmt = $this->dbh->prepare($sql);
				// Vincular los datos del objeto a la consulta de Inserción
				$stmt->bindValue('rolCodigo',$rolDto->getRolCodigo());			
				$stmt->bindValue('rolNombre',$rolDto->getRolNombre());
				// Ejecutar la consulta
				$stmt->execute();
			} catch (Exception $e) {
				die($e->getMessage());	
			}
        }
    }
?>
