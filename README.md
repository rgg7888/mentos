# code_name : mentos/ProyectoEMA
<h1>Para Principiantes y personas que inician con pruebas unitarias en PHP especificamente</h1>
<pre>
#$origen : D__EHMAA
#D__EHMAA stands for { Definicion de Etiquetas Html <u>Mediante Arreglos</u> Asociativos }
<div>
<h2>How to Use this Template :</h2>
<a href ="https://www.youtube.com/watch?v=tb43kV0G0VU">Tutorial</a>
</div>
</pre>

<h2>Otros paquetes derivados de este template y su uso</h2>

<a href="https://github.com/rgg7888/ejemplo-alineamiento-cssExt">Html - Armor</a>

<h2>Objetivo del template</h2>

<pre>
utiliza este template para mejorar tu logica
deduzca como desarrollar los metodos y clases propuestos.

TDD -> desarrollo por pruebas.

Recordatorio para mi yo del futuro {
    cuando quieras crear una etiqueta link , recuerda que el primer atributo en el que debes pensar es en el 
    atributo rel="" ya que establescas el valor de este atributo ya podras pasar el arreglo con los atributos
    que tu quieras , esto es si esta utilizando la clase Main directamente.

    para la etiqueta meta , hay dos atributos activadores , charset y name , asi que si esta pensando 
    en escribir la etiqueta con la codificacion utf-8 es ese el valor que tendra que escribir
    de lo contrario escriba el valor del atributo name de la etiqueta meta que quiera crear
}


<h2>Pro Tip para mi yo del futuro</h2>
#descomente la linea 16 de index.php y la linea #1 del archivo index.js para visualizar el efecto
#por consola de la etiqueta &lt;mi-tag&gt;&lt;/mi-tag&gt;


# para ver los resultados que producen las piezas del archivo index.php 
#vaya a :
<a href="https://rgg7888.github.io/mentos-piezas-resultados.github.io/">Results HTML</a>
#O si quiere ver el source code html :
<a href="https://raw.githubusercontent.com/rgg7888/mentos-piezas-resultados.github.io/main/index.md">Click Aqui</a>
</pre>
<h2>Interfaces</h2>
<ul>
    <li>divInterface.php a esta interface la implementa la clase Div</li>
    <h3>Metodos/prototipos</h3>
    <ol>
        <li>public function aDiv ();</li>
        <li>public function bDiv (string $contenido);</li>
        <li>public function cDiv (string $clase);</li>
        <li>public function dDiv (string $id);</li>
        <li>public function eDiv (string $clase, string $contenido);</li>
        <li>public function fDiv (string $id, string $contenido);</li>
        <li>public function gDiv (string $clase, string $id, string $contenido);</li>
        <li>public function hDiv (array $contenido);</li>
        <li>public function iDiv (string $clase, array $contenido);</li>
        <li>public function jDiv (string $id, array $contenido);</li>
        <li>public function kDiv (string $clase, string $id, array $contenido);</li>
    </ol>
    <hr>
    <li>imgInterface.php a esta insterface la implementa la clase Img</li>
    <h3>Metodos/prototipos</h3>
    <ol>
        <li>public function aImg (string $clase, string $src, string $alt);</li>
        <li>public function bImg (string $clase, string $src, string $alt, string $width, string $height);</li>
    </ol>
