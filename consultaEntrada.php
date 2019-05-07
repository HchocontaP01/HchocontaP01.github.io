<?php
	
	$idTipoEntrada = $_GET['idTipoEntrada']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Variable nombreTipoEntrada</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/megaMenu.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Buscar en menu" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="index.html">Home</a></li>
				<li class="menu_item"><a href="#">About us</a></li>
				<li class="menu_item"><a href="#">Services</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
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
	
		
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/directorio.jpg)"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">ESE HOSPITAL SAN MARTIN DE PORRES</a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="#">Correo interno</a></li>
												<li><a href="#">Cerrar Sesión</a></li>
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
				<div class="header_nav" id="header_nav_pin">	
			        <nav class="nav-bar">
			        	<span class="fi-monitor"></span>
			            <ul>
			                <li>Menu
			                    <div class="mega-menu">
			                        <div class="inner-mega-menu">
			                        	<h4>NOSOTROS:</h4>

			                            <p> <i class="fa fa-home"> </i><a href="index.html"> | Inicio</a> </p>
			                            <p> <i class="fa fa-building"> </i><a href="consultaEntrada.php?idTipoEntrada=1"> | Sedes</a></p>
			                            <p><i class="fa fa-hospital-o"> </i><a href="consultaEntrada.php?idTipoEntrada=2"> | Entidad</a></p>
			                            <p><i class="fa fa-address-card"></i><a href="consultaEntrada.php?idTipoEntrada=3"> | Directorio Funcionarios</a></p>
			                            <p><i class="fa fa-address-book-o"></i><a href="consultaEntrada.php?idTipoEntrada=4"> | Directorio Institucional</a></p>
			                            <p><i class="fa fa-history"></i><a href="consultaEntrada.php?idTipoEntrada=5"> | Procesos y procedimientos</a></p>
			                            <p><i class="fa fa-envelope-open"></i><a href="consultaEntrada.php?idTipoEntrada=6"> | Correo Interno</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                             <h4>Infórmate:</h4>
					          			<p> <i class="fa fa-newspaper-o"> </i><a href="consultaEntrada.php?idTipoEntrada=7"> | Noticias</a></p>
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
							          <p> <i class="fa fa-flash"> </i><a href="consultaEntrada.php?idTipoEntrada=7"> | Ejecución de contratos</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                           	<h4>Documentos:</h4>
								          <p> <i class="fa fa-folder-open-o"> </i><a href="consultaEntrada.php?idTipoEntrada=16">  | Rendición de cuentas</a></p>
								          <p> <i class="fa fa-file-text-o"> </i><a href="consultaEntrada.php?idTipoEntrada=17">  | Informes</a></p>
								          <p> <i class="fa fa-bar-chart"> </i><a href="consultaEntrada.php?idTipoEntrada=18">  | Estudios e investigaciones</a></p>
								          <p> <i class="fa fa-cogs"> </i><a href="consultaEntrada.php?idTipoEntrada=19">  | Proyectos en ejecución</a></p>
								          <p> <i class="fa fa-file-archive-o"><a href="consultaEntrada.php?idTipoEntrada=20">  </i> | Informes de PQRS</a></i>
								          <p> <i class="fa fa-list"> </i><a href="consultaEntrada.php?idTipoEntrada=21">  | Normatividad</a></p>
								          <p> <i class="fa fa-clone"> </i><a href="consultaEntrada.php?idTipoEntrada=22">  | Políticas y lineamientos</a></p>
								          <p> <i class="fa fa-cubes"> </i><a href="consultaEntrada.php?idTipoEntrada=23">  | Planes</a></p>
								          <p> <i class="fa fa-desktop"> </i><a href="consultaEntrada.php?idTipoEntrada=24">  | Programas</a></p>
								          <p> <i class="fa fa-money"> </i><a href="consultaEntrada.php?idTipoEntrada=25">  | Presupuesto</a></p>
			                        </div>
			                        <div class="inner-mega-menu">
			                            <h4>Participa:</h4>
								          <p> <i class="fa fa-calendar"> </i><a href="consultaEntrada.php?idTipoEntrada=26">  | Calendario de Actividades</a></p>
								          <p> <i class="fa fa-anchor"> </i><a href="consultaEntrada.php?idTipoEntrada=27">  | Retos de participacón</a></p>
								          <p> <i class="fa fa-check-square-o"></i><a href="consultaEntrada.php?idTipoEntrada=28"> | Encuesta</a></P>
								          <p> <i class="fa fa-bullhorn"> </i><a href="consultaEntrada.php?idTipoEntrada=29">  | Instancias de Participación</a></p>
			                        </div> 
			                        <div class="inner-mega-menu">
			                        	<h4>Atención Ciudadana: </h4>
								          <p> <i class="fa fa-floppy-o"> </i><a href="consultaEntrada.php?idTipoEntrada=30">  | Transparencia y acceso</a></p>
								          <p> <i class="fa fa-files-o"> </i><a href="consultaEntrada.php?idTipoEntrada=31">  | Tramites y servicios</a></p>
								          <p> <i class="fa fa-binoculars"> </i><a href="consultaEntrada.php?idTipoEntrada=32">  | Mecanismos de control</a></p>
								          <p> <i class="fa fa-globe"> </i><a href="consultaEntrada.php?idTipoEntrada=33">  | Transparencia</a></p>
								          <p> <i class="fa fa-cube"> </i><a href="consultaEntrada.php?idTipoEntrada=34">  | Recepción de solicitudes</a></p>
								          <p> <i class="fa fa-user-secret"> </i><a href="consultaEntrada.php?idTipoEntrada=35">  | Política y protección de datos</a></p>
			                        </div>
			                    </div>
			                </li>
			            </ul>
			        </nav>
				</div>
		</header>



		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Variable nombreTipoEntrada</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Titulo Pagina -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_title">
							Variabre descripcionTipoEntrada
						</div>
						<!--Variable descripcionTipoEntrada-->
						<div><spam>______________________________________________________________________________</spam></div>
						<br>
				
					</div>
				</div>
				<!-- Consulta -->	

				<!-- Info Boxes -->

				<div class="info">
					<div class="container">
						<div class="row row-eq-height">

							<!-- Info Box -->
							<div class="col-lg-4 info_box_col">
								<div class="info_box">
									<div class="info_image"><img src="images/info_1.jpg" alt=""></div>
									<div class="info_content">
										<div class="info_title">Free Consultations</div>
										<div class="info_text">Arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas finibus, dolor risus mollis.</div>
										<div class="button info_button"><a href="#"><span>read more</span><span>read more</span></a></div>
									</div>
								</div>
							</div>

							<!-- Info Box -->
							<div class="col-lg-4 info_box_col">
								<div class="info_box">
									<div class="info_image"><img src="images/info_2.jpg" alt=""></div>
									<div class="info_content">
										<div class="info_title">Emergency Care</div>
										<div class="info_text">Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas finibus, dolor risus.</div>
										<div class="button info_button"><a href="#"><span>read more</span><span>read more</span></a></div>
									</div>
								</div>
							</div>

							<!-- Info Box -->
							<div class="col-lg-4 info_box_col">
								<div class="info_box">
									<div class="info_image"><img src="images/info_2.jpg" alt=""></div>
									<div class="info_content">
										<div class="info_title">Emergency Care</div>
										<div class="info_text">Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas finibus, dolor risus.</div>
										<div class="button info_button"><a href="#"><span>read more</span><span>read more</span></a></div>
									</div>
								</div>
							</div>

						</div>
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
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
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

					<!-- Footer Hours -->

					<div class="col-lg-4 footer_col">
						<div class="departments">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="section_title">Gobierno</div>
										<div class="section_subtitle">En liena</div>
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