<?php

function ctrlUser($request, $response, $container){
    
    $userModel = $container->users();
    $userData = $userModel->getUserData($_SESSION["user"]["id"]);

    $resModel = $container->reserva();

    $resData = $resModel->getResData($_SESSION["user"]["id"]);
    $resObert = $resModel->getResDataObert($_SESSION["user"]["id"]);

    //Guarda les dades de l'usuari per a la seva edició
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

    $response->set("resData", $resData);
    $response->set("resObert", $resObert);

    //Guarda les dades de tots els usuaris per l'administrador
    $users = $userModel->getAll();
    $response->set("users", $users);
        
    $response->setTemplate("user.php");

    return $response;
}