<?php

function ctrlDoUpdate($request, $response, $container){
    
    $id = $_SESSION["user"]["id"];
    $name = $request->get(INPUT_POST, "user-name-update");
    $lastname = $request->get(INPUT_POST, "user-lastname-update");
    $number = $request->get(INPUT_POST, "user-number-update");
    $email = $request->get(INPUT_POST, "user-email-update");
    $pass = $request->get(INPUT_POST, "user-pass-update");
    $cv = $request->get(INPUT_POST, "user-cv-update");

    $userModel = $container->users();
    
    $userModel = $userModel->update($id, $name, $lastname, $number, $email, $pass, $cv);

    if($userModel) {

        $response->setSession("user", $userModel);
        $response->setSession("logged", true);
        $response->redirect("location: /index.php");
    } else {
        $response->redirect("location: /index.php?r=user");
    }

    return $response;
}