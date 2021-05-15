<?php

use App\Union\Mecanismo\Mecanismo;

/**
 * recibiendo datos
 */

require_once './Templates/recibirDatos.php';

$bodyV2 = body("wrapper grey lighten-4",[
    header_nav ("Pizza Template", "http://localhost:8002/", "Add a Pizza", "http://localhost:8001/"),
    form_template_01(
        "Add a Pizza","Your Email:",
        "Pizza Title:",
        "Ingredients (comma separated):",
        "add.php",
        "post",
        $errors,
        $values
    ),
    footer_template_01("center grey-text","Copyright 2021 IG: @ramiroseh"),
    addMaterialize()[1]
]);