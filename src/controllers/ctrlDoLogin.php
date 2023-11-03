<?php

function ctrlDoLogin($request, $response, $container){

    $email = $request->get(INPUT_POST, "user-mail");
    $pass = $request->get(INPUT_POST, "user-pass");
    $userModel = $container->users();

    $pass = hash('md5', $pass, false);

    $userModel = $userModel->login($email, $pass);

    if($userModel) {

        $response->setSession("user", $userModel);
        $response->setSession("logged", true);
        $response->setSession("rol", $userModel["rol"]);
        $response->redirect("location: /index.php");

    } else {
        $response->redirect("location: /index.php?r=login");
    }

    return $response;
}