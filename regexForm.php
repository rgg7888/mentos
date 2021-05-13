<?php

require_once __DIR__ . "/vendor/autoload.php";

bloque([
    doc(),
    html([
       head([
           title("RegEx Form Example")
       ]),
       body("wrapper",[
           "hello world."
       ])
    ],"es")
]);