<?php

function ctrlDoReserva($request, $response, $container){

    $aptId = $_SESSION['aptId']; // Recupera el ID del departamento desde la variable de sesión
    $idUsuari = $_SESSION["user"]["id"];

    $apt_pta = $request->get(INPUT_POST, "apt-pta");
    $apt_ptb = $request->get(INPUT_POST, "apt-ptb");

    
    
}
