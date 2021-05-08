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
        #$this->assertEquals('etiqueta normal',$mecanismo->etiqueta_atributos_contenido());
        #perfecto ahora con selfclosing , asignamos el tipo auto y ejecutamos 
        #$mecanismo->setType('auto');
        #$this->assertEquals('selfclosing tag',$mecanismo->etiqueta_atributos_contenido());
        #excelente , todo bien hasta aqui 
        /**
         * ahora comprobemos que los atributos al estar vacios se
         * omita su procesamiento, primero comprobemos que es null o 'null'
         */
        /**
         * devido a las modificaciones realizadas
         * para cumplir el primer objetivo 
         * estas dos sentencias siguientes
         * nos marcaran un error asi que las comentare
         */
        #$mecanismo->setType('normal');
        #$this->assertEquals('efectivamente es null o \'null\' o vacio',$mecanismo->etiqueta_atributos_contenido());
        #perfecto ahora hagamos lo contrario
        /**
         * las siguientes 3 sentencias tambien seran comentadas
         * ya que tambien pertenecen ala implementacion 
         * de unos commits atras (commit 89c96d63de771f494c34e3d2685f3382445c5a54)
         */
        #$mecanismo->setAtributos(['class' => 'test']);
        #$this->assertEquals('es correcto , los atributos tienen valores definidos',$mecanismo->etiqueta_atributos_contenido());
        #correcto ! , ahora veamos que nos devuelve el mecanismo sobre los atributos
        #$this->assertEquals(' class="test"',$mecanismo->getAtributos());
        #perfecto hasta este punto no hay falla
        /**
         * ahora retomemos lo anteriror y tratemos de construir 
         * el empty tag div
         */
        $mecanismo->setAtributos([]);
        #veamos que nos devuelve el mecanismo despues de enviar un array vacio
        $this->assertEquals('',$mecanismo->getAtributos());
        #perfecto nos devuelve vacio, entonces agregamos esta posibilidad a el if tambien
        /**
         * entonces ya tenemos el camino marcado para cuando no queremos 
         * atributos y tampoco contenido ahora construyamos el tag
         */
        $this->assertEquals('<div></div>',$mecanismo->etiqueta_atributos_contenido());
        /*muy bien , hasta aqui el mecanismo es capas de identificar
        cuando simplemente quiero imprimir la etiqueta de apertura y cierre
        para que esta prueba no fallara tuve que commentar las pruebas 
        anteriores , como te podras imaginar el codigo ya cambio.
        
        ahora continuemos con la construccion de <div>contenido</div>
        
        TIP RAPIDO : EN PHP EVITE UTILIZAR LOS OPERADORES || Y && EN UNA MISMA CONDICION
        PARA EVITAR CONFLICTOS, por ejemplo evite hacer esto :
        
        if ( condicion || condicion && condicion || condicion ) {}
        
        */
        $mecanismo->setContenido("Contenido");
        $this->assertEquals('<div>Contenido</div>',$mecanismo->etiqueta_atributos_contenido());
        $mecanismo->setContenido([
            "Contenido",
            " Contenido"
        ]);
        $this->assertEquals('<div>Contenido Contenido</div>',$mecanismo->etiqueta_atributos_contenido());
        $mecanismo->setContenido("");
        $mecanismo->setAtributos(['class' => 'test']);
        $this->assertEquals('<div class="test"></div>',$mecanismo->etiqueta_atributos_contenido());
        $mecanismo->setContenido("Content");
        $mecanismo->setAtributos(['class' => 'test','id' => 'myId']);
        $this->assertEquals('<div class="test" id="myId">Content</div>',$mecanismo->etiqueta_atributos_contenido());

        /**
         * ahora etiqueta base auto
         */
        $mecanismo->setType('auto');
        $mecanismo->setTag("img");
        $mecanismo->setAtributos([]);
        $this->assertEquals('<img/>',$mecanismo->etiqueta_atributos_contenido());

    }

}