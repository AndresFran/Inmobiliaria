<?PHP
    include('php/det_inmueble.php');
    include('php/list_inmuebles_destacados.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Enlace Inmobiliario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
    <!--Agrego el ícono de Enlace para probar-->
    <link rel="icon" type="image/png" href="images/icono.png" />
    <!--Agrego el ícono de Enlace para probar-->
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
           <a href=""><img src="images/logo.png" width="200" height=""/></a>  
          </div>
        
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.php">Inicio</a>
                </li>
                <li><a href="inmuebles.php">Inmuebles</a></li>
                <li><a href="servicios.html">Servicios</a></li> 
                <li><a href="contacto.html">Contacto</a></li>
              </ul>
            </nav>
          </div>        
        </div>
      </div>
    </div>
  </div>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?PHP echo $nomimg; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Detalle de la Propiedad</span>
            <h1 class="mb-2"><?PHP echo $inmueble['tituloInmueble']; ?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?PHP echo $valorInmueble; ?></strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <?PHP echo $listadoImg; ?>
            </div> 
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?PHP echo $valorInmueble; ?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number"><?PHP echo $habitacionesInmueble; ?></span>                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number"><?PHP echo $banosInmueble; ?></span>                    
                  </li>
                  <li>
                    <span class="property-specs">Plantas</span>
                    <span class="property-specs-number"><?PHP echo $plantasInmueble; ?></span>                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Propiedad</span>
                  <strong class="d-block"><?PHP echo $inmueble['nombrePropiedad']; ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Zona</span>
                  <strong class="d-block"><?PHP echo $inmueble['nombreLocalidad']; ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Operación</span>
                  <strong class="d-block"><?PHP echo $inmueble['nombreOperacion']; ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Sup. Cubierta</span>
                  <strong class="d-block"><?PHP echo $superficieCubiertaInmueble; ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Sup. Total</span>
                  <strong class="d-block"><?PHP echo $superficieTotalInmueble; ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Estado</span>
                  <strong class="d-block"><?PHP echo $inmueble['estadoInmueble']; ?></strong>
                </div>
              </div>
              <h2 class="h4 text-black">Descripción</h2>
              <p><?PHP echo $inmueble['descripcionInmueble']; ?></p>
              <h2 class="h4 text-black">Info adicional</h2>
              <p><?PHP echo $inmueble['informacionAdicionalInmueble']; ?></p>
              
              <!-- <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Galería</h2>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_5.jpg" class="image-popup gal-item"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_6.jpg" class="image-popup gal-item"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_7.jpg" class="image-popup gal-item"><img src="images/img_7.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_8.jpg" class="image-popup gal-item"><img src="images/img_8.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-lg-4">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contactar al Corredor</h3>              
              <form action="php/consulta.php" class="form-contact-agent" method="GET">
                <div class="form-group">
                  <label for="name">Apellido y Nombre</label>
                  <input type="text" id="nombreConsulta" name="nombreConsulta" class="form-control" request>
                </div>
                <div class="form-group">
                  <label for="email">eMail</label>
                  <input type="email" id="mailConsulta" name="mailConsulta"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Teléfono</label>
                  <input type="number" id="telefonoConsulta" name="telefonoConsulta" class="form-control" request>
                </div>
                <div class="form-group">
                  <label for="mensaje">Mensaje</label>
                  <textarea id="comentarioConsulta"  name="comentarioConsulta" class="form-control">                  
                  </textarea>

                </div>
                <div class="form-group">
                  <input type="hidden" id="idInmueble" name="idInmueble" value="<?PHP echo $_REQUEST['idInmueble']; ?>"/>
                  <input type="hidden" id="idUsuario" name="idUsuario" value="<?PHP echo $inmueble['idUsuario']; ?>"/>
                  <input type="submit" class="btn btn-primary" value="Enviar Mensaje">
                  <hr>
                  <a target="_blank" class="btn btn-whatsapp" href="https://api.whatsapp.com/send?text=Visita https://www.enlaceinmobiliario.com.ar/detalle-inmueble.php?idInmueble=<?PHP echo $_REQUEST['idInmueble'];?>" ><span class="icon-whatsapp"></span>&nbsp;Compartir en WhatsApp</a>
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">M&aacute;s detalles</h3>
              <p><span class="d-inline-block text-black mb-0 caption-text">Cochera: <strong class="d-block"><?PHP echo $cocheraInmueble; ?></strong></span></p>              
              <p><span class="d-inline-block text-black mb-0 caption-text">Gas Natural: <strong class="d-block"><?PHP echo $gasNaturalInmueble; ?></strong></span></p>
              <p><span class="d-inline-block text-black mb-0 caption-text">Agua Corriente: <strong class="d-block"><?PHP echo $aguaCorrienteInmueble; ?></strong></span></p>
              <p><span class="d-inline-block text-black mb-0 caption-text">Cloacas: <strong class="d-block"><?PHP echo $cloacaInmueble; ?></strong></span></p>
              <p><span class="d-inline-block text-black mb-0 caption-text">Pavimento: <strong class="d-block"><?PHP echo $pavimentoInmueble; ?></strong></span></p>
              <p><span class="d-inline-block text-black mb-0 caption-text">Mejoras: <strong class="d-block"><?PHP echo $mejorasInmueble; ?></strong></span></p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">

         <div class="row">
            <div class="col-12">
              <div class="site-section-title mb-5">
                <h3><?PHP echo $tituloDestacado; ?></h3>
              </div>
            </div>
          </div>
        
          <div class="row mb-5">
            <?PHP echo $destacado; ?>
          </div>       
      </div>

      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="mb-5">
                <h3 class="footer-heading mb-4">Acerca de Enlace Inmobiliario</h3>
                <p>Este portal nace con la necesidad imperiosa de ordenar y ejecutar trabajos coordinados entre Profesionales Corredores Inmobiliarios debidamente Matriculados en la Provincia de San Juan.</p>
              </div>

              
              
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="row mb-5">
                <div class="col-md-12">
                  <h3 class="footer-heading mb-4">Navegación</h3>
                </div>
                <div class="col-md-6 col-lg-6">
                  <ul class="list-unstyled">
                  <li><a href="index.php">Inicio</a></li>
                    <li><a href="inmuebles.php">Inmuebles</a></li>
                    <li><a href="servicios.html">Servicios</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="gestion/">Gestión</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-6">
                  <ul class="list-unstyled">
                    <!-- <li><a href="servicios.html">Servicios</a></li>
                    <li><a href="contact.html">Contacto</a></li> -->
                    <li><a href="#">Política de privacidad</a></li>
                    <li><a href="terminos.html">Términos y Condiciones</a></li>
                  </ul>
                </div>
              </div>


            </div>

            <!-- <div class="col-lg-4 mb-5 mb-lg-0">
              <h3 class="footer-heading mb-4">Seguinos</h3>

                  <div>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                  </div>

              

            </div> -->
            
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Enlace Inmobiliario 2022
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
            
          </div>
        </div>
      </footer>  
   </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>