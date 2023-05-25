<?php
    class DataBase{
        public static function connection(){
            $hostname = "dbappwebinv.mysql.database.azure.com";
            $database = "dbappwebinv";
            $username = "admin_albeiro@dbappwebinv";
            $password = "SoyGenio12345.";
			$pdo = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
