<?PHP
    include('php/list_opciones.php');
    include('php/list_inmuebles.php');
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
    <!--HAY QUE HACER UN NUEVO ÍCONO REDONDO-->
    
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

    <div class="site-navbar mt-8">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
           <a href="">
              <img src="images/logo.png" width="200" height=""/>
           </a>  
            
            
          
            <!-- <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Enlace Inmobiliario<span class="text-danger">.</span></strong></a></h1> -->
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.php">Inicio</a>
                </li>
                <!-- <li><a href="buy.html">Ventas</a></li>
                <li><a href="rent.html">Alquileres</a></li>
                <li class="has-children">
                  <a href="properties.html">Propiedades</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">Casas</a></li>
                    <li><a href="#">Departamentos</a></li>
                    <li><a href="#">Cocheras</a></li>
                    <li><a href="#">Fincas</a></li>
                    <li><a href="#">Salones</a></li>
                    <li><a href="#">Lotes</a></li>
                    <li><a href="#">Des. Inmobiliario</a></li>
                  </ul>
                </li> -->
                <li><a href="servicios.html">Servicios</a></li> 
                <li><a href="contacto.html">Contacto</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">Alquiler destacado</span>
              <h1 class="mb-2">Saavedra 293 Norte</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">USD 100.000</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Ver detalles</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">En venta destacado</span>
              <h1 class="mb-2">sala Zexar</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">USD $50.000</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Ver detalles</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div> -->
<div style="background-color: rgba(51,50,50,255)
">
  <br> &nbsp; <br>
  <br> &nbsp; <br>
  
</div>

    <!-- <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/sanjuan-civico4.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Propiedades</h1>
          </div>
        </div>
      </div>
    </div> -->

    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;" action="lista-inmuebles.php">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Propiedad</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                    <option value="">Todas las propiedades</option>
                    <option value="">Propiedad</option>
                    <?PHP while($propiedad=mysqli_fetch_assoc($rtspropiedad)){?>
                    <option value="<?PHP echo $propiedad['idPropiedad']; ?>"> <?PHP echo $propiedad['nombrePropiedad'];?></option>
                    <?PHP } ?> 
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Operación</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                    <option value="">Todas las operaciones</option>
                    <?PHP while($operacion=mysqli_fetch_assoc($rtsoperacion)){?>
                    <option value="<?PHP echo $operacion['idOperacion']; ?>"> <?PHP echo $operacion['nombreOperacion'];?></option>
                    <?PHP } ?> 
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Localidad</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                    <option value="">Todas las localidades</option>
                    <option value="">Localidad</option>
                    <?PHP while($localidad=mysqli_fetch_assoc($rtslocalidad)){?>
                    <option value="<?PHP echo $localidad['idLocalidad']; ?>"> <?PHP echo $localidad['nombreLocalidad'];?></option>
                    <?PHP } ?> 
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">&nbsp;</label>
                <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Buscar">
              </div>
            </div>
          </form>
        </div>  

        <div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
              <!-- <div class="mr-auto">
                <a href="index.php" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a>         
              </div> -->
              
              <div class="ml-auto d-flex align-items-center">
                <!-- <div>
                  <a href="#" class="view-list px-3 border-right active">Todos</a>
                  <a href="#" class="view-list px-3 border-right">Alquiler</a>
                  <a href="#" class="view-list px-3">Venta</a>
                </div> -->


                <!--div-- class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control form-control-sm d-block rounded-0">
                    <option value="">Ordenar por</option>
                    <option value="">Precio Ascendente</option>
                    <option value="">Precio Descendente</option>
                  </select>
                </!--div-->
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">       
        
        <!-- Listado -->
        
        <?PHP echo $listado; ?>        

        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>  
        </div>
        
      </div>
    </div>

   
        </div>
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
                  <!-- <li><a href="buy.html">Ventas</a></li>
                  <li><a href="rent.html">Alquileres</a></li>
                  <li><a href="properties.html">Propiedades</a></li> -->
                  <li><a href="servicios.html">Servicios</a></li>
                  <li><a href="contacto.html">Contacto</a></li>
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

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Seguinos en las Redes</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>

            

          </div>
          
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

  <script src="js/main.js"></script>
    
  </body>
</html>