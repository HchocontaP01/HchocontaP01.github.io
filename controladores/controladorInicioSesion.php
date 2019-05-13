<?php

	include_once '../modelos/usuario.php';
	include_once '../modelos/usuario_sesion.php';

	$userSession = new UserSession();
	$user = new User();

        if(isset($_POST['username']) && isset($_POST['password']))
        {
	       // echo "Validación de login";
	        $userForm = $_POST['username'];
	        $passForm = $_POST['password'];
	        if($user->userExists($userForm, $passForm)){
	            //echo "usuario validado";
	            $userSession->setCurrentUser($userForm);
	            header('location: ../nuevaEntrada.php');
	        }else{
	            //echo "nombre de usuario y/o password incorrecto";
	            session_destroy();  
	            header('location: ../index.php');
	        }

   		}
   		else
   		{
   			//echo "nombre de usuario y/o password incorrecto";
	        session_destroy();  
	        header('location: ../index.php');
   		}

?>
