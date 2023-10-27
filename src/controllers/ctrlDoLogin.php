<?php

function ctrlDoLogin($request, $response, $container){

    $email = $request->get(INPUT_POST, "user-mail");
    $pass = $request->get(INPUT_POST, "user-pass");
    $userModel = $container->users();

    $userModel = $userModel->login($email, $pass);

    if($userModel) {

        $response->setSession("user", $userModel);
        $response->setSession("logged", true);
        $response->redirect("location: /index.php");

    } else {
        $response->redirect("location: /index.php?r=login");
    }

    return $response;
}