<?php

require_once __DIR__ . "/vendor/autoload.php";

bloque([
    doc(),
    html([
        head([
            title("Piezas4WebSites"),
            addMaterialize()[0]
        ]),
        body("wrapper",[
            h1("Custom Elements"),
            #Materialize Basic Card Container
            MBCC(),
            addMaterialize()[1]
        ])
    ],"es")
]);