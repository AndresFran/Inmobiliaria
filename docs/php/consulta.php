<?PHP session_start();
include('conexion.php'); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
$fecha = date("Y-m-d H:i:s");

	$query="INSERT INTO consulta (	
	`idInmueble`,
	`idUsuario`,
	`nombreConsulta`,
	`telefonoConsulta`,
	`mailConsulta`,
	`comentarioConsulta`,
	`baja`
	)VALUES(
	'$_REQUEST[idInmueble]',
	'$_REQUEST[idUsuario]',
	'$_REQUEST[nombreConsulta]',
	'$_REQUEST[telefonoConsulta]',
	'$_REQUEST[mailConsulta]',	
	'$_REQUEST[comentarioConsulta]',
	'0')";
	$result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion)>0){ ?>
		<script>
            alert("Su consulta ha sido enviada correctamente!");
        	location.replace("../detalle-inmueble.php?idInmueble=<?PHP echo $_REQUEST['idInmueble']; ?>");
        </script>		
<?PHP } else {	?>
		<script>
			alert("Ocurrio un Error al enviar su consulta\n intentelo nuevamente!!");
		</script>
		<input type ='button' value = 'Volver' onClick="location.replace('../consultas.php');" class="button"/>
<?PHP } ?>
