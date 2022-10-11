<?PHP
if(!isset($_REQUEST['id'])) { header("Location: ./inmuebles.php"); } 
include('php/det_inmueble.php');
include('php/det_corredor.php');
if($inmueble['baja']==1) { header("Location: ./inmuebles.php"); } ?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Enlace Inmobiliario</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Green Zone 2.0 | Template by MLP Design" />
<meta name="author" content="MLP Design, webmasterneo" />
<link rel="stylesheet" href="css/planilla.css" type="text/css" />
</head>
<body>
<div class="no-imprimir">
	<a href="javascript:window.print()" class="btn-flotante">Guardar PDF</a>	
</div>
<div id="pseudo-wrap1"></div>
<div id="pseudo-wrap2"></div>

<div id="wrap">
	<!--HEADER -->
	<div id="header" align="center">
	<!--img src="/gestion/assets/images/usuarios/000000.png" height="100px" alt=""-->
	<img src="<?PHP echo $logoCorredor; ?>" height="100px" alt="">
	<p style="font-size: x-large"><?PHP echo $corredor; ?></p>
	<p>Matricula: <?PHP echo $matriculaCorredor; ?></p>
	<p><?PHP echo $telefonoCorredor; ?></p>
	<p><?PHP echo $emailCorredor; ?></p>
	<p><?PHP echo $domicilioCorredor; ?><p>
	</div>
	<!--HEADER -->
<nav>
<label for="show-menu" class="responsive">&#9776; Menu</label>
<input type="checkbox" id="show-menu" role="button">		
		
</nav>
	<!-- CONTENIDO -->
	<div id="content">
		<div class="post">
		<h1><a><?PHP echo $inmueble['tituloInmueble']; ?></a></h1>	
	</div>

	<div class="post">
		<h2><?PHP echo $inmueble['nombrePropiedad']; ?></h2>
		<h3><?PHP echo $inmueble['nombreOperacion']; ?></h3>
		<p><?PHP echo $inmueble['descripcionInmueble']; ?></p>

		<h3>Ubicación</h3>
		<ul>
			<li><?PHP echo $domicilio; ?></li>
			<li><?PHP echo $inmueble['nombreLocalidad']; ?></li>
		</ul>

		<h3>Sobre el inmueble:</h3>
		<ul>
			<li>Cantidad de habitaciones: <?PHP echo $habitacionesInmueble; ?></li>
			<li>Cantidad de baños: <?PHP echo $banosInmueble; ?></li>
			<li>Cantidad de plantas: <?PHP echo $plantasInmueble; ?></li>
			<li>Cloacas: <?PHP echo $cloacaInmueble; ?></li>
			<li>Gas: <?PHP echo $gasNaturalInmueble; ?></li>
			<li>Tipo de agua caliente: <?PHP echo $tipoAguaCalienteInmueble ?>;</li>
			<li>Agua corriente: <?PHP echo $aguaCorrienteInmueble; ?></li>
			<li>Pavimento: <?PHP echo $pavimentoInmueble; ?></li>
		</ul>

		<h3>Medidas</h3>
		<ul>
			<li>Frente del terreno: <?PHP echo $frenteTerrenoInmueble; ?></li>
			<li>Largo del terreno: <?PHP echo $largoTerrenoInmueble; ?></li>
			<li>Superficie Cubierta: <?PHP echo $superficieCubiertaInmueble; ?></li>
			<li>Superficie del terreno: <?PHP echo $superficieTotalInmueble; ?></li>
		</ul>
	</div>

	<h3>Otras características:</h3>
	<ul>
		<li>Antigüedad del inmueble: <?PHP echo $antiguedadInmueble ?></li>
		<li>Estado del inmueble: <?PHP echo $estadoInmueble; ?></li>
		<li>Mejoras: <?PHP echo $mejorasInmueble; ?></li>
		<li>Cochera: <?PHP echo $cocheraInmueble; ?></li>
		<li>Información adicional: <?PHP echo $inmueble['informacionAdicionalInmueble']; ?></li>
	</ul>

	<div class="post">
		<h2>Valor: <?PHP echo $valorInmueble; ?></h2>
	</div>
	<div class="post">
		 <?PHP echo $vistaImg; ?>
	</div>
	</div>
	<!--CONTENIDO -->
	<!--FOOTER -->
	<div id="footer">
	<div class="notice"> Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Enlace Inmobiliario 2022 </div>
	</div>
	<!--FOOTER -->
</div>

</body>
</html>