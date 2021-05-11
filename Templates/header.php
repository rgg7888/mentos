<?php

$header = head([
    title("Templates"),
    addMaterialize()[0],
    style([
        ".brand{
            background: #cbb09c !important;
        }",
        ".brand-text{
            color: #cbb09c !important;
        }"
    ],[
        'type' => 'text/css'
    ])
]);