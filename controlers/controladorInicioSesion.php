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
			header('location: ../nuevaEntrada.html'); 
		}
		else
		{	
			//En caso contrario se redirecciona nuevamente al index  y se destruye la sesion 
			header('location: ../index.html');
			session_destroy();  
		}
	}
	else
	{
		//En caso contrario se redirecciona nuevamente al index  y se destruye la sesion 
		header('location: ../index.html');
		session_destroy();
	}

?>