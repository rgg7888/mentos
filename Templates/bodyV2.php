<?php
use App\Union\Mecanismo\Mecanismo;
$bodyV2 = body("wrapper grey lighten-4",[
    header_nav ("Pizza Template", "#", "Add a Pizza", "#"),
    footer_template_01("center grey-text","Copyright 2021 @ramiroseh"),
    addMaterialize()[1]
]);