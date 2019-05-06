<?php
class conexionDB
{
	public static function conectar()
	{
		$pdo = new PDO('mysql:host=localhost;dbname=hchocontap01;charset=utf8','root','1234');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}

?>