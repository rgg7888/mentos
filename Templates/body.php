<?php
use App\Union\Mecanismo\Mecanismo;
/**
 * creando etiquetas con la clase Mecanismo
 */
#forma indirecta :
    /**
     * esta forma la recomiendo para definir a 
     * los elementos hijo de alguna etiqueta
     * contenedora
     */
    $div = new Mecanismo;
    $div->setTag('div');
    $div->setAtributos(['class' => 'container']);
    #$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
        $a = new Mecanismo;
        $a->setTag('a');
        $a->setAtributos([
            'href' => '#',
            'class' => 'brand-logo brand-text'
        ]);
        $a->setContenido("Pizza Template");
    #$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
        #$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
            $li0 = new Mecanismo;
            $li0->setTag('li');
            #$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
                $addPizzaButton = new Mecanismo('normal','a',[
                    'href' => '#',
                    'class' => 'btn brand z-depth-0'
                ],"Add a Pizza");
            #$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
            $li0->setContenido($addPizzaButton->etiqueta_atributos_contenido());
            $arrayOfLis = [
                $li0->etiqueta_atributos_contenido()
            ];
        #$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
        $ul = new Mecanismo('normal','ul',[
            'id' => 'nav-mobile',
            'class' => 'right hide-on-small-and-down'
        ],$arrayOfLis);
    #$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    $div->setContenido([
        $a->etiqueta_atributos_contenido(),
        $ul->etiqueta_atributos_contenido()
    ]);
#forma directa :
    /**
     * la forma directa es necesario agregar todos los parametros de una.
     * 
     * Esta forma se recomienda utilizarla para las etiquetas 
     * que funcionaran con contenedores.
     * */
    $nav = new Mecanismo('normal','nav',['class'=>'white z-depth-0'],[
        $div->etiqueta_atributos_contenido()
    ]);

############################################

//data base code
require_once './Templates/conexionDB.php';

$lisTags = '';
foreach(explode(',',$pizzas[0]['ingredients']) as $ing){
    $lisTags .= li($ing);
}
$lista = ul($lisTags);

//iteracion de los resultado y output
$Divs = App\TAGS\div\Div::instancia();
$registros = [];
foreach($pizzas as $pizza) {
    array_push($registros,$Divs->eDiv("col s6 md3",
        $Divs->iDiv("card z-depth-0",[
            $Divs->iDiv("card-content center",[
                h6(htmlspecialchars($pizza['title'])),
                //code here
                $lista
            ]),
            $Divs->eDiv("card-action right-align",a("more info",[
                'class' => 'brand-text',
                'href' => '#'
            ]))
        ])
    ));
}

$body = body("wrapper grey lighten-4",[
    $nav->etiqueta_atributos_contenido(),
    h4("center grey-text","Pizzas!"),
    $Divs->eDiv("container",
    $Divs->eDiv("row",implode("",$registros))),
    footer_template_01("center grey-text","Copyright 2021 IG: @ramiroseh"),
    addMaterialize()[1]
]);