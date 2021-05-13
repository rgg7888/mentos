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

$body = body("wrapper grey lighten-4",[
    $nav->etiqueta_atributos_contenido(),
    footer_template_01("center grey-text","Copyright 2021 IG: @ramiroseh"),
    addMaterialize()[1]
]);