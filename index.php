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
		<div class="background_image" style="background-image:url(images/entidad.jpg)"></div>

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
												<li><a href="#" id="show-login">Inicio de Sesión</a></li>
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
							<div class="home_title">"Su Salud y Calidad de Vida</div>
							<div class="home_text">en nuestras manos"</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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

				<!-- Info Form -->
				<div class="col-lg-4 info_box_col">
					<div class="info_form_container">
						<div class="info_form_title">Make an Appointment</div>
						<form action="#" class="info_form" id="info_form">
							<select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
								<option>Department</option>
								<option>Department</option>
								<option>Department</option>
							</select>
							<select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
								<option>Doctor</option>
								<option>Doctor</option>
								<option>Doctor</option>
							</select>
							<input type="text" class="info_input" placeholder="Name" required="required">
							<input type="text" class="info_input" placeholder="Phone No">
							<button class="info_form_button">make an appointment</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="cta_content text-xl-left text-center">
							<div class="cta_title">Make an appointment with one of our professional Doctors.</div>
							<div class="cta_subtitle">Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas.</div>
						</div>
						<div class="button cta_button ml-xl-auto"><a href="#"><span>call now</span><span>call now</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Our Services</div>
					<div class="section_subtitle">to choose from</div>
				</div>
			</div>
			<div class="row icon_boxes_row">
				
				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_1.svg" alt=""></div>
							<div class="icon_box_title">Cardiology</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_2.svg" alt=""></div>
							<div class="icon_box_title">Gastroenterology</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_3.svg" alt=""></div>
							<div class="icon_box_title">Medical Lab</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_4.svg" alt=""></div>
							<div class="icon_box_title">Dental Care</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_5.svg" alt=""></div>
							<div class="icon_box_title">Surgery</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_6.svg" alt=""></div>
							<div class="icon_box_title">Neurology</div>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="button services_button ml-auto mr-auto"><a href="#"><span>read more</span><span>read more</span></a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Departments -->

	<div class="departments">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Our Departments</div>
					<div class="section_subtitle">to choose from</div>
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
										<div class="dept_title">Neonatology</div>
										<div class="dept_link"><a href="#">Read More</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/dept_2.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Dentistry</div>
										<div class="dept_link"><a href="#">Read More</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/dept_3.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Orthopedics</div>
										<div class="dept_link"><a href="#">Read More</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="images/dept_4.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Laboratory</div>
										<div class="dept_link"><a href="#">Read More</a></div>
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

	<!-- FAQ & News -->

	<div class="stuff">
		<div class="container">
			<div class="row">

				<!-- FAQ -->
				<div class="col-lg-7">
					<div class="faq">
						<div class="faq_title">Faq & Stuff</div>
						<div class="faq_subtitle">read all about it</div>
						<div class="elements_accordions">
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Maecenas fermentum tortor id fringilla molestie.</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Duis quis lacinia elit. Etiam varius mi eget lacus ultricies elementum</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Maecenas fermentum tortor id fringilla molestie.</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Latest News -->
				<div class="col-lg-5">
					<div class="news">
						<div class="news_title">Latest News</div>
						<div class="news_subtitle">read all about it</div>
						<div class="news_container">

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/latest_1.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">A simple blog post</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/latest_2.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">A new way to see things in medicine</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/latest_3.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">Why is Pharma industry so big?</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
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