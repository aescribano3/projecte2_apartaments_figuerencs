<?php

function ctrlDoRegister($request, $response, $container){
    
    $response->redirect("location: /index.php?r=content");

    return $response;
}