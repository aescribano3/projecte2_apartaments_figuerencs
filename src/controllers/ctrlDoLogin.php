<?php

function ctrlDoLogin($request, $response, $container){

    //Guarden les dades del formulari a variables
    $email = $request->get(INPUT_POST, "user-mail");
    $pass = $request->get(INPUT_POST, "user-pass");
    $userModel = $container->users();

    //Encripten la contrasenya
    $pass = hash('md5', $pass, false);

    //Comproven que les dades siguin correctes
    $userModel = $userModel->login($email, $pass);

    if($userModel) {

        //Si les dades son correctes, guarden les dades de l'usuari a la sessió
        $response->setSession("user", $userModel);
        $response->setSession("logged", true);
        $response->setSession("rol", $userModel["rol"]);
        $response->redirect("location: /index.php");

    } else {
        $response->redirect("location: /index.php?r=login");
    }

    return $response;
}