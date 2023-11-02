<?php

function ctrlIndex($request, $response, $container){

    $aptModel = $container->apartaments();

    $apts = $aptModel->getAll();

    $response->set("apts", $apts);
    $response->setTemplate("index.php");

    return $response;
    
}