<?php

include "../conexion/conexion.php";

//isset($_POST['selected_date']) ? $selected_date = $_POST['selected_date'] : $selected_date = '';

//$fecha = $_POST['selected_date']; --> aqui recibirá el servicio
$serv = $_POST['servicio'];
$user = $_POST['usuario'];
//$sentencia = $con->query( "SELECT * FROM servicio WHERE fecha_ini = '$selected_date'");
$sentencia = $bd->query("SELECT * FROM servicio where id_ser='$serv'"); //aqui se agrega el servicio a filtrar por base de datos
$sentencia2 = $bd->query("SELECT desc_zona FROM l_zona l inner join servicio s on l.id_zona=s.zona where s.id_ser='$serv'"); //aqui se agrega el servicio a filtrar por base de datos
$sentencia3 = $bd->query("SELECT l.desc_tip_serv FROM l_tip_ser l inner join servicio s on l.id_tip_ser=s.tip_ser where s.id_ser='$serv'"); //aqui se agrega el servicio a filtrar por base de datos
$date = $sentencia->fetchAll(PDO::FETCH_OBJ);
$desc_zona = $sentencia2->fetchAll(PDO::FETCH_OBJ);
$desc_serv = $sentencia3->fetchAll(PDO::FETCH_OBJ);
//print_r($date);

//print_r($sentencia);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Detalle de servicio</title>
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="http://www.google.com/jsapi?key=CODIGO-PERSONAL"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <style>
    body {
      background-color: #252c41 !important;
    }

    hr {
      border-top: 2px solid gray;
    }

    p {
      font-size: 14px;
      margin-bottom: 0%;
      margin-top: 0%;
      text-align: justify;
    }
  </style>

</head>

<body>

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

        <!-- login -->
        <div class="col-lg-3 text-light">
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
          <a class="nav-link" href="./index.php">Regresar</a>
        </li>
      </ul>
    </nav>

    <!-- Cuerpo de la pagina -->

    <div class="container-fluid text-light">

      <div class="row">
        <!-- Carrusel -->
        <div class="col-lg-6">
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
                <img class="d-block w-100" src="../imagenes/turismo1.jpg" alt="imagen1" height="500">
                <div class="carousel-caption">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../imagenes/turismo2.jpg" alt="imagen1" height="500">
                <div class="carousel-caption">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../imagenes/turismo3.jpg" alt="imagen1" height="500">
                <div class="carousel-caption">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../imagenes/turismo4.jpg" alt="imagen1" height="500">
                <div class="carousel-caption">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../imagenes/turismo5.jpg" alt="imagen1" height="500">
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

          <div class="row">
            <!-- MAPA -->
            <div class="col-lg-12">
              <h3>Ubicación</h3>
              <!--Google map-->
              <?php
              foreach ($date as $dato) {
              ?>
                <div class="map-responsive">
                  <iframe src="<?php echo $dato->desc_mapa; ?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen> </iframe>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>

        <!-- Detalle servicio -->
        <div class="col-lg-6">
          <?php
          foreach ($date as $dato) {
          ?>
            <h5>Sobre la empresa y servicio:</h5>
            <table class="table table-sm">
              <tbody>
                <tr>
                  <td><?php echo $dato->desc_servicio; ?>
                </tr>
              </tbody>
            </table>
            <br><br>
            <h5>Detalle de servicio:</h5>
            <table class="table table-sm">
              <tbody>
                <tr>
                  <?php
                  foreach ($desc_serv as $desc_servF) {
                  ?>
                    <td>Tipo de servicio</td>
                    <td> <?php echo $desc_servF->desc_tip_serv; ?></td>
                  <?php
                  }
                  ?>
                </tr>
                <tr>
                  <?php
                  foreach ($desc_zona as $desc_zonaF) {
                  ?>
                    <td>Zona</td>
                    <td> <?php echo $desc_zonaF->desc_zona; ?></td>
                  <?php
                  }
                  ?>
                </tr>
                <tr>
                  <td>Ciudad</td>
                  <td> <?php echo $dato->desc_ciudad; ?></td>
                </tr>
                <tr>
                  <td>Día inicio</td>
                  <td><?php echo $dato->fecha_ini; ?></td>
                </tr>
                <tr>
                  <td>Hora Inicio</td>
                  <td> <?php echo $dato->hora_ini; ?></td>
                </tr>
                <tr>
                  <td>Día Fin</td>
                  <td><?php echo $dato->fecha_fin; ?></td>
                </tr>
                <tr>
                  <td>Hora Fin</td>
                  <td> <?php echo $dato->hora_fin; ?></td>
                </tr>
                <tr>
                  <td>Precio</td>
                  <td> <?php echo $dato->valor; ?></td>
                </tr>
                <tr>
                  <td>Stock</td>
                  <td> <?php echo $dato->stock; ?></td>
                </tr>
              </tbody>
            </table>
            <br>
            <h5>Datos de contacto:</h5>
            <table class="table table-sm">
              <tbody>
                <tr>
                  <td>Correo</td>
                  <td> <?php echo $dato->desc_email; ?></td>
                </tr>
                <tr>
                  <td>Teléfono</td>
                  <td><?php echo $dato->desc_fono; ?></td>
                </tr>
                <tr>
                  <td>Página Web</td>
                  <td> <?php echo $dato->desc_pag_url; ?></td>
                </tr>
              </tbody>
            </table>
            <br>
            <div class="contenedor-modal">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#miModal">Comprar</button>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Formulario de pago -->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Proceso de pago</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="Codigo">
            <div class="form-row">
              <div class="form-group col-md-12">
                <form method="POST" action="confirma.php" class="credit-card-div">
                  <input type="text" class="form-control" name="id_servicio" value="<?php echo $dato->id_ser; ?>" hidden>
                  <input type="text" class="form-control" name="user_compra" value="<?php echo $user; ?>" hidden>
                  <input type="text" class="form-control" name="valor" value="<?php echo $dato->valor; ?>" hidden>
                  <input type="text" class="form-control" placeholder="Número de Tarjeta"  required/>
              </div>
            </div>
            <div class="row ">
              <div class="col-md-4 col-sm-4 col-xs-4">
                <span class="help-block text-muted small-font"> Mes Expiración</span>
                <input type="text" class="form-control" placeholder="MM" required />
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4">
                <span class="help-block text-muted small-font"> Año Expiración</span>
                <input type="text" class="form-control" placeholder="YY" required/>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4">
                <span class="help-block text-muted small-font"> Código CCV</span>
                <input type="text" class="form-control" placeholder="CCV" required/>
              </div>
            </div>
            <br>
            <div class="row ">
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                <input type="submit" class="btn btn-danger" value="CANCELAR" />
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                <input type="submit" class="btn btn-warning btn-block btnpag" value="PAGAR" />
              </div>
            </div>
          </div>
        </div>
        </form>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>