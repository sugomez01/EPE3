<?php
session_start();
if (isset($_SESSION['nombre'])) {
	header('Location: ./galeria.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Galería</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>

	<style>
		body {
			background-color: #252c41 !important;
		}

		#demo {
			height: 100%;
			position: relative;
			overflow: hidden;
		}

		.thumb {
			margin-bottom: 30px;
		}

		.page-top {
			margin-top: 85px;
		}

		img.zoom {
			width: 100%;
			height: 200px;
			border-radius: 5px;
			object-fit: cover;
			-webkit-transition: all .3s ease-in-out;
			-moz-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
		}

		.transition {
			-webkit-transform: scale(1.2);
			-moz-transform: scale(1.2);
			-o-transform: scale(1.2);
			transform: scale(1.2);
		}

		.modal-header {
			border-bottom: none;
		}

		.modal-title {
			color: #000;
		}

		.modal-footer {
			display: none;
		}
	</style>

</head>

<body>

	<!-- cabecera -->
	<div class="container-fluid">
		<div class="row">
			<!-- botones de RRSS con estilo boostrap -->
			<div class="col-lg-1" style="text-align: center;">
				<br><br>
				<a href="https://www.facebook.com/RedTurismoChile"><i class="fa fa-facebook-square" style="font-size:30px;color:#ffffff;"></i></a>
				<a href="https://www.instagram.com/redturismochile/?fbclid=IwAR3BlccWxsEJxnS1_SGZplGVCxK8AFa0PM8mF6TgIGvyIVs1eBejV6WnBiU"><i class="fa fa-instagram" style="font-size:30px;color:rgb(167, 1, 87); margin-left: 15%;"></i></a><br><br>
				<a href="https://twitter.com/redturismochile?fbclid=IwAR1J4EPk0aEuk0o-NwWGdGTxTEZgWVk5F64y6OLdC4fHbCvDITtRPXp8CWs"><i class="fa fa-twitter" style="font-size:30px;color:rgb(96, 164, 216);"></i></a>
				<a href=" https://www.youtube.com/channel/UCE93M5jXL2rsgxqijIx4tnQ/videos"><i class="fa fa-youtube-play" style="font-size:30px;color:rgb(220, 0, 0); margin-left: 15%;"></i></a>
			</div>

			<!-- logo e imagen -->
			<div class="col-lg-8" style="text-align: center;">
				<img class="card-img-top img-fluid" src="../imagenes/logo_principal2.png" alt="logo" height="210" width="100%">
				<div class="card-img-overlay">
					<h4 class="card-title text-light" style="text-align: left;">Turismo S.A.</h4>
				</div>
				<div class="card">
				</div>
			</div>
			<!-- formulario login -->
			<div class="col-lg-3" style="background-color:#252c41;">
				<h4 style="margin-top: 2%;">
					<p class="text-light">Ingrese aquí!</p>
				</h4>
				<form style="margin-top: 5%;" method="POST" action="../movimientos/loginProceso.php">
					<div class="form-group row">
						<label for="usuario" class="col-sm-3 col-form-label">
							<p class="text-light">Usuario</p>
						</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="txtUsu" placeholder="Ingrese usuario" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="clave" class="col-sm-3 col-form-label">
							<p class="text-light">Clave</p>
						</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="txtPass" placeholder="Ingrese clave" required>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name="ingresar" value="Ingresar" class="btn btn-light">Ingresar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- nav -->
	
	<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color:#252c41 ;">
			<ul class="navbar-nav nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#QuienesSomos">Quienes Somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Galería</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#Contacto">Contacto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Foro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../index.php">Regresar</a>
				</li>
			</ul>
		</nav>
	

	<!-- Galeria -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad1.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad1.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad2.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad2.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad3.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad3.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida1.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida1.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida2.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida2.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida3.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida3.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria1.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria1.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria2.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria2.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria3.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria3.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad4.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad4.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad5.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad5.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad6.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad6.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida4.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida4.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida5.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida5.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida6.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida6.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria4.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria4.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria5.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria5.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria6.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria6.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad7.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad7.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad8.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad8.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad9.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad9.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida7.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida7.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida8.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida8.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida9.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida9.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria7.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria7.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria8.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria8.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria9.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria9.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/actividad10.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/actividad10.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/comida10.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/comida10.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a href="./galeria/galeria10.jpg" class="fancybox" rel="ligthbox">
					<img src="./galeria/galeria10.jpg" class="zoom img-fluid " alt="imagen">
				</a>
			</div>

		</div>
	</div>
	<!-- script para zoom y transicion de galería -->
	<script>
		$(document).ready(function() {
			$(".fancybox").fancybox({
				openEffect: "none",
				closeEffect: "none"
			});

			$(".zoom").hover(function() {

				$(this).addClass('transition');
			}, function() {

				$(this).removeClass('transition');
			});
		});
	</script>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

	<!-- Emergentes de NAV -->
	<!-- Modal para Nav -->
	<div class="container-fluid">
		<!-- The Modal  Quienes Somos-->
		<div class="modal" id="QuienesSomos">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h2 class="modal-title">Quienes Somos</h2>
						<!-- <button type="button" class="close" data-dismiss="modal">×</button> -->
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-6 text-justify">
									<h4>Sobre nosotros...</h4>
									<p>Nuestro equipo esta conformado por Profesionales de Turismo, Hotelería y Creativos. ¡Somos una empresa chilena líder en la creación de soluciones especializadas para las necesidades de la industria turística nacional!</p>
									<p>¡Somos Red Turismo Chile! Una plataforma digital de promoción y difusión para empresas de Hotelería, Turismo y Gastronomía.</p>
									<p>Las personas pueden encontrar tu negocio en simples pasos, seleccionando la ciudad que desean visitar y el tipo de servicio que necesitan contratar como alojamiento, turismo, restaurantes o tiendas.</p>
								</div>
								<div class="col-lg-6">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ij3lwFkk1qI" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- The Modal  Contacto-->
		<div class="modal" id="Contacto">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h2 class="modal-title">Déjanos un mensaje</h2>
						<button type="button" class="close" data-dismiss="modal">×</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-9">
								<h5>Contáctanos</h5>
								<br>
								<div style="margin-left: 20%;">
									<form method="POST" action="movimientos/contacto.php">
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Nombres</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="txtNom" placeholder="Ingrese nombre" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Apellidos</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="txtApe" placeholder="Ingrese apellido" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Correo</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="txtMail" placeholder="Ingrese correo" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Teléfono</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="txtFono" placeholder="Ingrese teléfono">
											</div>
										</div>
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Mensaje</label>
											<div class="col-sm-9">
												<textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escriba su mensaje aquí" required></textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8">
											</div>
											<div class="col-sm-4">
												<button type="submit" name="enviar" value="Enviar" class="btn btn-dark">Enviar mensaje</button>
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

	</div>

	<!-- Emergentes de NAV -->
	<!-- Modal para Nav -->
	<div class="container-fluid">
		<!-- The Modal  Quienes Somos-->
		<div class="modal" id="QuienesSomos">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h2 class="modal-title">Quienes Somos</h2>
						<!-- <button type="button" class="close" data-dismiss="modal">×</button> -->
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-6 text-justify">
									<h4>Sobre nosotros...</h4>
									<p>Nuestro equipo esta conformado por Profesionales de Turismo, Hotelería y Creativos. ¡Somos una empresa chilena líder en la creación de soluciones especializadas para las necesidades de la industria turística nacional!</p>
									<p>¡Somos Red Turismo Chile! Una plataforma digital de promoción y difusión para empresas de Hotelería, Turismo y Gastronomía.</p>
									<p>Las personas pueden encontrar tu negocio en simples pasos, seleccionando la ciudad que desean visitar y el tipo de servicio que necesitan contratar como alojamiento, turismo, restaurantes o tiendas.</p>
								</div>
								<div class="col-lg-6">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ij3lwFkk1qI" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- The Modal  Contacto-->
		<div class="modal" id="Contacto">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h2 class="modal-title">Déjanos un mensaje</h2>
						<button type="button" class="close" data-dismiss="modal">×</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-9">
								<h5>Contáctanos</h5>
								<br>
								<div style="margin-left: 20%;">
									<form method="POST" action="movimientos/contacto.php">
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Nombres</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="txtNom" placeholder="Ingrese nombre" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Apellidos</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="txtApe" placeholder="Ingrese apellido" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Correo</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="txtMail" placeholder="Ingrese correo" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Teléfono</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="txtFono" placeholder="Ingrese teléfono">
											</div>
										</div>
										<div class="form-group row">
											<label for="clave" class="col-sm-3 col-form-label">Mensaje</label>
											<div class="col-sm-9">
												<textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escriba su mensaje aquí" required></textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8">
											</div>
											<div class="col-sm-4">
												<button type="submit" name="enviar" value="Enviar" class="btn btn-dark">Enviar mensaje</button>
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

	</div>


	<br>

	<!-- Pie de pagina -->
	<div class="container-fluid text-light">
		<div class="row">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-3" style="background-color:#252c41">
				<h6>Horario de atención</h6>
				<p class="text-secondary"><small>Lunes a Viernes 08:00 - 20:00 <br>
						© 2020 Todos los derechos reservados.</small></p>
			</div>
			<div class="col-lg-3">
				<h6>Contacto</h6>
				<div class="text-secondary">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
						<path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
					</svg><small style="margin-left: 10px;">Dirección: Napoleón 3233, Las Condes, Santiago</small><br>

					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
					</svg><small style="margin-left: 10px;">Teléfono: +569 96657786</small><br>
				</div>
			</div>
		</div>
	</div>

</body>

</html>