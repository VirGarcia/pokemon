<?php 
require_once 'db.php';
	class Conectar {
		private $dbh;

		function Conexion(){

			$conectar = $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";".DB_CHARSET, DB_USER, DB_PASSWORD);
			return $conectar;
		}

		function set_names() {
			return $this->dbh->query("SET NAMES 'utf8'");
		}

	}
	?>