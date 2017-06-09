<?php 
	
	class Connect{
		public static $instance;

		public static function getInstance() {
			try {
				self::$instance = new PDO('mysql:host=localhost;db_name=alunos;', 'root', '', 
											array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
				
				return self::$instance;
			} catch (PDOException $e) {
				die("ERRO: Não foi possível conectar. " . $e->getMessage());
			}
			
		}
	}
?>