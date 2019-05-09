<?php
class conexionDB
{
	public static function conectar()
	{
		$pdo = new PDO('mysql:host=localhost;dbname=hchocontap01;charset=utf8','root','');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}

?>