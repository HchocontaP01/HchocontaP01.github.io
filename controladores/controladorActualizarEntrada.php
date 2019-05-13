<?php

	require_once '../modelos/modeloEntrada.php';

	$idEntrada = $_POST["idEntrada"]; 
	$fechaEntrada = date("Y/m/d"); 
	$tituloEntrada = $_POST["tituloEntrada"];
	$descripcionEntrada = $_POST["descripcionEntrada"];
	$urlImagen = NULL; 
	$urlDoc = NULL; 
	$estadoEntrada = $_POST["estadoEntrada"];
	$tipoEntrada = $_POST["tipoEntrada"];
	$idTipoEntrada = 0; 

	if ($tipoEntrada == "Sedes") 
	{
		$idTipoEntrada = 1; 
	}
	elseif ($tipoEntrada == "Entidad") 
	{
		$idTipoEntrada = 2;
	}
	elseif ($tipoEntrada == "Directorio de funcionarios") 
	{
		$idTipoEntrada = 3;
	}
	elseif ($tipoEntrada == "Directorio institucional") 
	{
		$idTipoEntrada = 4;
	}
	elseif ($tipoEntrada == "Procesos y procedimientos") 
	{
		$idTipoEntrada = 5;
	}
	elseif ($tipoEntrada == "Noticias") 
	{
		$idTipoEntrada = 6;
	}
	elseif ($tipoEntrada == "Datos abiertos") 
	{
		$idTipoEntrada = 7;
	}
	elseif ($tipoEntrada == "Convocatorias") 
	{
		$idTipoEntrada = 8;
	}
	elseif ($tipoEntrada == "Preguntas y respuestas") 
	{
		$idTipoEntrada = 9;
	}
	elseif ($tipoEntrada == "Metas, Objetivos e indicadores") 
	{
		$idTipoEntrada = 10;
	}
	elseif ($tipoEntrada == "Ofertas de empleo") 
	{
		$idTipoEntrada = 11;
	}
	elseif ($tipoEntrada == "Control") 
	{
		$idTipoEntrada = 12;
	}
	elseif ($tipoEntrada == "Información adicional") 
	{
		$idTipoEntrada = 13;
	}
	elseif ($tipoEntrada == "Población vulnerable") 
	{
		$idTipoEntrada = 14;
	}
	elseif ($tipoEntrada == "Glosario") 
	{
		$idTipoEntrada = 15;
	}
	elseif ($tipoEntrada == "Contrataciones") 
	{
		$idTipoEntrada = 16;
	}
	elseif ($tipoEntrada == "Ejecución de contratos") 
	{
		$idTipoEntrada = 17;
	}
	elseif ($tipoEntrada == "Informes") 
	{
		$idTipoEntrada = 18;
	}
	elseif ($tipoEntrada == "Estudios e investigaciones") 
	{
		$idTipoEntrada = 19;
	}
	elseif ($tipoEntrada == "Proyectos en ejecución") 
	{
		$idTipoEntrada = 20;
	}
	elseif ($tipoEntrada == "Informes de PQRS") 
	{
		$idTipoEntrada =21;
	}
	elseif ($tipoEntrada == "Normatividad") 
	{
		$idTipoEntrada =22;
	}
	elseif ($tipoEntrada == "Politicas y lineamientos") 
	{
		$idTipoEntrada =23;
	}
	elseif ($tipoEntrada == "Planes") 
	{
		$idTipoEntrada =24;
	}
	elseif ($tipoEntrada == "Programas") 
	{
		$idTipoEntrada =25;
	}

	$nuevaEntrada = new modeloEntrada($idEntrada,$fechaEntrada,$tituloEntrada,$descripcionEntrada,$urlImagen,$urlDoc,$estadoEntrada,$idTipoEntrada);

	$nuevaEntrada->actualizarEntrada();
	header('location: ../nuevaEntrada.php'); 
?>