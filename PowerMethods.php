<?php

require_once __DIR__ . "/vendor/autoload.php";

$objeto = App\D__EHMAA\D__EHMAA::instancia();
/**
 * Palabras reservadas
 * tipo/normal/auto
 * etiqueta
 * attr
 * contenido
 */
echo $objeto->etiquetas([
    'tipo' => 'normal',
    'etiqueta' => 'div',
    'attr' => $objeto->atributos([
        'class' => 'myDiv',
        'id' => "myId"
    ]),
    'contenido' => implode("",[
        "soy",
        " un div"
    ])
]);
/** atributos activadores
 * id
 * class
 * rel
 * charset
 * name
 * src
 * lang
 * type
 */