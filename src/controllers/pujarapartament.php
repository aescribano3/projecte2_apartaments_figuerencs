<?php

function ctrlPujar($request, $response, $container){
    
    $response->setTemplate("pujarapartament.php");

    return $response;
}