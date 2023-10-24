<?php

function ctrlContent($request, $response, $container){
    
    $response->setTemplate("content.php");

    return $response;
}