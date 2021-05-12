<?php

$head = head([
    title("Templates"),
    addMaterialize()[0],
    style(addCss([
        ".brand" => [
            "background: #cbb09c !important;"
        ],
        ".brand-text" => [
            "color: #cbb09c !important;"
        ],
        "form" => [
            "max-width: 460px;",
            "margin: 20px auto;",
            "padding: 20px;"
        ]
    ]),[
        'type' => 'text/css'
    ])
]);