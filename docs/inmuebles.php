<?PHP
    include('php/list_opciones.php');
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
    <script src="https://kit.fontawesome.com/32d0249864.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/docs/fontawesome-web/css/all.css">
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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/banner-header-inmuebles.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Inmuebles</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -178px;" action="lista-inmuebles.php" method="POST" >
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Propiedad</label>
                <div class="select-wrap">                  
                  <select name="propiedad" id="propiedad" class="form-control d-block rounded-0">
                    <option value="">&nabla;&nbsp;Todas las propiedades</option>
                      <?PHP while($propiedad=mysqli_fetch_assoc($rtspropiedad)){?>
                    <option value="<?PHP echo $propiedad['idPropiedad']; ?>"> <?PHP echo $propiedad['nombrePropiedad'];?></option>
                    <?PHP } ?> 
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Operación</label>
                <div class="select-wrap">                  
                  <select name="operacion" id="operacion" class="form-control d-block rounded-0">
                    <option value="">&nabla;&nbsp;Todas las operaciones</option>
                    <?PHP while($operacion=mysqli_fetch_assoc($rtsoperacion)){?>
                    <option value="<?PHP echo $operacion['idOperacion']; ?>"> <?PHP echo $operacion['nombreOperacion'];?></option>
                    <?PHP } ?> 
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Localidad</label>
                <div class="select-wrap">                  
                  <select name="localidad" id="localidad" class="form-control d-block rounded-0">
                    <option value="">&nabla;&nbsp;Todas las localidades</option>
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
        
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>¿Buscas un inmueble?</h2>
            </div>
            <p>Podés filtrar tu búsqueda para que sea más facil buscar el lugar de tus sueños.</p>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="service text-center" style="color: #364e68";>
              <!-- <i class="fa-solid fa-file-certificate"></i> -->
              <h1 style="font-size: 5em;"> <i class="fa-sharp fa-solid fa-house-circle-check"></i></h1>
              <h2 class="service-heading">Tipo de Propiedad</h2>
              <p>Casas, departamentos, lotes, fincas, desarrollos inmobiliarios, etc, todo a tu elección.</p>
              <!-- <p><span class="read-more">Enterate aquí</span></p> -->
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="service text-center" style="color: #364e68";>
              <!-- <i class="fa-solid fa-award"></i> -->
              <h1 style="font-size: 5em;"> <i class="fa-sharp fa-solid fa-file-signature"></i> </h1>
              <h2 class="service-heading">Tipo de Operación</h2>
              <p>Cientos de personas que buscan vender o alquilar sus propiedades. ¿Qué buscas vos?</p>
              <!-- <p><span class="read-more">Enterate aquí</span></p> -->
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="service text-center" style="color: #364e68";>
              <!-- <i class="fa-solid fa-handshake-simple"></i> -->
              <h1 style="font-size: 5em;"> <i class="fa-solid fa-map-location-dot"></i></h1>
              <h2 class="service-heading">Localidades</h2>
              <p>Esta búsqueda filtra por Departamentos de San Juan. Elegí dónde querés vivir.</p>
              <!-- <p><span class="read-more">Enterate aquí</span></p> -->
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <!--div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7">
            <div class="site-section-title text-center">
              <h2>Nuestros Agentes</h2>
              <p>Este gran grupo de trabajo se esforzará en que cumplas tus sueños. Conocelos y preguntale lo que desees conocer.</p>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
              <div class="team-member">

                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded mb-4">

                <div class="text">

                  <h2 class="mb-2 font-weight-light text-black h4">Esteban Costela</h2>
                  <span class="d-block mb-3 text-white-opacity-05">Martillero y Corredor Inmobiliario<br>Matrícula Nº 166</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate, vitae minus obcaecati provident beatae!</p>
                  <p>
                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                    <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                    <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                  </p>
                </div>

              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
              <div class="team-member">

                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-4">

                <div class="text">

                  <h2 class="mb-2 font-weight-light text-black h4">Javier Blanco</h2>
                  <span class="d-block mb-3 text-white-opacity-05">Corredor Inmobiliario<br>Matrícula Nº 137</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p>
                  <p>
                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                    <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                    <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                  </p>
                </div>

              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
              <div class="team-member">

                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded mb-4">

                <div class="text">

                  <h2 class="mb-2 font-weight-light text-black h4">Pablo Domínguez</h2>
                  <span class="d-block mb-3 text-white-opacity-05">Corredor Inmobiliario<br>Matrícula Nº 122</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo iusto, inventore, iure dolorum officiis modi repellat nobis, praesentium perspiciatis, explicabo. Atque cupiditate, voluptates pariatur odit officia libero veniam quo.</p>
                  <p>
                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                    <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                    <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                  </p>
                </div>

              </div>
            </div>
          </div> 
      </div>
    </!--div-->    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Acerca de Enlace Inmobiliario</h3>
              <p align="justify">Este portal nace con la necesidad imperiosa de ordenar y ejecutar trabajos coordinados entre un grupo de Profesionales Corredores Inmobiliarios debidamente Matriculados en la Provincia de San Juan.</p>
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
                  <li><a href="servicios.html">Servicios</a></li>
                  <li><a href="contacto.html">Contacto</a></li>
                  <li><a href="gestion/">Gestión</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Política de privacidad</a></li>
                  <li><a href="terminos.html">Términos y Condiciones</a></li>
                </ul>
              </div>
            </div>

          </div>
                      
          <!--div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Seguinos en las Redes</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
          </div-->
          
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