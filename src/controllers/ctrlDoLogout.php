<?php

function ctrlDoLogout($request, $response, $container){

    //Borra les dades de la sessió
    $response->setSession("user", []);
    $response->setSession("rol", []);
    $response->setSession("logged", false);
    $response->redirect("location: /index.php");
    
    return $response;
}