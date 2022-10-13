<?PHP   
    include('conexion.php');
    //Filtros   
    $propiedad = "";
    $operacion = "";
    $localidad = "";
    $limit = "";
    if (isset($_REQUEST['propiedad'])){ if(!empty($_REQUEST['propiedad'])){ $propiedad = " and idPropiedad = '". $_REQUEST['propiedad'] . "'";}}
    if (isset($_REQUEST['operacion'])){ if(!empty($_REQUEST['operacion'])){ $operacion = " and idOperacion = '". $_REQUEST['operacion'] . "'";}}
    if (isset($_REQUEST['localidad'])){ if(!empty($_REQUEST['localidad'])){ $localidad = " and idLocalidad = '". $_REQUEST['localidad'] . "'";}}
    $filtro = $propiedad . $operacion . $localidad;
   // echo "Propiedad: " . $propiedad . "<br>";
    //echo "Operacion: " . $operacion . "<br>";
    //echo "Localidad: " . $localidad . "<br>";   
    //echo $filtro;
    if(empty($filtro)){ $limit = "LIMIT 9"; }
    $queryinmuebles = "SELECT * FROM vista_inmuebles WHERE baja != '1' $filtro ORDER BY fecha DESC $limit";

    $rtsinmuebles = mysqli_query($conexion, $queryinmuebles);

    $listado = "<div class='row mb-5'>";
    
    while($inmuebles=mysqli_fetch_assoc($rtsinmuebles)){

        $queryimagen="SELECT * FROM imagen WHERE idInmueble = '$inmuebles[idInmueble]' AND baja != '1' ORDER BY idImagen DESC LIMIT 1";
		$rtsimagen = mysqli_query($conexion, $queryimagen);
		$img=mysqli_fetch_assoc($rtsimagen);
		$idimg=$img['idImagen'];
        $tpimg=$img['tipoImagen'];
		$nomimg="gestion/assets/images/inmuebles/" . str_pad($idimg, 8, "0", STR_PAD_LEFT) . "." . $tpimg;
        
        if (!file_exists($nomimg)) { $nomimg="gestion/assets/images/inmuebles/00000000.png"; }
        if($inmuebles['habitacionesInmueble']>0){$habitacionesInmueble=$inmuebles['habitacionesInmueble'] . "<sup>+</sup>";}else{$habitacionesInmueble="-";};
        if($inmuebles['banosInmueble']>0){$banosInmueble=$inmuebles['banosInmueble'];}else{$banosInmueble="&nbsp;-&nbsp;";};
        if($inmuebles['superficieCubiertaInmueble']>0){$superficieCubiertaInmueble=$inmuebles['superficieCubiertaInmueble'];}else{$superficieCubiertaInmueble="-";};
        if($inmuebles['valorInmueble']>0){$valorInmueble=$inmuebles['monedaInmueble'] . "</b>&nbsp;". $inmuebles['valorInmueble'];}else{$valorInmueble="Consultar";};
        $domicilio = "";
        if(!empty($inmuebles['domicilioNumeroInmueble'])){$domicilio .= " " . $inmuebles['domicilioNumeroInmueble'];}
        if(!empty($inmuebles['domicilioOrientacionInmueble'])){$domicilio .= " " . $inmuebles['domicilioOrientacionInmueble'];}
        if(!empty($inmuebles['nombreLocalidad'])){$domicilio .= "<br>&nbsp;<b>" . $inmuebles['nombreLocalidad'] . "</b>";}

        $listado .= "<div class='col-md-6 col-lg-4 mb-4'>";
            $listado .= "<div class='property-entry h-100'>";
                $listado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=". $inmuebles['idOperacion'] . "&propiedad=". $inmuebles['idPropiedad'] . "' class='property-thumbnail'>";
                    $listado .= "<div class='offer-type-wrap'>";
                    $listado .= "<span class='offer-type bg-success'>" . $inmuebles['nombrePropiedad'] . "</span>";
                    $listado .= "<span class='offer-type bg-secondary'>" . $inmuebles['nombreOperacion'] . "</span>";
                    $listado .= "</div>";
                    $listado .= "<img src='" . $nomimg ."' alt='" . $idimg . "' class='img-fluid-list'>";
                $listado .= "</a>";
                $listado .= "<div class='p-4 property-body'>";
                    $listado .= "<h2 class='property-title'><a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=". $inmuebles['idOperacion'] . "&propiedad=". $inmuebles['idPropiedad'] . "'>" .  $inmuebles['tituloInmueble'] . "</a></h2>";
                    $listado .= "<span class='property-location d-block mb-3'><span class='property-icon icon-room'></span>" . $inmuebles['domicilioCalleInmueble'] . $domicilio . "</span>";
                    $listado .= "<strong class='property-price text-primary mb-3 d-block text-success'>" . $valorInmueble . "</strong>";
                    $listado .= "<ul class='property-specs-wrap mb-3 mb-lg-0'>";
                        $listado .= "<li>";
                            $listado .= "<span class=property-specs'>Habitaciones</span>";                            
                            $listado .= "<span class='property-specs-number'><br>" . $habitacionesInmueble . " </span>";
                        $listado .= "</li>";
                        $listado .= "<li>";
                            $listado .= "<span class='property-specs'>Baños</span>";
                            $listado .= "<span class='property-specs-number'>" . $banosInmueble . "</span>";
                        $listado .= "</li>";
                        $listado .= "<li>";
                            $listado .= "<span class='property-specs'>Superficie</span>";
                            $listado .= "<span class='property-specs-number'>" . $superficieCubiertaInmueble . "</span>";
                        $listado .= "</li>";
                    $listado .= "</ul>";
                $listado .= "</div>";
            $listado .= "</div>";
        $listado .= "</div>";
    }
    $listado .= "</div>";
?>
