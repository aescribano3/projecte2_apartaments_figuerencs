<?php

function ctrlPujar($request, $response, $container){

    $currentYear = date("Y");

    $response->set("currentYear", $currentYear);

    $response->setTemplate("pujarapartament.php");

    return $response;
}