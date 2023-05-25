<?php
    class DataBase{
        public static function connection(){
            $options = array(
                PDO::MYSQL_ATTR_SSL_CA => '/var/www/html/DigiCertGlobalRootCA.crt.pem'
            );
            $hostname = "dbappwebinv1.mysql.database.azure.com";
            $port = "3306";
            $database = "dbappwebinv1";
            $username = "admin_albeiro";
            $password = "Earv1234";
			$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password,$options);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
