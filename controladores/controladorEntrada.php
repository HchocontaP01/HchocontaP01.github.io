<?php

	require_once '../modelos/modeloEntrada.php';

	$idEntrada = NULL; 
	$fechaEntrada = date("Y/m/d"); 
	$tituloEntrada = $_POST["tituloEntrada"];
	$descripcionEntrada = $_POST["descripcionEntrada"];
	$urlImagen = NULL; 
	$urlDoc = NULL; 
	$estadoEntrada = "activo";
	$tipoEntrada = $_POST["tipoEntrada"];
	$idTipoEntrada = 0; 

	if ($tipoEntrada == "Sedes") 
	{
		$idTipoEntrada = 1; 
	}
	elseif ($tipoEntrada == "Entidad") 
	{
		$idTipoEntrada = 3;
	}
	elseif ($tipoEntrada == "Directorio de funcionarios") 
	{
		$idTipoEntrada = 4;
	}
	elseif ($tipoEntrada == "Directorio institucional") 
	{
		$idTipoEntrada = 5;
	}
	elseif ($tipoEntrada == "Procesos y procedimientos") 
	{
		$idTipoEntrada = 6;
	}
	elseif ($tipoEntrada == "Noticias") 
	{
		$idTipoEntrada = 7;
	}
	elseif ($tipoEntrada == "Datos abiertos") 
	{
		$idTipoEntrada = 8;
	}
	elseif ($tipoEntrada == "Convocatorias") 
	{
		$idTipoEntrada = 9;
	}
	elseif ($tipoEntrada == "Preguntas y respuestas") 
	{
		$idTipoEntrada = 10;
	}
	elseif ($tipoEntrada == "Metas, Objetivos e indicadores") 
	{
		$idTipoEntrada = 11;
	}
	elseif ($tipoEntrada == "Ofertas de empleo") 
	{
		$idTipoEntrada = 12;
	}
	elseif ($tipoEntrada == "Control") 
	{
		$idTipoEntrada = 13;
	}
	elseif ($tipoEntrada == "Información adicional") 
	{
		$idTipoEntrada = 14;
	}
	elseif ($tipoEntrada == "Población vulnerable") 
	{
		$idTipoEntrada = 15;
	}
	elseif ($tipoEntrada == "Glosario") 
	{
		$idTipoEntrada = 16;
	}
	elseif ($tipoEntrada == "Contrataciones") 
	{
		$idTipoEntrada = 17;
	}
	elseif ($tipoEntrada == "Ejecución de contratos") 
	{
		$idTipoEntrada = 18;
	}
	elseif ($tipoEntrada == "Informes") 
	{
		$idTipoEntrada = 19;
	}
	elseif ($tipoEntrada == "Estudios e investigaciones") 
	{
		$idTipoEntrada = 20;
	}
	elseif ($tipoEntrada == "Proyectos en ejecución") 
	{
		$idTipoEntrada = 21;
	}
	elseif ($tipoEntrada == "Informes de PQRS") 
	{
		$idTipoEntrada =22;
	}
	elseif ($tipoEntrada == "Normatividad") 
	{
		$idTipoEntrada =23;
	}
	elseif ($tipoEntrada == "Politicas y lineamientos") 
	{
		$idTipoEntrada =24;
	}
	elseif ($tipoEntrada == "Planes") 
	{
		$idTipoEntrada =25;
	}
	elseif ($tipoEntrada == "Programas") 
	{
		$idTipoEntrada =26;
	}

	$nuevaEntrada = new modeloEntrada($idEntrada,$fechaEntrada,$tituloEntrada,$descripcionEntrada,$urlImagen,$urlDoc,$estadoEntrada,$idTipoEntrada);

	$nuevaEntrada->insertarEntrada();  
?>

	