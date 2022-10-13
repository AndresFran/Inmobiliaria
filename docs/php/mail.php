
<?php
    error_reporting(0);
    $nombre = $_POST['fullname'];
    $mail = $_POST['email'];
    $asunto  = $_POST['subject'];

    $header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Mensaje enviado por " . $nombre . " \r\n";
    $mensaje .= "Su e-mail es: " . $mail . " \r\n";
    $mensaje .= "Mensaje " . $_POST['message'] . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());
    $para = "contacto@enlaceinmobiliario.com.ar";


    if(mail($para, $asunto, utf8_decode($mensaje), $header)){
		echo 'mensaje enviado correctamente';
	}

?>