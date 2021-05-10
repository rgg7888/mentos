<?php
use App\Union\Mecanismo\Mecanismo;
$footerV2 = body("wrapper grey lighten-4",[
    nav(
        div([
            a("Pizza Template",[
                'href' => '#',
                'class' => 'brand-logo brand-text'
            ]),
            ul(li(a("Add a Pizza",[
                'href' => '#',
                'class' => 'btn brand z-depth-0'
            ])),[
                'id' => 'nav-mobile',
                'class' => 'right hide-on-small-and-down'
            ])
        ],[
            'class' => 'container'
        ])
    ,[
        'class' => 'white z-depth-0'
    ]),
    addMaterialize()[1]
]);