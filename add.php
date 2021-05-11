<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once './Templates/head.php';
require_once './Templates/bodyV2.php';

bloque([
    doc(),
    html([
       $head,
       $bodyV2
    ],"es")
]);