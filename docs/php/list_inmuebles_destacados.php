<?PHP   
    include('conexion.php');
    //Filtros   
    $propiedad = "";
    $operacion = "";
   
    if (isset($_REQUEST['propiedad'])){ if(!empty($_REQUEST['propiedad'])){ $propiedad = " and idPropiedad = '". $_REQUEST['propiedad'] . "'";}}
    if (isset($_REQUEST['operacion'])){ if(!empty($_REQUEST['operacion'])){ $operacion = " and idOperacion = '". $_REQUEST['operacion'] . "'";}}
   
    $filtro = $propiedad . $operacion;

    $queryinmueblesdest = "SELECT * FROM vista_inmuebles WHERE baja != '1' and idInmueble != '$_REQUEST[idInmueble]' $filtro ORDER BY fecha DESC LIMIT 3";

    $rtsinmueblesdest = mysqli_query($conexion, $queryinmueblesdest);

    //$destacado = "<div class='row mb-5'>";
    
    $destacado = "";
    $tituloDestacado = "";

    while($inmueblesdest=mysqli_fetch_assoc($rtsinmueblesdest)){

        $tituloDestacado = "Propiedades Relacionadas";

        $queryimagenDest="SELECT * FROM imagen WHERE idInmueble = '$inmueblesdest[idInmueble]' AND baja != '1' ORDER BY idImagen DESC LIMIT 1";
		$rtsimagenDest = mysqli_query($conexion, $queryimagenDest);
		$imgDest=mysqli_fetch_assoc($rtsimagenDest);
		$idimgDest=$imgDest['idImagen'];
        $tpimgDest=$imgDest['tipoImagen'];
		$nomimgDest="gestion/assets/images/inmuebles/" . str_pad($idimgDest, 8, "0", STR_PAD_LEFT) . "." . $tpimgDest;
        
        if (!file_exists($nomimgDest)) { $nomimgDest="gestion/assets/images/inmuebles/00000000.png"; }
        if($inmueblesdest['habitacionesInmueble']>0){$habitacionesInmuebleDest=$inmueblesdest['habitacionesInmueble'] . "<sup>+</sup>";}else{$habitacionesInmuebleDest="-";};
        if($inmueblesdest['banosInmueble']>0){$banosInmuebleDest=$inmueblesdest['banosInmueble'];}else{$banosInmuebleDest="&nbsp;-&nbsp;";};
        if($inmueblesdest['superficieCubiertaInmueble']>0){$superficieCubiertaInmuebleDest=$inmueblesdest['superficieCubiertaInmueble'];}else{$superficieCubiertaInmuebleDest="-";};
        if($inmueblesdest['valorInmueble']>0){$valorInmuebleDest=$inmueblesdest['monedaInmueble'] . "</b>&nbsp;". $inmueblesdest['valorInmueble'];}else{$valorInmuebleDest="Consultar";};
        $domicilio = "";
        if(!empty($inmueblesdest['domicilioNumeroInmueble'])){$domicilio .= " " . $inmueblesdest['domicilioNumeroInmueble'];}
        if(!empty($inmueblesdest['domicilioOrientacionInmueble'])){$domicilio .= " " . $inmueblesdest['domicilioOrientacionInmueble'];}
        if(!empty($inmueblesdest['nombreLocalidad'])){$domicilio .= "<br>&nbsp;<b>" . $inmueblesdest['nombreLocalidad'] . "</b>";}
        
        $destacado .= "<div class='col-md-6 col-lg-4 mb-4'>";
            $destacado .= "<div class='property-entry h-100'>";               
                $destacado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmueblesdest['idInmueble'] . "&operacion=". $inmueblesdest['idOperacion'] . "&propiedad=". $inmueblesdest['idPropiedad'] . "' class='property-thumbnail'>";
                    $destacado .= "<div class='offer-type-wrap'>";
                    $destacado .= "<span class='offer-type bg-success'>" . $inmueblesdest['nombrePropiedad'] . "</span>";
                    $destacado .= "<span class='offer-type bg-secondary'>" . $inmueblesdest['nombreOperacion'] . "</span>";
                    $destacado .= "</div>";
                    $destacado .= "<img src='" . $nomimgDest ."' alt='" . $idimgDest . "' class='img-fluid'>";
                $destacado .= "</a>";
                $destacado .= "<div class='p-4 property-body'>";
                    $destacado .= "<h2 class='property-title'><a href='detalle-inmueble.php?idInmueble=" . $inmueblesdest['idInmueble'] . "&pperacion=". $inmueblesdest['idOperacion'] . "&propiedad=". $inmueblesdest['idPropiedad'] . "'>" .  $inmueblesdest['tituloInmueble'] . "</a></h2>";
                    $destacado .= "<span class='property-location d-block mb-3'><span class='property-icon icon-room'></span>" . $inmueblesdest['domicilioCalleInmueble'] . $domicilio ."</span>";
                    $destacado .= "<strong class='property-price text-primary mb-3 d-block text-success'>" . $valorInmuebleDest . "</strong>";
                    $destacado .= "<ul class='property-specs-wrap mb-3 mb-lg-0'>";
                        $destacado .= "<li>";
                            $destacado .= "<span class=property-specs'>Habitaciones</span>";                            
                            $destacado .= "<span class='property-specs-number'><br>" . $habitacionesInmuebleDest . " </span>";
                        $destacado .= "</li>";
                        $destacado .= "<li>";
                            $destacado .= "<span class='property-specs'>Baños</span>";
                            $destacado .= "<span class='property-specs-number'>" . $banosInmuebleDest . "</span>";
                        $destacado .= "</li>";
                        $destacado .= "<li>";
                            $destacado .= "<span class='property-specs'>Superficie</span>";
                            $destacado .= "<span class='property-specs-number'>" . $superficieCubiertaInmuebleDest . "</span>";
                        $destacado .= "</li>";
                    $destacado .= "</ul>";
                $destacado .= "</div>";
            $destacado .= "</div>";
        $destacado .= "</div>";
    }
    //$destacado .= "</div>";
?>
