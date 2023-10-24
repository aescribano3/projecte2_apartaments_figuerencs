<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

include "../src/config.php";

include "../src/controllers/content.php";
include "../src/controllers/login.php";
include "../src/controllers/index.php";
include "../src/controllers/error.php";
include "../src/controllers/register.php";
include "../src/controllers/user.php";
include "../src/controllers/pujarapartament.php";

include "../src/middleware/isLogged.php";

include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = '';
if(isset($_REQUEST["r"])){
   $r = $_REQUEST["r"];
}

if ($r == "login") {
    ctrlLogin($request, $response, $container);
} elseif ($r == "add") {
    $response = isLogged($request, $response, $container, "ctrlAdd");
} elseif ($r == "delete") {
    $response = isLogged($request, $response, $container, "ctrlDelete");
} elseif ($r === "content") {
    $response = ctrlContent($request, $response, $container);
} elseif ($r == "register") {
    $response = ctrlRegister($request, $response, $container);
} elseif ($r == "user") {
    $response = ctrlUser($request, $response, $container);
} elseif ($r == "pujar") {
    $response = ctrlPujar($request, $response, $container);
} elseif ($r == "") {
    $response = isLogged($request, $response, $container, "ctrlIndex");
} elseif ($r == "dologin") {
    $response = ctrlDoLogin($request, $response, $container);
} elseif ($r == "dologout") {
    $response = ctrlDoLogout($request, $response, $container);
} else {
    ctrlError();
}

$response->response();