<?PHP
    include('conexion.php');
    if (isset($_REQUEST['id'])){$idInmueble = intval(substr($_REQUEST['id'], 0, 6));}else{$idInmueble=$_REQUEST['idInmueble'];}    
    
    $queryInmueble = "SELECT * FROM vista_inmuebles WHERE idInmueble = '$idInmueble'";
    $rtsInmueble = mysqli_query($conexion, $queryInmueble);
    $inmueble=mysqli_fetch_assoc($rtsInmueble);
 
    $domicilio = $inmueble['domicilioCalleInmueble'];
    $ubicacionInmueble = $inmueble['ubicacionInmueble'];
    if(!empty($inmueble['domicilioNumeroInmueble'])){$domicilio .= " " . $inmueble['domicilioNumeroInmueble'];}
    if(!empty($inmueble['domicilioOrientacionInmueble'])){$domicilio .= " " . $inmueble['domicilioOrientacionInmueble'];}

    if(!empty($inmueble['cocheraInmueble'])){$cocheraInmueble=$inmueble['cocheraInmueble'];}else{$cocheraInmueble="&nbsp;-&nbsp;";}
    if(!empty($inmueble['tipoCocheraInmueble'])){$cocheraInmueble .="&nbsp;-&nbsp;" . $inmueble['tipoCocheraInmueble'];}
    if($inmueble['vehiculosCocheraInmueble']>0){$cocheraInmueble .="&nbsp;-&nbsp;Vehiculos: " . $inmueble['vehiculosCocheraInmueble'];}

    if($inmueble['plantasInmueble']>0){$plantasInmueble=$inmueble['plantasInmueble'];}else{$plantasInmueble="-";}
    if($inmueble['habitacionesInmueble']>0){$habitacionesInmueble=$inmueble['habitacionesInmueble'] . "<sup>+</sup>";}else{$habitacionesInmueble="-";}
    if($inmueble['antiguedadInmueble']>0){$antiguedadInmueble=$inmueble['antiguedadInmueble'];}else{$antiguedadInmueble="&nbsp;-&nbsp;";}
    if($inmueble['banosInmueble']>0){$banosInmueble=$inmueble['banosInmueble'];}else{$banosInmueble="&nbsp;-&nbsp;";}
    if(!empty($inmueble['cloacaInmueble'])){$cloacaInmueble = $inmueble['cloacaInmueble'];}else{$cloacaInmueble="&nbsp;-&nbsp;";}
    if(!empty($inmueble['gasNaturalInmueble'])){$gasNaturalInmueble=$inmueble['gasNaturalInmueble'];}else{$gasNaturalInmueble="&nbsp;-&nbsp;";}
    if(!empty($inmueble['pavimentoInmueble'])){$pavimentoInmueble=$inmueble['pavimentoInmueble'];}else{$pavimentoInmueble="&nbsp;-&nbsp;";}
    if(!empty($inmueble['tipoAguaCalienteInmueble'])){$tipoAguaCalienteInmueble=$inmueble['tipoAguaCalienteInmueble'];}else{$tipoAguaCalienteInmueble="&nbsp;-&nbsp;";}
    if(!empty($inmueble['aguaCorrienteInmueble'])){$aguaCorrienteInmueble=$inmueble['aguaCorrienteInmueble'];}else{$aguaCorrienteInmueble="&nbsp;-&nbsp;";}
    if(!empty($inmueble['estadoInmueble'])){$estadoInmueble=$inmueble['estadoInmueble'];}else{$estadoInmueble="&nbsp;-&nbsp;";}
    if(!empty($inmueble['mejorasInmueble'])){$mejorasInmueble=$inmueble['mejorasInmueble'];}else{$mejorasInmueble="&nbsp;-&nbsp;";}

    if($inmueble['frenteTerrenoInmueble']>0){$frenteTerrenoInmueble=$inmueble['frenteTerrenoInmueble']. "m2";}else{$frenteTerrenoInmueble="&nbsp;-&nbsp;";}
    if($inmueble['largoTerrenoInmueble']>0){$largoTerrenoInmueble=$inmueble['largoTerrenoInmueble']. "m2";}else{$largoTerrenoInmueble="&nbsp;-&nbsp;";}
    if($inmueble['superficieCubiertaInmueble']>0){$superficieCubiertaInmueble=$inmueble['superficieCubiertaInmueble']. "m2";}else{$superficieCubiertaInmueble="-";}
    if($inmueble['superficieTotalInmueble']>0){$superficieTotalInmueble=$inmueble['superficieTotalInmueble']. $inmueble['tipoSuperficieTotalInmueble'];}else{$superficieTotalInmueble="-";}
        
    if($inmueble['valorInmueble']>0){$valorInmueble=$inmueble['monedaInmueble'] . "</b>&nbsp;". $inmueble['valorInmueble'];}else{$valorInmueble="Consultar";}
    

    $queryimagen="SELECT * FROM imagen WHERE idInmueble = '$idInmueble' AND baja != '1' ORDER BY ordenImagen ASC LIMIT 1";
    $rtsimagen = mysqli_query($conexion, $queryimagen);
    $img=mysqli_fetch_assoc($rtsimagen);
    $idimg=$img['idImagen'];
    $tpimg=$img['tipoImagen'];
    $nomimg="gestion/assets/images/inmuebles/" . str_pad($idimg, 8, "0", STR_PAD_LEFT) . "." . $tpimg;
    $vistaImg = "";
    $listadoImg = "<div class='slide-one-item home-slider owl-carousel'>";           
        if(!file_exists($nomimg)){
            $nomimg="gestion/assets/images/inmuebles/00000000.png";
            $listadoImg .= "<div><img src='" . $nomimg . "' alt='Image' class='img-fluid'></div>";
        } else {
            $queryimagenes = "SELECT * FROM imagen WHERE idInmueble = '$idInmueble' AND baja != '1' ORDER BY ordenImagen ASC";
            $rtsimagenes = mysqli_query($conexion, $queryimagenes);
            while($imagenes=mysqli_fetch_assoc($rtsimagenes)){
            $imagen = "/gestion/assets/images/inmuebles/" . str_pad($imagenes['idImagen'], 8, "0", STR_PAD_LEFT) . "." . $imagenes['tipoImagen'];
            $listadoImg .= "<div><img src='" . $imagen . "' alt='Image' class='img-fluid'></div>";
            $vistaImg .= "<div><img src='" . $imagen . "' alt='Image' width='950px'></div>";
            }
        }    
    $listadoImg .= "</div>";

  //  $queryUsuario = "SELECT * FROM usuario WHERE idUsuario = '$inmueble[idUsuario]'";
  //  $rtsUsuario = mysqli_query($conexion, $queryUsuario);
  //  $contacto=mysqli_fetch_assoc($rtsUsuario);
  //  $corredor=$contacto['nombreUsuario'];
  //  $matriculaCorredor=$contacto['matriculaUsuario'];
  //  $telefonoCorredor=$contacto['telefonoUsuario'];
  //  $emailCorredor=$contacto['emailUsuario'];
  //  $domicilioCorredor=$contacto['domicilioUsuario'];
  //  $logoCorredor="/gestion/assets/images/usuarios/" . $domicilioCorredor=$contacto['logoUsuario'];
  //  if(!file_exists($nomimg)){
  //      $logoCorredor="/gestion/assets/images/usuarios/00000000.png";
  //  } 
?>