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
include "../src/controllers/ctrlDoLogin.php";
include "../src/controllers/ctrlDoLogout.php";

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
} elseif ($r === "content") {
    $response = isLogged($request, $response, $container,"ctrlContent");
} elseif ($r == "register") {
    $response = isLogged($request, $response, $container,"ctrlRegister");
} elseif ($r == "user") {
    $response = isLogged($request, $response, $container,"ctrlUser");
} elseif ($r == "pujar") {
    $response = isLogged($request, $response, $container,"ctrlPujar");
} elseif ($r == "") {
    $response = isLogged($request, $response, $container, "ctrlIndex");
} elseif ($r == "dologin") {
    ctrlDoLogin($request, $response, $container);
} elseif ($r == "dologout") {
    ctrlDoLogout($request, $response, $container);
} elseif ($r == "doregister") {
    ctrlDoRegister($request, $response, $container);
} else {
    $response = isLogged($request, $response, $container,"ctrlError");
}

$response->response();