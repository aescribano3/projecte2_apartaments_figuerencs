<?php

function AptData($request, $response, $container, $AptId) {

    $aptModel = $container->apartaments();
    $apts = $aptModel->getAptData($AptId);

    $idApartament = $apts["idApartament"];
    $diaMaximCancel = $apts["diaMaximCancel"];
    $latitud = $apts["latitud"];
    $longitud = $apts["longitud"];
    $habitacions = $apts["habitacions"];
    $titol = $apts["titol"];
    $descripcio = $apts["descripcio"];
    $preuTA = $apts["preuTA"];
    $preuTB = $apts["preuTB"];
    $metresCuadrats = $apts["metresCuadrats"];
    $adreca = $apts["adreca"];
    $codiPostal = $apts["codiPostal"];
    
    $response->set("idApartament", $idApartament);
    $response->set("diaMaximCancel", $diaMaximCancel);
    $response->set("latitud", $latitud);
    $response->set("longitud", $longitud);
    $response->set("habitacions", $habitacions);
    $response->set("titol", $titol);
    $response->set("descripcio", $descripcio);
    $response->set("preuTA", $preuTA);
    $response->set("preuTB", $preuTB);
    $response->set("metresCuadrats", $metresCuadrats);
    $response->set("adreca", $adreca);
    $response->set("codiPostal", $codiPostal);

    $serModel = $container->serveisapartaments();
    $ser = $serModel->getSerData($AptId);

    $wifi = false;
    $calefaccio = false;
    $piscina = false;
    $parking = false;

    foreach ($ser as $servei) {
        $idServei = $servei["idServei"];
        if($idServei == 1){
            $wifi = true;
        }
        if($idServei == 2){
            $calefaccio = true;
        }
        if($idServei == 3){
            $piscina = true;
        }
        if($idServei == 4){
            $parking = true;
        }
    }

    $response->set("wifi", $wifi);
    $response->set("calefaccio", $calefaccio);
    $response->set("piscina", $piscina);
    $response->set("parking", $parking);

    $imgModel = $container->imatge();
    $img = $imgModel->getImgData($AptId);

    $imageUrls = array();
    foreach ($img as $image) {
        $imageUrls[] = $image["aptUrl"];
    }

    $response->set("imageUrls", $imageUrls);

    $tempModel = $container->temporada();
    $temps = $tempModel->getTempData($AptId);

    $currentDate = date("Y-m-d");

    foreach ($temps as $tempr) {
        $fechaInicio = $tempr["dataInici"];
        $fechaFin = $tempr["dataFinal"];
        
        if ($currentDate >= $fechaInicio && $currentDate <= $fechaFin) {
            $temp = true;
        } else {
            $temp = false;
        }
    }
    $response->set("temp", $temp);

    $response->setTemplate('modalapt.php');

    return $response;
}