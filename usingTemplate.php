<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once './Templates/head.php';
require_once './Templates/body.php';

bloque([
    doc(),
    html([
       $head,
       $body
    ],"es")
]);