<?php
use App\Union\Mecanismo\Mecanismo;
$bodyV2 = body("wrapper grey lighten-4",[
    header_nav ("Pizza Template", "#", "Add a Pizza", "#"),
    form_template_01(
        "Add a Pizza","Your Email:",
        "Pizza Title:",
        "Ingredients (comma separated):"
    ),
    footer_template_01("center grey-text","Copyright 2021 IG: @ramiroseh"),
    addMaterialize()[1]
]);