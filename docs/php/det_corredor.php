<?PHP
    include('conexion.php');
    $idc = intval(substr($_REQUEST['id'], 7, 6));
    $queryUsuario = "SELECT * FROM usuario WHERE idUsuario = '$idc'";
    $rtsUsuario = mysqli_query($conexion, $queryUsuario);
    $contacto=mysqli_fetch_assoc($rtsUsuario);
    $corredor=$contacto['nombreUsuario'];
    $matriculaCorredor=$contacto['matriculaUsuario'];
    $telefonoCorredor=$contacto['telefonoUsuario'];
    $emailCorredor=$contacto['emailUsuario'];
    $domicilioCorredor=$contacto['domicilioUsuario'];

    $logoCorredor="/gestion/assets/images/usuarios/" . $domicilioCorredor=$contacto['logoUsuario'];
    if(!file_exists($logoCorredor)){
        $logoCorredor="/gestion/assets/images/usuarios/00000000.png";
    } 
?>    