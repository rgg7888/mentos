<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once './Templates/header.php';
require_once './Templates/footer.php';

bloque([
    doc(),
    html([
       $header,
       $footer
    ],"es")
]);