<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once './Templates/head.php';
require_once './Templates/header.php';
require_once './Templates/db_config.php';

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM Pizza WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    print_r($pizza);
}

bloque([
    doc(),
    html([
       $head,
       body("wrapper grey lighten-4",[
           $header,
           h2("detalles pizzas!"),
           footer_template_01(
               "center grey-text",
               "Copyright 2021 IG: @ramiroseh"
            )
       ])
    ],"es")
]);