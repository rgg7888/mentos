<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once './jsFilesPaths.php';

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
            #"<mi-tag></mi-tag>",
            addMaterialize()[1],
            registro__customElements($jsFilesPaths)
        ])
    ],"es")
]);