<?PHP
/**
 * @version 1.0
 */

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["fullname"]) || !isset($_POST["email"]) || !isset($_POST["message"] ) ) {
    die ("Es necesario completar todos los datos del formulario"); ?>
    <script>
        alert("Es necesario completar todos los datos del formulario!");
        window.history.back();
    </script>
<?PHP    
}
$nombre = $_POST["fullname"];
$email = $_POST["email"];
//$asunto = $_POST["subject"];
$mensaje = $_POST["message"];

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "";  // Mi cuenta de correo
$smtpClave = "";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Formulario de contacto desde la web"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "{$mensajeHtml} <br /><br />Formulario de Contacto. <br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n Formulario de Contacto"; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$result = '';
$estadoEnvio = $mail->Send(); 
if($estadoEnvio){ ?>
<script>
    alert("¡Gracias! estaremos en contacto");
    location.replace("../index.php");
</script>

<?PHP
    $result .= '<div class="alert alert-success alert-dismissible" role="alert">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>';
    $result .= '¡Gracias! estaremos en contacto';
    $result .= '</div>';

    
} else {
    $result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
	$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>';
	$result .= 'Algo salió mal durante el envío de este mensaje. Por favor, inténtelo de nuevo más tarde';
	$result .= '</div>';
}

echo $result;
?>