<?php

/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

$config = [
    "db" => [
        "user" => "root",
        "pass" => "",
        "db" => "apartaments",
        "host" => "localhost"
    ],
];

include "../src/models/Db.php";
include "../src/models/Users.php";
include "../src/models/Apartment.php";
include "../src/models/Serveis.php";
include "../src/models/ServeisApartaments.php";
include "../src/models/Images.php";
include "../src/models/Temporada.php";