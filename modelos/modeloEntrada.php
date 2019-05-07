<?php
	
	require_once 'conexionDB.php'; 

	class modeloEntrada extends conexionDB
	{

		private $idEntrada; 
		private $fechaEntrada; 
		private $tituloEntrada; 
		private $descripcionEntrada; 
		private $urlImagen; 
		private $urlDocumento; 
		private $estadoEntrada; 
		private $idTipoEntrada; 
		
		function __construct($inId, $inFecha, $inTitulo, $inDescripcion, $inUrlI, $inUrlD, $inEstado, $inTipo)
		{
			$this->idEntrada = $inId; 
			$this->fechaEntrada = $inFecha; 
			$this->tituloEntrada = $inTitulo; 
			$this->descripcionEntrada = $inDescripcion; 
			$this->urlImagen = $inUrlI; 
			$this->urlDocumento = $inUrlD; 
			$this->estadoEntrada = $inEstado; 
			$this->idTipoEntrada = $inTipo; 
		}

		function insertarEntrada ()
		{

			$conectando = new conexionDB(); 
			$pdo = $conectando::conectar(); 

			try 
			{
				$sql = $pdo->prepare("INSERT INTO entradas (fechaEntrada,tituloEntrada,descripcionEntrada,urlImagenEntrada,urlDocumentoEntrada,estadoEntrada,idTipoEntrada)
				VALUES (:fechaEntrada,:tituloEntrada,:descripcionEntrada,:urlImagenEntrada,:urlDocumentoEntrada,:estadoEntrada,:idTipoEntrada)");
				
				$sql->bindParam(":fechaEntrada",$this->fechaEntrada);
				$sql->bindParam(":tituloEntrada",$this->tituloEntrada);
				$sql->bindParam(":descripcionEntrada",$this->descripcionEntrada);
				$sql->bindParam(":urlImagenEntrada",$this->urlImagenEntrada);
				$sql->bindParam(":urlDocumentoEntrada",$this->urlDocumentoEntrada);
				$sql->bindParam(":estadoEntrada",$this->estadoEntrada); 
				$sql->bindParam(":idTipoEntrada",$this->idTipoEntrada);

				$sql->execute();

				$pdo = NULL;  
			} 
			catch(Exception $e) 
			{
				die($e->getMessage());
			}
		}

		function listaEntradas()
		{

			$conectando = new conexionDB(); 
			$pdo = $conectando::conectar(); 

			try 
			{
				$sql = $pdo->prepare("SELECT * FROM entradas"); 

				$sql->execute();
				return $sql->fetchAll(PDO::FETCH_OBJ);
				$pdo = NULL;
			} 
			catch(Exception $e) 
			{
				die($e->getMessage());
			}
		}

		function actualizarEntrada ()
		{

			$conectando = new conexionDB(); 
			$pdo = $conectando::conectar(); 

			try 
			{
				$sql = $pdo->prepare("UPDATE entradas SET fechaEntrada = :fechaEntrada, tituloEntrada = :tituloEntrada, descripcionEntrada = :descripcionEntrada, urlImagenEntrada = :urlImagenEntrada, urlDocumentoEntrada = :urlDocumentoEntrada, estadoEntrada = :estadoEntrada, idTipoEntrada = :idTipoEntrada WHERE idEntrada = :idEntrada
				");
				$sql->bindParam(":idEntrada",$this->idEntrada);
				$sql->bindParam(":fechaEntrada",$this->fechaEntrada);
				$sql->bindParam(":tituloEntrada",$this->tituloEntrada);
				$sql->bindParam(":descripcionEntrada",$this->descripcionEntrada);
				$sql->bindParam(":urlImagenEntrada",$this->urlImagenEntrada);
				$sql->bindParam(":urlDocumentoEntrada",$this->urlDocumentoEntrada);
				$sql->bindParam(":estadoEntrada",$this->estadoEntrada); 
				$sql->bindParam(":idTipoEntrada",$this->idTipoEntrada);

				$sql->execute();

				$pdo = NULL;  

				echo $this->idTipoEntrada; 
			} 
			catch(Exception $e) 
			{
				die($e->getMessage());
			}
		}

		function entradasXtitulo()
		{

			$conectando = new conexionDB(); 
			$pdo = $conectando::conectar(); 

			try 
			{
				$sql = $pdo->prepare("SELECT * FROM entradas WHERE tituloEntrada = :tituloEntrada"); 
				$sql->bindParam(":tituloEntrada",$this->tituloEntrada);
				$sql->execute();
				return $sql->fetchAll(PDO::FETCH_OBJ);
				$pdo = NULL;
			} 
			catch(Exception $e) 
			{
				die($e->getMessage());
			}
		}

		function entradasXfecha()
		{

			$conectando = new conexionDB(); 
			$pdo = $conectando::conectar(); 

			try 
			{
				$sql = $pdo->prepare("SELECT * FROM entradas WHERE fechaEntrada = :fechaEntrada"); 
				$sql->bindParam(":fechaEntrada",$this->fechaEntrada);
				$sql->execute();
				return $sql->fetchAll(PDO::FETCH_OBJ);
				$pdo = NULL;
			} 
			catch(Exception $e) 
			{
				die($e->getMessage());
			}
		}

		function entradasXtipo()
		{

			$conectando = new conexionDB(); 
			$pdo = $conectando::conectar(); 

			try 
			{
				$sql = $pdo->prepare("SELECT * FROM entradas WHERE tipoEntrada = :tipoEntrada"); 
				$sql->bindParam(":tipoEntrada",$this->idTipoEntrada);
				$sql->execute();
				return $sql->fetchAll(PDO::FETCH_OBJ);
				$pdo = NULL;
			} 
			catch(Exception $e) 
			{
				die($e->getMessage());
			}
		}
	}
?>