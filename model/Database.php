<?php

class Database
{
	public static function conectar()
	{
		$dbmode = 'mysql:host=';
		$dbhost = 'localhost';
		$dbname = 'db_schedus';
		$dbchar = 'utf8';
		$dbuser = 'root';
		$dbpass = '';

		try{
			$pdo = new PDO('mysql:host=localhost;dbname=db_schedus;charset=utf8', 'root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>