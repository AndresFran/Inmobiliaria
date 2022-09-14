<?PHP
    include('conexion.php');
    $queryInmueble = "SELECT * FROM vista_inmuebles WHERE idInmueble = '$_REQUEST[idInmueble]' AND baja != '1'";
    $rtsInmueble = mysqli_query($conexion, $queryInmueble);
    $inmueble=mysqli_fetch_assoc($rtsInmueble);

    if($inmueble['habitacionesInmueble']>0){$habitacionesInmueble=$inmueble['habitacionesInmueble'] . "<sup>+</sup>";}else{$habitacionesInmueble="-";}
    if($inmueble['banosInmueble']>0){$banosInmueble=$inmueble['banosInmueble'];}else{$banosInmueble="&nbsp;-&nbsp;";}
    if($inmueble['superficieCubiertaInmueble']>0){$superficieCubiertaInmueble=$inmueble['superficieCubiertaInmueble'];}else{$superficieCubiertaInmueble="-";}
    if($inmueble['valorInmueble']>0){$valorInmueble=$inmueble['monedaInmueble'] . "</b>&nbsp;". $inmueble['valorInmueble'];}else{$valorInmueble="Consultar";}

    $queryimagen="SELECT * FROM imagen WHERE idInmueble = '$_REQUEST[idInmueble]' AND baja != '1' ORDER BY idImagen ASC LIMIT 1";
    $rtsimagen = mysqli_query($conexion, $queryimagen);
    $img=mysqli_fetch_assoc($rtsimagen);
    $idimg=$img['idImagen'];
    $tpimg=$img['tipoImagen'];
    $nomimg="../gestion/assets/images/inmuebles/" . str_pad($idimg, 8, "0", STR_PAD_LEFT) . "." . $tpimg;
  
    $listadoImg = "<div class='slide-one-item home-slider owl-carousel'>";       
        if(!file_exists($nomimg)){
            $nomimg="/gestion/assets/images/inmuebles/00000000.png";
            $listadoImg .= "<div><img src='" . $nomimg . "' alt='Image' class='img-fluid'></div>";
        } else {
            $queryimagenes = "SELECT * FROM imagen WHERE idInmueble = '$_REQUEST[idInmueble]' AND baja != '1' ORDER BY idImagen ASC";
            $rtsimagenes = mysqli_query($conexion, $queryimagenes);
            while($imagenes=mysqli_fetch_assoc($rtsimagenes)){
            $imagen = "/gestion/assets/images/inmuebles/" . str_pad($imagenes['idImagen'], 8, "0", STR_PAD_LEFT) . "." . $imagenes['tipoImagen'];
            $listadoImg .= "<div><img src='" . $imagen . "' alt='Image' class='img-fluid'></div>";
            }
        }    
    $listadoImg .= "</div>";
?>