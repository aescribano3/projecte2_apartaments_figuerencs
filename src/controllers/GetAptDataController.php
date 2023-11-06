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

    $response->setTemplate("index.php");

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

    $response->set("apts", $apts);

    return $response;
}