<?php
		error_reporting(0);
		require_once 'modelos/modeloEntrada.php';	
		session_start();

		$validacionSesion;
		if ($_SESSION['user']==null || $_SESSION['user']=='') 
		{
			$validacionSesion = 1; 
		}
		else
		{
			$validacionSesion = 0; 
		}

		$idTipoEntrada = 6; 
		$objConsultaEntrada = new modeloEntrada(null,null,null,null,null,null,null,$idTipoEntrada);
		$aConsultaEntrada = $objConsultaEntrada->entradasXtipo(); 
		$numeroFilas = count($aConsultaEntrada); 
		if ($numeroFilas == 0) 
		{
			
		}
		else
		{
			foreach ($aConsultaEntrada as $valorEntrada) 
			{
				$idEntradaVista = $valorEntrada->idEntrada;
				$fechaEntradaVista = $valorEntrada->fechaEntrada;
				$tituloEntradaVista = $valorEntrada->tituloEntrada;
				$descripcionEntradaVista = $valorEntrada->descripcionEntrada; 
				$urlImagenEntradaVista = $valorEntrada->urlImagenEntrada; 
				$urlDocumentoEntradaVista = $valorEntrada->urlDocumentoEntrada;
				$estadoEntradaVista = $valorEntrada->estadoEntrada; 
				$tipoEntradaVista = $valorEntrada->nombreTipoEntrada;
				$descripcionTipoEntradaVista = $valorEntrada->descripcionTipoEntrada; 
			}
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital ESE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/megaMenu.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">


   

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<a href=""  id="show-login-modal">Iniciar Sesión</a>
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Buscar en menu" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="index.html">Inicio</a></li>
				<h1 style="text-align: left; color: black">Nosotros</h1>
				<li class="menu_item"><a href="sedes.html">Sedes</a></li>
				<li class="menu_item"><a href="entidad.html">Entidad</a></li>
				<li class="menu_item"><a href="directorioFuncionarios.html">Directorio Funcionarios</a></li>
				<li class="menu_item"><a href="directorioInstitucional.html">Directorio Institucional</a></li>
				<li class="menu_item"><a href="proceso.html">Procesos y procedimientos</a></li>
				<li class="menu_item"><a href="#">Correo Interno</a></li>
				<h1 style="text-align: left; color: black">Infórmate</h1>
				<li class="menu_item"><a href="noticias.html">Noticias</a></li>
				<li class="menu_item"><a href="datosAbiertos.html">Datos Abiertos</a></li>
				<li class="menu_item"><a href="convocatorias.html">Convocatorias</a></li>
				<li class="menu_item"><a href="pqr.html">Preguntas y Respuestas</a></li>
				<li class="menu_item"><a href="metas.html">Metas, Objetivos e indicadores</a></li>
				<!--<li class="menu_item"><a href="ofertasEmpleo.html">Ofertas de empleo</a></li>
				<li class="menu_item"><a href="ofertasEmpleo.html"></a></li>-->
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!--Login Modal -->

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div id="login-modal" class="modal-content">
				<div class="modal-header">
					<div class="login-modal-title">						
	        			<div class="info_form_title modal-title">Inicio de Sesión</div>
					</div>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
	    		</div>
	      		<div class="modal-body">
	        		<div class="container">
	        			<div class="form-row">
	        				<div class="col">
	        					<form class="FormularioLogin" action="controladores/controladorInicioSesion.php" method="POST">

	        						<div class="form-group">
	        							<input type="text" class="info_form_dep info_input" name="username" placeholder="Usuario">
	        						</div>
	        						<div class="form-group">
	        							<input type="password" class="info_form_dep info_input" name="password" placeholder="Contraseña">
	        						</div>
	        						<div class="form-group">
	        							<button class="info_form_button">INGRESAR</button>
	        						</div>
	        						<div class="form-group">
	        							<div class="row">
											<div class="col-6">

											</div>
											<div class="col-6">
												<a href="#" id="password-reset">Olvide mi Contraseña...</a>
											</div>
	        							</div>	        							
	        						</div>
	        					</form>
	        				</div>
	        			</div>
	        		</div>
	      		</div>
	    	</div>
	  	</div>
	</div>
		
	<!-- Home -->

	<div class="home">
		<div class="background_image"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div>
										<img src="images/logoH.png" style="padding-top: 20px;" >
									</div>
									<div class="logo">
										<a href="index.php"><span><br>  E.S.E HOSPITAL</span><br>  San Martín de Porres</a>
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<br>
											<br>
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="#">Correo interno</a></li>
												<?php
													if ($validacionSesion == 1) 
													{?>
														<li><a href="#" id="show-login">Inicio de Sesión</a></li>														
													<?php 
													}
													else
													{?>
														<li><a href="nuevaEntrada.php">Nueva Entrada</a></li>
														<li><a href="controladores/controladorCerrarSesion.php">Cerrar Sesión</a></li>
													<?php
													}
												?>
												
												<li><a href="#">Moodle</a></li>
											</ul>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="header_nav" id="header_nav_pin">	
			        <nav class="nav-bar">
			        	<span class="fi-monitor"></span>
			            <ul>
			                <li>Menú
			                    <div class="mega-menu">
			                        <div class="inner-mega-menu">
			                        	<h4>NOSOTROS:</h4>

			                            <p> <i class="fa fa-home"> </i><a href="index.php"> | Inicio</a> </p>
			                            <p> <i class="fa fa-building"> </i><a href="consultaEntrada.php?idTipoEntrada=1"> | Sedes</a></p>
			                            <p><i class="fa fa-hospital-o"> </i><a href="consultaEntrada.php?idTipoEntrada=2"> | Entidad</a></p>
			                            <p><i class="fa fa-address-card"></i><a href="consultaEntrada.php?idTipoEntrada=3"> | Directorio Funcionarios</a></p>
			                            <p><i class="fa fa-address-book-o"></i><a href="consultaEntrada.php?idTipoEntrada=4"> | Directorio Institucional</a></p>
			                            <p><i class="fa fa-history"></i><a href="consultaEntrada.php?idTipoEntrada=5"> | Procesos y procedimientos</a></p>
			                            <p><i class="fa fa-envelope-open"></i><a href="#"> | Correo Interno</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                             <h4>Infórmate:</h4>
					          			<p> <i class="fa fa-newspaper-o"> </i><a href="consultaEntrada.php?idTipoEntrada=6"> | Noticias</a></p>
							          <p> <i class="fa fa-database"> </i><a href="consultaEntrada.php?idTipoEntrada=7"> | Datos Abiertos</a></p>
							          <p> <i class="fa fa-globe"> </i><a href="consultaEntrada.php?idTipoEntrada=8"> | Convocatorias</a></p>
							          <p> <i class="fa fa-question-circle-o"> </i><a href="consultaEntrada.php?idTipoEntrada=9"> | Preguntas y respuestas</a></p>
							          <p> <i class="fa fa-flag-checkered"> </i><a href="consultaEntrada.php?idTipoEntrada=10"> | Metas, Objetivos e indicadores</a></p>
							          <p> <i class="fa fa-user-plus"> </i><a href="consultaEntrada.php?idTipoEntrada=11"> | Ofertas de empleo</a></p>
							          <p> <i class="fa fa-gamepad"> </i><a href="consultaEntrada.php?idTipoEntrada=12"> | Control</a></p>
							          <p> <i class="fa fa-info-circle"> </i><a href="consultaEntrada.php?idTipoEntrada=13"> | Información Adicional</a></p>
							          <p> <i class="fa fa-users"> </i><a href="consultaEntrada.php?idTipoEntrada=14"> | Población Vulnerable</a></p>
							          <p> <i class="fa fa-language"> </i><a href="consultaEntrada.php?idTipoEntrada=15"> | Glosario</a></p>
							          <p> <i class="fa fa-handshake-o"> </i><a href="consultaEntrada.php?idTipoEntrada=16"> | Contrataciones</a></p>
							          <p> <i class="fa fa-flash"> </i><a href="consultaEntrada.php?idTipoEntrada=17"> | Ejecución de contratos</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                           	<h4>Documentos:</h4>
								          <p> <i class="fa fa-file-text-o"> </i><a href="consultaEntrada.php?idTipoEntrada=18">  | Informes</a></p>
								          <p> <i class="fa fa-bar-chart"> </i><a href="consultaEntrada.php?idTipoEntrada=19">  | Estudios e investigaciones</a></p>
								          <p> <i class="fa fa-cogs"> </i><a href="consultaEntrada.php?idTipoEntrada=20">  | Proyectos en ejecución</a></p>
								          <p> <i class="fa fa-file-archive-o"></i><a href="consultaEntrada.php?idTipoEntrada=21"> | Informes de PQRS</a></p>
								          <p> <i class="fa fa-list"> </i><a href="consultaEntrada.php?idTipoEntrada=22">  | Normatividad</a></p>
								          <p> <i class="fa fa-clone"> </i><a href="consultaEntrada.php?idTipoEntrada=23">  | Políticas y lineamientos</a></p>
								          <p> <i class="fa fa-cubes"> </i><a href="consultaEntrada.php?idTipoEntrada=24">  | Planes</a></p>
								          <p> <i class="fa fa-desktop"> </i><a href="consultaEntrada.php?idTipoEntrada=25">  | Programas</a></p>
								          <p> <i class="fa fa-folder-open-o"> </i><a href="consultaEntrada.php?idTipoEntrada=26">  | Rendición de cuentas</a></p>
								           <p> <i class="fa fa-money"> </i><a href="consultaEntrada.php?idTipoEntrada=27">  | Presupuesto</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                            <h4>Participa:</h4>
								          <p> <i class="fa fa-calendar"> </i><a href="consultaEntrada.php?idTipoEntrada=28">  | Calendario de Actividades</a></p>
								          <p> <i class="fa fa-futbol-o"> </i><a href="consultaEntrada.php?idTipoEntrada=29">  | Niños, Niñas y Adolecentes</a></p>
								          <p> <i class="fa fa-anchor"> </i><a href="consultaEntrada.php?idTipoEntrada=30">  | Retos de participacón</a></p>
								          <p> <i class="fa fa-check-square-o"></i><a href="consultaEntrada.php?idTipoEntrada=31"> | Encuesta</a></p>
								          <p> <i class="fa fa-bullhorn"> </i><a href="consultaEntrada.php?idTipoEntrada=32">  | Instancias de Participación</a></p>
			                        </div> 
			                        <div class="inner-mega-menu">
			                        	<h4>Atención Ciudadana: </h4>
								          <p> <i class="fa fa-floppy-o"> </i><a href="consultaEntrada.php?idTipoEntrada=33">  | Transparencia y acceso</a></p>
								          <p> <i class="fa fa-files-o"> </i><a href="consultaEntrada.php?idTipoEntrada=34">  | Tramites y servicios</a></p>
								          <p> <i class="fa fa-binoculars"> </i><a href="consultaEntrada.php?idTipoEntrada=35">  | Mecanismos de contacto</a></p>
								          <p> <i class="fa fa-globe"> </i><a href="transparenciaAcceso.php">  | Transparencia</a></p>
								          <p> <i class="fa fa-cube"> </i><a href="consultaEntrada.php?idTipoEntrada=36">  | Recepción de solicitudes</a></p>
								          <p> <i class="fa fa-user-secret"> </i><a href="consultaEntrada.php?idTipoEntrada=37">  | Política y protección de datos</a></p>
			                        </div>
			                    </div>
			                </li>
			                <li>
			                	Nosotros
			                	<div class="mega-menu" style="height: 180px;">
			                        <div class="inner-mega-menu">
			                        	<h4>NOSOTROS:</h4>
									</div>
									<div class="inner-mega-menu">
										<p> <i class="fa fa-home"> </i><a href="index.php"> | Inicio</a> </p>
										<p> <i class="fa fa-building"> </i><a href="consultaEntrada.php?idTipoEntrada=1"> | Sedes</a></p>
									</div>
			                        <div class="inner-mega-menu">
			                        	<p><i class="fa fa-hospital-o"> </i><a href="consultaEntrada.php?idTipoEntrada=2"> | Entidad</a></p>
			                        	<p><i class="fa fa-address-card"></i><a href="consultaEntrada.php?idTipoEntrada=3"> | Directorio Funcionarios</a></p>
			                        </div>
			                         <div class="inner-mega-menu">
			                        	<p><i class="fa fa-address-book-o"></i><a href="consultaEntrada.php?idTipoEntrada=4"> | Directorio Institucional</a></p>
			                        	<p><i class="fa fa-history"></i><a href="consultaEntrada.php?idTipoEntrada=5"> | Procesos y procedimientos</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                        	<p><i class="fa fa-envelope-open"></i><a href="#"> | Correo Interno</a></p>
			                        </div>   
									   
			                            
			                     </div>
			                </li>
			                <li>
			                	Infórmate
			                	<div class="mega-menu" style="height: 250px;">
			                        <div class="inner-mega-menu">
			                        	<h4>Infórmate:</h4>
									</div>
									<div class="inner-mega-menu">
										<p> <i class="fa fa-newspaper-o"> </i><a href="consultaEntrada.php?idTipoEntrada=6"> | Noticias</a></p>
							          
										<p> <i class="fa fa-database"> </i><a href="consultaEntrada.php?idTipoEntrada=7"> | Datos Abiertos</a></p>
										<p> <i class="fa fa-users"> </i><a href="consultaEntrada.php?idTipoEntrada=14"> | Población Vulnerable</a></p>

									</div>
			                        <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-globe"> </i><a href="consultaEntrada.php?idTipoEntrada=8"> | Convocatorias</a></p>
							         
										<p> <i class="fa fa-question-circle-o"> </i><a href="consultaEntrada.php?idTipoEntrada=9"> | Preguntas y respuestas</a></p>
										<p> <i class="fa fa-handshake-o"> </i><a href="consultaEntrada.php?idTipoEntrada=16"> | Contrataciones</a></p>
			                        </div>
			                         <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-flag-checkered"> </i><a href="consultaEntrada.php?idTipoEntrada=10"> | Metas, Objetivos e indicadores</a></p>
							          
										<p> <i class="fa fa-user-plus"> </i><a href="consultaEntrada.php?idTipoEntrada=11"> | Ofertas de empleo</a></p>
										<p> <i class="fa fa-language"> </i><a href="consultaEntrada.php?idTipoEntrada=15"> | Glosario</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-gamepad"> </i><a href="consultaEntrada.php?idTipoEntrada=12"> | Control</a></p>
																	          
										<p> <i class="fa fa-info-circle"> </i><a href="consultaEntrada.php?idTipoEntrada=13"> | Información Adicional</a></p>
										<p> <i class="fa fa-flash"> </i><a href="consultaEntrada.php?idTipoEntrada=17"> | Ejecución de contratos</a></p>
			                        </div>   
									   
			                            
			                     </div>
			                </li>
			                <li>
			                	Documentos
			                	<div class="mega-menu" style="height: 190px;">
			                        <div class="inner-mega-menu">
			                        	<h4>Documentos:</h4>
									</div>
									<div class="inner-mega-menu">
										<p> <i class="fa fa-file-text-o"> </i><a href="consultaEntrada.php?idTipoEntrada=18">  | Informes</a></p>
										<p> <i class="fa fa-list"> </i><a href="consultaEntrada.php?idTipoEntrada=22">  | Normatividad</a></p>
										<p> <i class="fa fa-cubes"> </i><a href="consultaEntrada.php?idTipoEntrada=24">  | Planes</a></p>
									</div>
			                        <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-bar-chart"> </i><a href="consultaEntrada.php?idTipoEntrada=19">  | Estudios e investigaciones</a></p>
			                        	<p> <i class="fa fa-clone"> </i><a href="consultaEntrada.php?idTipoEntrada=23">  | Políticas y lineamientos</a></p>

			                        </div>
			                         <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-cogs"> </i><a href="consultaEntrada.php?idTipoEntrada=20">  | Proyectos en ejecución</a></p>
			                        	<p> <i class="fa fa-folder-open-o"> </i><a href="consultaEntrada.php?idTipoEntrada=26">  | Rendición de cuentas</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-desktop"> </i><a href="consultaEntrada.php?idTipoEntrada=25">  | Programas</a></p>
			                        	<p> <i class="fa fa-money"> </i><a href="consultaEntrada.php?idTipoEntrada=27">  | Presupuesto</a></p>
			                        	<p> <i class="fa fa-file-archive-o"></i><a href="consultaEntrada.php?idTipoEntrada=21"> | Informes de PQRS</a></p>
			                        </div>   
									   
			                            
			                     </div>
			                </li>
			                <li>
			                	Participa
			                	<div class="mega-menu" style="height: 190px;">
			                        <div class="inner-mega-menu">
			                        	<h4>Participa:</h4>
									</div>
									<div class="inner-mega-menu">
										<p> <i class="fa fa-calendar"> </i><a href="consultaEntrada.php?idTipoEntrada=28">  | Calendario de Actividades</a></p>
										<p> <i class="fa fa-futbol-o"> </i><a href="consultaEntrada.php?idTipoEntrada=29">  | Niños, Niñas y Adolecentes</a></p>
									</div>
			                        <div class="inner-mega-menu">
			                        	 <p> <i class="fa fa-anchor"> </i><a href="consultaEntrada.php?idTipoEntrada=30">  | Retos de participacón</a></p>
			                        </div>
			                         <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-bullhorn"> </i><a href="consultaEntrada.php?idTipoEntrada=32">  | Instancias de Participación</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                        	 <p> <i class="fa fa-check-square-o"></i><a href="consultaEntrada.php?idTipoEntrada=31"> | Encuesta</a></p>
			                        	 
			                        </div>  
			                    </div>
			                </li>
			                <li>
			                	Atención
			                	<div class="mega-menu" style="height: 180px;">
			                        <div class="inner-mega-menu">
			                        	<h4>Atención ciudadana:</h4>
									</div>
									<div class="inner-mega-menu">
										<p> <i class="fa fa-floppy-o"> </i><a href="consultaEntrada.php?idTipoEntrada=33">  | Transparencia y acceso</a></p>
										<p> <i class="fa fa-files-o"> </i><a href="consultaEntrada.php?idTipoEntrada=34">  | Tramites y servicios</a></p>
									</div>
			                        <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-binoculars"> </i><a href="consultaEntrada.php?idTipoEntrada=35">  | Mecanismos de contacto</a></p>
			                        	<p> <i class="fa fa-globe"> </i><a href="transparenciaAcceso.php">  | Transparencia</a></p>
			                        </div>
			                         <div class="inner-mega-menu">
			                         	<p> <i class="fa fa-user-secret"> </i><a href="consultaEntrada.php?idTipoEntrada=37">  | Política y protección de datos</a></p>
			                        	
			                        </div>
			                        <div class="inner-mega-menu">
			                        	<p> <i class="fa fa-cube"> </i><a href="consultaEntrada.php?idTipoEntrada=36">  | Recepción de solicitudes</a></p>
			                        </div>  
			                    </div>
			                </li>
			            </ul>
			        </nav>
				</div>
		</header>

	<!-- header carrusel -->
		<div class="home_container">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="images/homeCarrusel/1.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/homeCarrusel/2.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/homeCarrusel/3.jpg" alt="Third slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/homeCarrusel/4.jpg" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	<!--  end header carrusel -->

	</div>

	<!-- Info Boxes -->

	<div class="info">
					<div class="container">
						<div class="row row-eq-height">

							<!-- Info Box -->
							<?php foreach ($aConsultaEntrada as $entradas): ?>			
							<div class="col-lg-4 info_box_col">
								<div class="info_box">
									
									<div class="info_image" ><img src="<?php echo $urlImagenEntradaVista;?>" alt=""></div>
									<div class="info_content">
										<div class="info_title"><?php echo $entradas->tituloEntrada; ?></div>
										<div class="info_text"><?php echo $entradas->descripcionEntrada; ?></div>
										<div class="button info_button"><a href="detalleEntrada.php?idEntrada=<?php echo $entradas->idEntrada ?>"><span>Ver más</span><span>Ver más</span></a></div>
									</div>
								
								</div>
							</div>
							<br>
							<?php endforeach; ?>					
						</div>
					</div>
				</div>


	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Nuestros Servicios</div>
					<div class="section_subtitle">Su salud y calidad de vida en nuestras manos</div>
				</div>
			</div>
			<div class="row icon_boxes_row">
				
				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_1.svg" alt=""></div>
							<div class="icon_box_title">Cardiología</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_2.svg" alt=""></div>
							<div class="icon_box_title">Gastroenterología</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_3.svg" alt=""></div>
							<div class="icon_box_title">Laboratorio Clinico</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_4.svg" alt=""></div>
							<div class="icon_box_title">Odontología</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_5.svg" alt=""></div>
							<div class="icon_box_title">Cirugía</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_6.svg" alt=""></div>
							<div class="icon_box_title">Neurología</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="button services_button ml-auto mr-auto"><a href="#"><span>Ver más</span><span>Ver más</span></a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Departments -->

	<div class="departments">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Nuestros Departamentos</div>
					<div class="section_subtitle">Organización y Calidad de Servicio</div>
				</div>
			</div>
			<div class="row dept_row">
				<div class="col">
					<div class="dept_slider_container_outer">
						<div class="dept_slider_container">

							<!-- Slider -->
							<div class="owl-carousel owl-theme dept_slider">
								
								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/dept_1.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Pediatría</div>
										<div class="dept_link"><a href="#">Ver más</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/dept_2.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Odontología</div>
										<div class="dept_link"><a href="#">Ver más</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/dept_3.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Ortopedia</div>
										<div class="dept_link"><a href="#">Ver más</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/dept_4.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Oncología</div>
										<div class="dept_link"><a href="#">Ver más</a></div>
									</div>
								</div>

							</div>
							
						</div>

						<!-- Dept Slider Nav -->
						<div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

					</div>
						
				</div>
			</div>
		</div>
	</div>

</div>
	<!-- Footer -->

	<footer class="footer" style="background-image: url(images/footer2.jpg");">
		<div   ></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="index.html">ESE HOSPITAL SAN MARTÍN DE PORRES</a>	
							</div>
							<div class="footer_about_text">Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright">
								Desarrollado por
							</div>
						</div>
					</div>

										<!-- Footer Hours -->

					<div class="col-lg-5 footer_col">
						<div class="departments">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="section_title">Gobierno</div>
										<div class="section_subtitle">En liena</div>
										<br>
										<div class="btnTransparencia"><a href="transparenciaAcceso.php">Transparencia y acceso a la información</a></div>
									</div>
								</div>
								<div class="row dept_row">
									<div class="col">
										<div class="dept_slider_container_outer">
											<div class="dept_slider_container">

												<!-- Slider -->
												<div class="owl-carousel dept_slider">
													
													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/Presidencia-logo.png" alt=""></div>
													</div>

													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/logoMinTic.jpg" alt=""></div>
													</div>

													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/no-mas-filas-tramites-sin-complicaciones.png" alt=""></div>
													</div>

													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/LOGO-URNA-GA-01.png" alt=""></div>
													</div>
													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/6_sirvo-a-mi-pais_200x200.png" alt=""></div>
													</div>
													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/logoPortal.png" alt=""></div>
													</div>
													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/compraEficiente.png" alt=""></div>
													</div>
													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/logoCoColombia.png" alt=""></div>
													</div>
													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/logoMetrologia.jpg" alt=""></div>
													</div>
													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/logoCodigoPostal.png" alt=""></div>
													</div>
													<!-- Slide -->
													<div class="owl-item dept_item">
														<div class="dept_image"><img src="images/correo.png" alt=""></div>
													</div>
												</div>
												
											</div>

										</div>
											
									</div>
								</div>
							</div>
						</div>

				</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-4 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Contactanos</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Nombre" required="required">
										<input type="email" class="footer_contact_input" placeholder="Correo electronico" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Mensaje" required="required"></textarea>
									<button class="footer_contact_button">Enviar</button>
								</form>
							</div>
						</div>
					</div>


			</div>
		</div>
	</footer>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/megaMenu.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>