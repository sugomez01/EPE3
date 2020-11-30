<?php
session_start();
if (isset($_SESSION['nombre'])) {
	header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Home</title>
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
				<img class="card-img-top img-fluid" src="imagenes/logo_principal2.png" alt="logo" height="210" width="100%">
				<div class="card-img-overlay">
					<h4 class="card-title text-light" style="text-align: left;">Turismo S.A.</h4>
				</div>
				<div class="card">
				</div>
			</div>

			<!-- formulario login -->
			<div class="col-lg-3">
				<h4 style="margin-top: 2%;">
					<p class="text-light">Ingrese aquí!</p>
				</h4>
				<form style="margin-top: 5%;" method="POST" action="movimientos/loginProceso.php">
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
						<a href="#" id="NuevoUsuario" class="text-light" style="margin-left: 25px;">Regístrate aquí</a>
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
					<a class="nav-link" href="./movimientos/galeria.php">Galería</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#Contacto">Contacto</a>
				</li>
<!-- 				<li class="nav-item">
					<a class="nav-link" href="#">Foro</a>
				</li> -->
				<li class="nav-item active">
					<a class="nav-link" href="#" id="UsuarioEmpresa">Regístrate y anuncia tu empresa de Turismo Aquí!</a>
				</li>
			</ul>
		</nav>
	
	<!-- cuerpo de la pagina  -->
	<div class="container-fluid">
		<div class="row">
			<!-- carrusel -->
			<div class="col-xl-9 col-lg-9 col-md-8 col-sm-7 col-6">
				<div id="carousel1" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel1" data-slide-to="0" class="active"></li>
						<li data-target="#carousel1" data-slide-to="1"></li>
						<li data-target="#carousel1" data-slide-to="2"></li>
						<li data-target="#carousel1" data-slide-to="3"></li>
						<li data-target="#carousel1" data-slide-to="4"></li>
					</ol>
					<!-- diapositivas -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="imagenes/turismo1.jpg" alt="imagen1" width="450" height="700">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="imagenes/turismo2.jpg" alt="imagen1" width="450" height="700">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="imagenes/turismo3.jpg" alt="imagen1" width="450" height="700">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="imagenes/turismo4.jpg" alt="imagen1" width="450" height="700">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="imagenes/turismo5.jpg" alt="imagen1" width="450" height="700">
							<div class="carousel-caption">
							</div>
						</div>
					</div>

					<!-- botones de desplazamiento a izquierda y derecha -->
					<a class="carousel-control-prev" href="#carousel1" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#carousel1" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>

			<!-- buscador de servicios -->
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-6">
				<form action="./movimientos/servicios.php" style="margin-top: 45%;" method="POST">
					<div class="form-group row">
						<label for="validation01" class="col-form-label text-light">Seleccione una zona a buscar</label>
					</div>
					<div class="form-group row">

						<select class="browser-default custom-select " name="selectorzona">
							<option selected disabled>Seleccione una opción</option>
							<option value="1">NORTE</option>
							<option value="2">CENTRO</option>
							<option value="3">SUR</option>
						</select>
					</div>

					<div class="form-group row">
						<label for="clave" class="col-sm-4 col-form-label">
							<p class="text-light">Fecha Inicio:</p>
						</label>
						<div class="col-sm-8">
							<input type="date" name="fechaesperada" require>
						</div>
					</div>
					<div class="form-group row">
						<label for="clave" class="col-sm-4 col-form-label">
							<p class="text-light">Fecha Fin:</p>
						</label>
						<div class="col-sm-8">
							<input type="date" name="fecha_fin" require>
						</div>
					</div>
					<div class="form-group">
						<button input type="submit" class="btn btn-light">Buscar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Formulario Creacion para nuevo usuario -->
	<div class="modal fade" id="FormularioNuevoUsuario" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Registro de usuario</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="Codigo">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Nombre de usuario:</label>
							<input type="text" id="NombreNuevo" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Clave:</label>
							<input type="password" id="Clave1" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Repita clave:</label>
							<input type="password" id="Clave2" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Correo:</label>
							<input type="text" id="Mail" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Teléfono:</label>
							<input type="text" id="Fono" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" id="BotonAgregarUsuario" class="btn btn-success">Registrarme</button>
					<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Script para formulario creación de usuario -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			$('#NuevoUsuario').click(function() {
				borrarFormulario();
				$("#FormularioNuevoUsuario").modal();
			});

			$('#BotonAgregarUsuario').click(function() {
				let nuevousuario = retornarNuevoUsuario();
				if (validarEntradaDatos(nuevousuario))
					agregarNuevoUsuario(nuevousuario);
			});

			$('#BotonLogin').click(function() {
				let usuario = retornarUsuario();
				loginUsuario(usuario);
			});

			function borrarFormulario() {
				$('#NombreNuevo').val("");
				$('#Clave1').val("");
				$('#Clave2').val("");
				$('#Mail').val("");
				$('#Fono').val("");
			}

			function retornarNuevoUsuario() {
				let nuevousuario = {
					nombrenuevo: $('#NombreNuevo').val(),
					clave1: $('#Clave1').val(),
					clave2: $('#Clave2').val(),
					mail: $('#Mail').val(),
					fono: $('#Fono').val()
				};
				return nuevousuario;
			}

			function retornarUsuario() {
				let usuario = {
					usuario: $('#Usuario').val(),
					clave: $('#Clave').val(),
					mail: $('#Mail').val(),
					fono: $('#Fono').val()
				};
				return usuario;
			}

			function validarEntradaDatos(nuevousuario) {
				if (nuevousuario.nombrenuevo == '') {
					alert('Debe ingresar un nombre de usuario');
					return false;
				}
				if (nuevousuario.clave1 == '') {
					alert('Debe ingresar una clave');
					return false;
				}
				if (nuevousuario.clave1 != nuevousuario.clave2) {
					alert('Las claves ingresadas son distintas');
					return false;
				}
				if (nuevousuario.mail == '') {
					alert('Debe ingresar un correo');
					return false;
				}
				if (nuevousuario.fono == '') {
					alert('Debe indicar un número de contacto');
					return false;
				}
				return true;
			}

			function agregarNuevoUsuario(nuevousuario) {
				$.ajax({
					type: 'POST',
					url: 'registro/datosusuarios.php?accion=existe',
					data: nuevousuario,
					success: function(info) {
						if (info.resultado == 'norepetido') {
							$.ajax({
								type: 'POST',
								url: 'registro/datosusuarios.php?accion=agregar',
								data: nuevousuario,
								success: function() {
									alert('Usuario registrado con éxito!');
									$("#FormularioNuevoUsuario").modal('hide');
								},
								error: function() {
									alert('Error en insertar registro');
								}
							});
						} else
							alert('Nombre de usuario existente.');
					},
					error: function() {
						alert('Error, no se puede insertar registro');
					}
				});
			}

			function loginUsuario(usuario) {
				$.ajax({
					type: 'POST',
					url: 'index.php',
					data: usuario,
					success: function(respuesta) {
						if (respuesta == 'correcta') {
							window.location = 'index.php';
						} else
							alert('Nombre de usuario o clave incorrecta');
					},
					error: function() {
						alert('Error, no se ha podido validar usuario');
					}
				});
			}
		});
	</script>

	<!-- Formulario Creacion para empresa -->
	<div class="modal fade" id="FormularioNuevaEmpresa" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Registro de empresa</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="Codigo">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Nombre de usuario:</label>
							<input type="text" id="NombreEmpresa" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Clave:</label>
							<input type="password" id="ClaveEmpresa1" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Repita clave:</label>
							<input type="password" id="ClaveEmpresa2" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Correo:</label>
							<input type="text" id="MailEmpresa" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Teléfono:</label>
							<input type="text" id="FonoEmpresa" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" id="BotonAgregarEmpresa" class="btn btn-success">Registrarme</button>
					<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
				</div>
			</div>

		</div>
	</div>

	<!-- Script para formulario creación de empresa -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			$('#UsuarioEmpresa').click(function() {
				borrarFormulario();
				$("#FormularioNuevaEmpresa").modal();
			});

			$('#BotonAgregarEmpresa').click(function() {
				let nuevousuario = retornarNuevoUsuario();
				if (validarEntradaDatos(nuevousuario))
					agregarNuevoUsuario(nuevousuario);
			});

			$('#BotonLogin').click(function() {
				let usuario = retornarUsuario();
				loginUsuario(usuario);
			});

			function borrarFormulario() {
				$('#NombreEmpresa').val("");
				$('#ClaveEmpresa1').val("");
				$('#ClaveEmpresa2').val("");
				$('#MailEmpresa').val("");
				$('#FonoEmpresa').val("");
			}

			function retornarNuevoUsuario() {
				let nuevousuario = {
					nombrenuevo: $('#NombreEmpresa').val(),
					clave1: $('#ClaveEmpresa1').val(),
					clave2: $('#ClaveEmpresa2').val(),
					mail: $('#MailEmpresa').val(),
					fono: $('#FonoEmpresa').val()
				};
				return nuevousuario;
			}

			function retornarUsuario() {
				let usuario = {
					usuario: $('#Usuario').val(),
					clave: $('#Clave').val(),
					mail: $('#Mail').val(),
					fono: $('#Fono').val()
				};
				return usuario;
			}

			function validarEntradaDatos(nuevousuario) {
				if (nuevousuario.nombrenuevo == '') {
					alert('Debe ingresar un nombre de usuario');
					return false;
				}
				if (nuevousuario.clave1 == '') {
					alert('Debe ingresar una clave');
					return false;
				}
				if (nuevousuario.clave1 != nuevousuario.clave2) {
					alert('Las claves ingresadas son distintas');
					return false;
				}
				if (nuevousuario.mail == '') {
					alert('Debe ingresar un correo');
					return false;
				}
				if (nuevousuario.fono == '') {
					alert('Debe indicar un número de contacto');
					return false;
				}
				return true;
			}

			function agregarNuevoUsuario(nuevousuario) {
				$.ajax({
					type: 'POST',
					url: 'registro/datosempresa.php?accion=existe',
					data: nuevousuario,
					success: function(info) {
						if (info.resultado == 'norepetido') {
							$.ajax({
								type: 'POST',
								url: 'registro/datosempresa.php?accion=agregar',
								data: nuevousuario,
								success: function() {
									alert('Usuario registrado con éxito!');
									$("#FormularioNuevoUsuario").modal('hide');
								},
								error: function() {
									alert('Error en insertar registro');
								}
							});
						} else
							alert('Nombre de usuario existente.');
					},
					error: function() {
						alert('Error, no se puede insertar registro');
					}
				});
			}

			function loginUsuario(usuario) {
				$.ajax({
					type: 'POST',
					url: 'index.php',
					data: usuario,
					success: function(respuesta) {
						if (respuesta == 'correcta') {
							window.location = 'index.php';
						} else
							alert('Nombre de usuario o clave incorrecta');
					},
					error: function() {
						alert('Error, no se ha podido validar usuario');
					}
				});
			}
		});
	</script>

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