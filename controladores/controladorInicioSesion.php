<?php

	session_start(); 

	$usuario = "Admin"; 
	$contrasena = "Admin1234"; 


	$usuarioEntrante = $_POST["usuario"]; 
	$contraEntrante = $_POST["contrasena"]; 


	if ($usuario == $usuarioEntrante) {
		if ($contrasena==$contraEntrante)
		{
			$_SESSION['usuarioSesion'] = $usuarioEntrante; 
			header('location: ../nuevaEntrada.php'); 
		}
		else
		{	
			header('location: ../index.html');
			session_destroy();  
		}
	}
	else
	{
		header('location: ../index.html');
		session_destroy();
	}

?>