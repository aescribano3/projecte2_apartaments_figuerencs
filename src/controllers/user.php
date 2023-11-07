<?php

function ctrlUser($request, $response, $container){
    
    $userModel = $container->users();
    $userData = $userModel->getUserData($_SESSION["user"]["id"]);

    $nom = $userData["nom"];
    $cognom = $userData["cognom"];
    $telefon = $userData["telefon"];
    $correu = $userData["email"];
    $pass = $userData["pass"];
    $cv = $userData["cv"];
    $rol = $userData["rol"];

    $response->set("name", $nom);
    $response->set("lastname", $cognom);
    $response->set("number", $telefon);
    $response->set("email", $correu);
    $response->set("pass", $pass);
    $response->set("cv", $cv);
    $response->set("rol", $rol);

    $users = $userModel->getAll();

    $response->set("users", $users);
        
    $response->setTemplate("user.php");

    return $response;
}