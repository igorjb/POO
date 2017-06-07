<?php 
	
	class Connect{
		public static $instance;

		public static function getInstance() {
			if(!isset(self::$instance))
			{
				self::$instance = new PDO('mysql:host=localhost;db_name=colegio;', 'root', '', 
											array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

				return "Conexao realizada com sucesso";
			}
			else {
				return "Erro na conexão";
			}
			
			return self::$instance;
		}
	}
?>