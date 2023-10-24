<?php

function ctrlUser($request, $response, $container){
    
    $response->setTemplate("user.php");

    return $response;
}