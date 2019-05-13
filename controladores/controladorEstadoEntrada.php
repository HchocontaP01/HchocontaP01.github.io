<?php

	require_once '../modelos/modeloEntrada.php';

	$idEntrada = $_GET["idEntrada"]; 
	$estadoEntrada = "Inactivo";



	$nuevaEntrada = new modeloEntrada($idEntrada,NULL,NULL,NULL,NULL,NULL,$estadoEntrada,NULL);

	$nuevaEntrada->inactivarEntrada();
	header('location: ../listaEntrada.php')
?>