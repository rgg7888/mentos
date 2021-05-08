<?php

use PHPUnit\Framework\TestCase;
use App\Union\Mecanismo\Mecanismo;

class MecanismoTest extends TestCase {

    public function test_empty_normal_tag_sin_constructor_paso_a_paso_primero() {

        #primeramente creo el objeto Mecanismo
        $mecanismo = new Mecanismo;
        #despues seteo el tag que quiero crear
        //en este caso iniciare creando un div
        $mecanismo->setTag('div');
        #primer test , comprobamos que se ha guardado la peticion
        $this->assertEquals('div',$mecanismo->getTag());
        /**
         * ya se a comprobado que efectivamente guardamos 
         * la peticion y podemos obtener la peticion
         * que hemos realizado sin problema.
         * 
         * ahora como su nombre lo dice este metodo tiene por 
         * objetivo crear una etiqueta vacia por lo tanto 
         * lo unico que devemos hacer son dos cosas
         * hacer el pedido de la etiqueta y llamar
         * al metodo que se encarga de construirla
         * 
         * lo primero ya lo hicimos ahora 
         * llamemos al metodo necesario para obtener
         * nuestra etiqueta <div></div>
         * 
         * ah! antes de llamar al metodo etiqueta_atributos_contenido()
         * hay un paso previo lo cual me recuerda que no son dos pasos
         * sino tres y un paso muy importante antes de construir la etiqueta
         * es definir que tipo de etiqueta queremos construir
         * 
         * en este sistema las etiquetas se clasifican en dos tipos :
         * 1- normal , esto quiere decir que la etiqueta tiene
         * apertura y cierre
         * 2- auto , esto quiere decir que la etiqueta es selfclosing
         * 
         * por default se crea el tipo normal asi que no es necesario 
         * establecer el tipo
         */
        /*$mecanismo->setType('normal');
        $this->assertEquals('<div></div>',$mecanismo->etiqueta_atributos_contenido());*/
        /**
         * esta primer prueba imprime <divnull>null</div>
         * lo que significa que esta entrando a un condicional
         * que no deveria , vamos a hacer un debug para identificar 
         * a que if esta entrando.
         * 
         * primero comentare todos los returns y le colocare que retorne 
         * una frase identificadora en su lugar
         * 
         * entra al primer if como si el valor de los atributos y el contenido
         * fuese diferente de null, retornare el valor de los atributos para ver que obtengo
         * 
         * veamos si las comillas simples hacen la diferencia
         * bueno al parecer al validar si los valores del modelo son null
         * los toma como true y el if permite el paso a el condicional
         * el cual debe restringir el paso
         * 
         * entonces iremos ceando la etiqueta vacia paso a paso 
         * validando y comprobando lo que vayamos obteniendo 
         * con cada modificacion
         * 
         * entonces lo primero es validar que efectivamente 
         * el programa toma un camino u otro en base a el 
         * tipo que le establescamos, iniciamos con el default(normal)
         */
        $this->assertEquals('etiqueta normal',$mecanismo->etiqueta_atributos_contenido());
        #perfecto ahora con selfclosing , asignamos el tipo auto y ejecutamos 
        $mecanismo->setType('auto');
        $this->assertEquals('selfclosing tag',$mecanismo->etiqueta_atributos_contenido());
        #excelente , todo bien hasta aqui

    }

}