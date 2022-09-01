<?PHP
    include('conexion.php');
    $queryimagenes = "SELECT * FROM imagen WHERE idInmueble = '$_REQUEST[idInmueble]' AND baja != '1' ORDER BY idImagen ASC";
    $rtsimagenes = mysqli_query($conexion, $queryimagenes);
    $inmuebles=mysqli_fetch_assoc($rtsinmuebles);

    $queryimagen="SELECT * FROM imagen WHERE idInmueble = '$inmuebles[idInmueble]' AND baja != '1' ORDER BY idImagen DESC LIMIT 1";
		$rtsimagen = mysqli_query($conexion, $queryimagen);
		$img=mysqli_fetch_assoc($rtsimagen);
		$idimg=$img['idImagen'];
        $tpimg=$img['tipoImagen'];
		$nomimg="../gestion/assets/images/inmuebles/" . str_pad($idimg, 8, "0", STR_PAD_LEFT) . "." . $tpimg;
        
        if (!file_exists($nomimg)) { $nomimg="../gestion/assets/images/inmuebles/00000000.png"; }
        if($inmuebles['habitacionesInmueble']>0){$habitacionesInmueble=$inmuebles['habitacionesInmueble'] . "<sup>+</sup>";}else{$habitacionesInmueble="-";};
        if($inmuebles['banosInmueble']>0){$banosInmueble=$inmuebles['banosInmueble'];}else{$banosInmueble="&nbsp;-&nbsp;";};
        if($inmuebles['superficieCubiertaInmueble']>0){$superficieCubiertaInmueble=$inmuebles['superficieCubiertaInmueble'];}else{$superficieCubiertaInmueble="-";};
        if($inmuebles['valorInmueble']>0){$valorInmueble=$inmuebles['monedaInmueble'] . "</b>&nbsp;". $inmuebles['valorInmueble'];}else{$valorInmueble="Consultar";};

    $queryimagenes = "SELECT * FROM imagen WHERE idInmueble = '$_REQUEST[idInmueble]' AND baja != '1' ORDER BY idImagen ASC";
    $rtsimagenes = mysqli_query($conexion, $queryimagenes);

    $listadoImg = "<div class='slide-one-item home-slider owl-carousel'>";
    while($imagenes=mysqli_fetch_assoc($rtsimagenes)){
        $imagen = "../gestion/assets/images/inmuebles/" . str_pad($imagenes['idImagen'], 8, "0", STR_PAD_LEFT) . "." . $imagenes['tipoImagen'];
        $listadoImg. = "<div><img src='" . $imagen . "' alt='Image' class='img-fluid'></div>";
        $listadoImg. = "</div>";
    }
    $listadoImg. = "</div>";

?>