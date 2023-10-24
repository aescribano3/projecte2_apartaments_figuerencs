<?php

function ctrlIndex($request, $response, $container){

    $taskModel = $container->tasks();

    $user = $request->get("SESSION", "user");
    $tasks = $taskModel->getAll($user["id"]);
    $response->set("tasks", $tasks);
    $response->setTemplate("index.php");

    return $response;
    
}