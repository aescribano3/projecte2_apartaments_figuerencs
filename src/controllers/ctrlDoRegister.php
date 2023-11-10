<?php

function ctrlDoRegister($request, $response, $container){

    //Guarden les dades del formulari
    $name = $request->get(INPUT_POST, "user-name");
    $lastname = $request->get(INPUT_POST, "user-lastname");
    $number = $request->get(INPUT_POST, "user-number");
    $email = $request->get(INPUT_POST, "user-email");
    $pass = $request->get(INPUT_POST, "user-pass");
    $confpass = $request->get(INPUT_POST, "user-confpass");
    $cv = $request->get(INPUT_POST, "user-cv");
    $rol = $request->get(INPUT_POST, "user-rol");

    $userModel = $container->users();

    //Cridem a la funció per registrar l'usuari
    $userModel = $userModel->register($name, $lastname, $number, $email, $pass, $confpass, $cv, $rol);

    if($userModel) {
        $response->redirect("location: /index.php");
    } else {
        $response->redirect("location: /index.php?r=register");
    }

    return $response;
}