</ul>
<h2>Orden de Codificacion :</h2>
<ol>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/D__EHMAATest.php">fileName : D__EHMAA.php</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/MainTest.php">fileName : Main.php "Los metodos de esta clase utilizan un objeto D__EHMAA"</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/DivTest.php">fileName : Div.php "Los metodos de esta clase utilizan un objeto Main y la funcion str_replace de php"</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/ImgTest.php">fileName : Img.php "los metodos de esta clase utilizan un objeto main para funcionar"</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/Piezas4WebSitesTest.php">fileName : Piezas4WebSites.php , este archivo en su interior funciona con un objeto Div para materializeBasicCardContainer() y un objeto D__EHMAA y otro Main para materialize()</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/MecanismoTest.php">fileName : Mecanismo.php "esta clase no depende de ninguna de las anteriores"</a></li>
</ol>
<hr>
<h2>helpers : files -> Primeras Funciones implementadas en la fecha : May 8 hora : 17:50 (5:50pm)</h2>
<ul>
    <li>elementos.php</li>
    <pre>
    if ( !function_exists( 'bloque' ) ) {
        function bloque (array $bloque) {
            echo implode("",$bloque);
        }
    }

    if ( !function_exists('doc')) {
        function doc() {
            $objetoD__EHMAA = App\D__EHMAA\D__EHMAA::instancia();
            return $objetoD__EHMAA->etiquetas(['tipo' => 'auto','etiqueta' => '!DOCTYPE html']);
        }
    }

    if ( !function_exists('html')) {
        function html($content,string $idioma){
            $contenido = is_array($content) ? implode("",$content) : $content;
            $objetoD__EHMAA = App\D__EHMAA\D__EHMAA::instancia();
            return $objetoD__EHMAA->etiquetas([
                'tipo' => 'normal',
                'etiqueta' => 'html',
                'attr' => $objetoD__EHMAA->atributos([
                    'lang' => $idioma
                ]),
                'contenido' => $contenido
            ]);
        }
    }

    if ( !function_exists( 'head' ) ) {
        function head ($content) {
            $contenido = is_array($content) ? implode("",$content) : $content;
            $objetoDiv = App\TAGS\div\Div::instancia();
            return str_ireplace("div","head",$objetoDiv->bDiv($contenido));
        }
    }

    if ( !function_exists( 'title' ) ) {
        function title (string $texto) {
            $objetoDiv = App\TAGS\div\Div::instancia();
            return str_ireplace("div","title",$objetoDiv->bDiv($texto));
        }
    }

    if ( !function_exists('body')) {
        function body(string $clase, $contenido, array $otrosAtributos = []) {
            $objetoMain = App\TAGS\main\Main::instancia();
            return $objetoMain->blockTypeTag('body',$clase,$contenido,$otrosAtributos);
        }
    }

    if ( !function_exists( 'h1' ) ) {
        function h1 (string $content) {
            $objetoDiv = App\TAGS\div\Div::instancia();
            return str_ireplace("div","h1",$objetoDiv->bDiv($content));
        }
    }

    if (!function_exists('script')) {
        function script(string $path , array $otherAtrr = []) {
            $objetoMain = App\TAGS\main\Main::instancia();
            return $objetoMain->emptyBlockTypeTag('script',$path,$otherAtrr);
        }
    }

    if (!function_exists('loadJs')) {
        function loadJs (array $paths) {
            $files = [];
            for($i = 0; $i < count($paths); $i++){
                array_push($files,file_get_contents($paths[$i]));
            }
            $objetoD__EHMAA = App\D__EHMAA\D__EHMAA::instancia();
            return $objetoD__EHMAA->etiquetas([
                'tipo' => 'normal',
                'etiqueta' => 'script',
                'attr' => $objetoD__EHMAA->atributos([
                    'type' => 'module'
                ]),
                'contenido' => implode("",$files)
            ]);
        }
    }

    if(!function_exists('registro__customElements')) {
        function registro__customElements() {
            return loadJs([
                "./P_EMA_JS/my-elements.js",
                "./index.js"
            ]);
        }
    }
   </pre>
  </ul>
  <hr>
  <ul>
    <li>piezas.php</li>
    <pre>
     if ( !function_exists('addMaterialize') ) {

        function addMaterialize () {

            return App\Piezas\Piezas4WebSites::materialize();

        }

     }

    #Materialize Basic Card Container
    if ( !function_exists('MBCC') ) {

        function MBCC () {

            return App\Piezas\Piezas4WebSites::materializeBasicCardContainer();

        }

    }
   </pre>
</ul>

<h2>HAPPY CODING =)</h2>
