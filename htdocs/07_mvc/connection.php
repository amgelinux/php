<?php
	/**
	* Conexión a la base de datos
	* Autor: Elivar Largo
	* Sitio Web: wwww.ecodeup.com
	*/
	class Db
	{
        private static $host = "localhost";
        private static $dbname = "mvc";
        private static $usuario = "root";
        private static $pass = "toor";

		private static $instance=NULL;

		private function __construct(){}

		private function __clone(){}

		public static function getConnect(){
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname;
			if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
				self::$instance= new PDO($dsn,self::$usuario,self::$pass,$pdo_options);
			}
			return self::$instance;
		}
	}
?>