<?PHP
    include('fn/list_opciones.php');
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
              
              
            
              <!-- <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>Enlace Inmobiliario<span class="text-danger">.</span></strong></a></h1> -->
            </div>
          
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index.html">Inicio</a>
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

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/fotos/costela/casa-1dorm-complejo-capital/1.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">Alquiler destacado</span>
              <h1 class="mb-2">Casa 1 dormitorio en Complejo Cerrado</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">$ 25.000</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Ver detalles</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/fotos/costela/casa-1.categoria-b.privado-rawson/1.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">En venta destacado</span>
              <h1 class="mb-2">Casa Primera Categoría Bº Privado</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Consultar</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Ver detalles</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div>

    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;">
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
                <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a>         
              </div> -->
              
              <div class="ml-auto d-flex align-items-center">
                <!-- <div>
                  <a href="#" class="view-list px-3 border-right active">Todos</a>
                  <a href="#" class="view-list px-3 border-right">Alquiler</a>
                  <a href="#" class="view-list px-3">Venta</a>
                </div> -->


                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control form-control-sm d-block rounded-0">
                    <option value="">Ordenar por</option>
                    <option value="">Precio Ascendente</option>
                    <option value="">Precio Descendente</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">
      
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <!-- <span class="offer-type bg-danger">Venta</span> -->
                  <span class="offer-type bg-success">Alquiler</span>
                </div>
                <img src="images/fotos/costela/casa-natania7-rawson/1.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Casa Bº Natania VII</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Barrio Natania VII, sobre Lateral de Ruta 40 - Rawson</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Consultar</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">3 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">-</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-info">Venta</span>
                  <!-- <span class="offer-type bg-success">Alquiler</span> -->
                </div>
                <img src="images/fotos/costela/terreno-375m2-slucia/1.png" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite active"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Terreno de 375 m2</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Calle Balcarce, 1000 m. al Norte de Roque Sáenz Peña - Santa Lucía</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$1.350.000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">- <sup></sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">-</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">375 m2</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Alquiler</span>
                  <span class="offer-type bg-danger">Alquilado</span>
                </div>
                <img src="images/fotos/costela/casa-pj-pueyrredon-capital/1.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Casa Pasaje Pueyrredón</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Pasaje sobre Calle Hipólito Irigoyen - Capital
              </span>
                <strong class="property-price text-primary mb-3 d-block text-success">Consultar</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">3 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">-</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <!-- <span class="offer-type bg-danger">Sale</span> -->
                  <span class="offer-type bg-success">Alquiler</span>
                  <span class="offer-type bg-danger">Alquilado</span>
                </div>
                <img src="images/fotos/costela/salon-mendoza-chimbas/1.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Salones Calle Mendoza</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Calle Mendoza, entre Rodríguez y Centenario - Chimbas</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Consultar</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">- <sup></sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">1</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">44 m2</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <!-- <span class="offer-type bg-danger">Sale</span> -->
                  <span class="offer-type bg-success">Alquiler</span>
                </div>
                <img src="images/fotos/costela/casa-1dorm-complejo-capital/1.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Casa 1 dormitorio en Complejo Privado</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Calle Uruguay, Villa América - Capital</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$25.000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">1 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">1</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">-</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <!-- <span class="offer-type bg-info">Lease</span> -->
                  <span class="offer-type bg-info">Venta</span>
                </div>
                <img src="images/fotos/costela/depto-3dorm-c.civico-capital/2.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Departamento 3 dormitorios a metros del Centro Cívico
                </a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Calle Rivadavia 631 Oeste - Capital</span>
                <strong class="property-price text-primary mb-3 d-block text-success">USD 62.000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">3 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">1</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">-</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-info">Venta</span>
                  <!-- <span class="offer-type bg-success">Rent</span> -->
                </div>
                <img src="images/fotos/costela/constructora-obra.gruesa-30-dias/1.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Casa obra gruesa en 30 días</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> En toda la Provincia de San Juan</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Consultar</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">- <sup></sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">-</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">-</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <!-- <span class="offer-type bg-danger">Sale</span> -->
                  <span class="offer-type bg-success">Alquiler</span>
                  <span class="offer-type bg-danger">Alquilado</span>
                </div>
                <img src="images/fotos/costela/casa-2dorm-chalet-cantoni-rivadavia/2.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Casa 2 dormitorios cerca de Chalet Cantoni</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Calle Vieytes, 100 m. al Norte de Av. Libertador — Rivadavia</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Consultar</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">1</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">-</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <!-- <span class="offer-type bg-info">Lease</span> -->
                  <span class="offer-type bg-success">Alquiler</span>
                </div>
                <img src="images/fotos/costela/terreno-ideal-estacionamiento-capital/1.jpeg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Terreno ideal estacionamiento</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Ignacio de la Roza 1518 Oeste - Capital</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$45.000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">- <sup></sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">1</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Superficie</span>
                    <span class="property-specs-number">600 m2</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
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

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>¿Por qué elegirnos?</h2>
            </div>
            <p>Somos un grupo de profesionales con alta competencia en el mercado inmobiliario. Poseemos destacada trayectoria y conocemos a fondo las necesidades de nuestros clientes. Estamos para lo que necesites.</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <!-- <i class="fa-solid fa-file-certificate"></i> -->
              <h1 style="font-size: 5em;"> <i class="fa-solid fa-user-graduate"></i></h1>
              <h2 class="service-heading">Capacidad</h2>
              <p>Todo nuestro trabajo está avalado por nuestra matrícula, la cual representa nuestro profesionalismo y dedicación. De esa manera el cliente y público en general podrá diferenciar fácilmente en el mercado al que está debidamente habilitado del que no.</p>
              <!-- <p><span class="read-more">Enterate aquí</span></p> -->
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <!-- <i class="fa-solid fa-award"></i> -->
              <h1 style="font-size: 5em;"> <i class="fa-solid fa-award"></i> </h1>
              <h2 class="service-heading">Excelencia</h2>
              <p>Enlace Inmobiliario controlará enfáticamente el desarrollo ético de la profesión a través de nuestro portal, de esta manera promulga, promueve y exige a sus miembros altos estándares de honor, respeto, ética profesional y transparencia.</p>
              <!-- <p><span class="read-more">Enterate aquí</span></p> -->
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <!-- <i class="fa-solid fa-handshake-simple"></i> -->
              <h1 style="font-size: 5em;"> <i class="fa-solid fa-handshake-simple"></i></h1>
              <h2 class="service-heading">Cooperación</h2>
              <p>El grupo de profesionales de Enlace Inmobiliario trabajará mancomunadamente de cara al cliente para logar que su inmueble sea tratado por una red de éticos profesionales que pondrán su esfuerzo en el servicio contratado, multiplicando sus posibilidades de éxito.</p>
              <!-- <p><span class="read-more">Enterate aquí</span></p> -->
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Blog</h2>
            </div>
            <p>Aquí encontrarás los mejores artículos sobre el mercado inmobiliario local. Enterate de lo último.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">9 de Octubre de 2022</span>
              <h2 class="h5 text-black mb-3"><a href="#">¿Es legal hacer ruido con la batería?, por Mario César de los Ríos</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">10 de Octubre de 2022</span>
              <h2 class="h5 text-black mb-3"><a href="#">Cómo destruir una casa, por Facundo Baleriano</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
            <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">11 de Octubre de 2022</span>
              <h2 class="h5 text-black mb-3"><a href="#">No permitas una fiesta de Heavy Metal en tu vecindario, por Andrés Garay</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>

        </div>

      </div>
    </div> -->

    
    <!-- <div class="site-section bg-light">
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
        </div> -->
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
                  <li><a href="index.html">Inicio</a></li>
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