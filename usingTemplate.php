<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once './Templates/head.php';
#require_once './Templates/body.php';
require_once './Templates/bodyV2.php';

bloque([
    doc(),
    html([
       $head,
       #$footer
       $bodyV2
    ],"es")
]);