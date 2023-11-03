<?php

function AptData($request, $response, $container, $AptId) {

    die(var_dump($AptId));

    $aptModel = $container->apartaments();
    $apts = $aptModel->getAptData($AptId);

    $response->set("apts", $apts);
    $response->setTemplate("index.php");

    return $response;
}
