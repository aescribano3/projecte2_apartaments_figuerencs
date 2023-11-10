<?php

function ctrlPujar($request, $response, $container){

    //Guarda l'any de la data actual
    $currentYear = date("Y");

    $response->set("currentYear", $currentYear);

    $response->setTemplate("pujarapartament.php");

    return $response;
}