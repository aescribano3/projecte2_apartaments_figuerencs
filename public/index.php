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
include "../src/controllers/ctrlDoRegister.php";
include "../src/controllers/ctrlDoUpdate.php";
include "../src/controllers/ctrlDoUpload.php";
include "../src/controllers/GetAptDataController.php";

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
    ctrlRegister($request, $response, $container);
} elseif ($r == "aptdata") {
    $AptId = $_REQUEST["AptId"];
    AptData($request, $response, $container, $AptId);
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
} elseif ($r == "doupdate") {
    $response = isLogged($request, $response, $container,"ctrlDoUpdate");
} elseif ($r == "doupload") {
    $response = isLogged($request, $response, $container,"ctrlDoUpload");
} else {
    $response = isLogged($request, $response, $container,"ctrlError");
}

$response->response();