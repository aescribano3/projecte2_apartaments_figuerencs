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

$r = $_REQUEST["r"];

if ($r === "login") {
    ctrlLogin();
} elseif ($r === "content") {
    ctrlContent();
} elseif ($r == "register") {
    ctrlRegister();
} elseif ($r == "user") {
    ctrlUser();
} elseif ($r == "pujar") {
    ctrlPujar();
} elseif ($r == "") {
    ctrlIndex();
} else {
    ctrlError();
}