<?php
	
	require_once 'modelos/modeloEntrada.php';
	
	$todasEntradas = new modeloEntrada(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	$consultaEntradas = $todasEntradas->listaEntradas();   

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Administrar Entradas</title>
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
					<nav class="navbar navbar-expand-lg navbar-light megamenuback">
					    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
							  </button>
					    <div class="collapse navbar-collapse mega-dropdown " id="navbar" >
					     <ul class="navbar-nav mr-auto">
					      <li class="nav-item dropdown megamenu-li">
					       <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menú</a>
					       <div class="dropdown-menu megamenu dropdown-Megamenu" aria-labelledby="dropdown01" style="overflow: auto;">
					        <div class="row">
					         <div class="col-sm-6 col-lg-3">
					          <h5>Nosotros</h5>
					          <a class="dropdown-item dropdown-item-mgmenu" href="index.html">Inicio</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="sedes.html">Sedes</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="entidad.html">Entida</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="directorioFuncionarios.html">Directorio Funcionarios</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="directorioInstitucional.html">Directorio Institucional</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="proceso.html">Procesos y Procedimientos</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="#">Correo Interno</a>
					         </div>
					         <div class="col-sm-6 col-lg-3">
					          <h5>Infórmate</h5>
					          <a class="dropdown-item dropdown-item-mgmenu" href="noticias.html">Noticias</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="datosAbiertos.html">Datos Abiertos</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="convocatorias.html">Convocatorias</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="pqr.html">Preguntas y respuestas</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="metas.html">Metas, Objetivos e indicadores</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="ofertasEmpleo.html">Ofertas de empleo</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="control.html">Control</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="informacionAdicional.html">Información Adicional</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="poblacionVulnerable.html">Población Vulnerable</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="glosario.html">Glosario</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="contrataciones.html">Contrataciones</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="ejecucionContratos.html">Ejecución de contratos</a>
					         </div>
							 <div class="col-sm-6 col-lg-3">
					          <h5>Documentos</h5>
					          <a class="dropdown-item dropdown-item-mgmenu" href="rendicionCuentas.html">Rendición de cuentas</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="informes.html">Informes</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="estudios.html">Estudios e investigaciones</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="proyectos.html">Proyectos en ejecución</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="informePqr.html">Informes de PQRS</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="normatividad.html">Normatividad</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="politicas.html">Políticas y lineamientos</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="planes.html">Planes</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="programas.html">Programas</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="presupuesto.html">Presupuesto</a>
					         </div>
							 <div class="col-sm-6 col-lg-3">
					          <h5>Participa</h5>
					          <a class="dropdown-item dropdown-item-mgmenu" href="calendario.html">Calendario de Actividades</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="ninosNinasAdolecentes.html">Niños, Niñas y Adolecentes</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="retos.html">Retos de participacón</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="encuesta.html">Encuesta</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="instanciasParticipacion.html">Instancias de Participación</a>
					         </div>
					          <div class="col-sm-6 col-lg-3">
					          <h5>Atención Ciudadana</h5>
					          <a class="dropdown-item dropdown-item-mgmenu" href="transparenciaAcceso.html">Transparencia y acceso</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="tramites.html">Tramites y servicios</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="mecanismos.html">Mecanismos de control</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="transparencia.html">Transparencia</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="solicitudes.html">Recepción de solicitudes</a>
					          <a class="dropdown-item dropdown-item-mgmenu" href="proteccionDatos.html">Política y protección de datos</a>
					         </div>
					        </div>
					       </div>
					      </li>
					     </ul>
					     <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
							<form action="#" id="search_container_form" class="search_container_form">
								<input type="text" class="search_container_input" placeholder="Consultar" required="required">
								<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					    </div>

					   </nav>	
			</div>
		</header>


		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Administración de entradas</div>
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
							Lista de entradas
						</div>

						<div><spam>_______________________________</spam></div>
						<br>
				
					</div>
				</div>
				
					<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_title">
							<spam>Seleccione uno o varios parametros</spam>
						</div>
						<br>
						<form>
						<div class="row" style="float: right;">
							<h4>Titulo Entrada  </h4>
							<input type="text" id="contact_input" class="contact_input" placeholder="Titulo de entrada" required="required" name="tituloEntrada">
							<h4>   Fecha Entrada  </h4>
							<input type="text" id="contact_input" class="contact_input" placeholder="Fecha de entrada" required="required" name="fechaEntrada">
							
							<h4>   Tipo Entrada  </h4>
			
							<select name="tipoEntrada" id="contact_input" class="contact_input" placeholder="Seleccione una opción" >
									<option>Seleccione</option>
									<option>Sedes</option>
									<option>Entidad</option>
									<option>Directorio de Funcionarios</option>
									<option>Directorio institucional</option>
									<option>Procesos y procedimientos</option>
									<option>Noticias</option>
									<option>Datos abiertos</option>
									<option>Convocatorias</option>
									<option>Preguntas y respuestas</option>
									<option>Metas, Objetivos e indicadores</option>
									<option>Ofertas de empleo</option>
									<option>Control</option>
									<option>Información adicional</option>
									<option>Población vulnerable</option>
									<option>Glosario</option>
									<option>Ejecución de contratos</option>
									<option>Informes</option>
									<option>Estudios e investigaciones</option>
									<option>Proyectos en ejecución</option>
									<option>Informes de PQRS</option>
									<option>Normatividad</option>
									<option>Politicas y lineamientos</option>
									<option>Planes</option>
									<option>Programas</option>
							</select>	
						</div>
						<div>
							<button class="contact_button" id="contact_button">Consultar</button>
						</div>
						
						</form>
						<br>
				
					</div>
				</div>

				<!-- Consulta de sedes  -->

			<div class="table-responsive">
				<table class="table table-hover table-border">
				  <thead>
				    <tr>
				      <th scope="col">Codigo</th>
				      <th scope="col">Titulo</th>
				      <th scope="col">Descripcion</th>
				      <th scope="col">Tipo</th>
				      <th scope="col">Opción</th>
				    </tr>
				  </thead>
				  <tbody id="developers">
					<?php foreach ($consultaEntradas as $entradas): ?>
				    <tr>
				      <th scope="row"><?php echo $entradas->idEntrada ?></th>
				      <td><?php echo $entradas->tituloEntrada ?></td>
				      <td><?php echo $entradas->descripcionEntrada ?></td>
				      <td><?php echo $entradas->idTipoEntrada ?></td>
				      <td>
				      	<button class="contact_button_list" id="contact_button">Actualizar</button>
				      	<button class="contact_button_list" styles" style="background: #404040" id="contact_button">Desactivar</button>
				      </td>
				    </tr>
				    <?php endforeach; ?>
				  </tbody>
				</table>
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
<script src="js/pagination.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>