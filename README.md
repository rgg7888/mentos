# code_name : mentos
<pre>
#$origen : D__EHMAA
#D__EHMAA stands for { Definicion de Etiquetas Html Mediante Arreglos Asociativos }
</pre>
<pre>
utiliza este template para mejorar tu logica
dedusca como desarrollar los metodos y clases propuestos.

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
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/MainTest.php">fileName : Main.php</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/DivTest.php">fileName : Div.php "Los metodos de esta clase utilizan un objeto Main y la funcion str_replace de php"</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/ImgTest.php">fileName : Img.php "los metodos de esta clase utilizan un objeto main para funcionar"</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/Piezas4WebSitesTest.php">fileName : Piezas4WebSites.php , este archivo en su interior funciona con un objeto Div para materializeBasicCardContainer() y un objeto D__EHMAA y otro Main para materialize()</a></li>
    <li><a href="https://github.com/rgg7888/mentos/blob/main/tests/MecanismoTest.php">fileName : Mecanismo.php "esta clase no depende de ninguna de las anteriores"</a></li>
</ol>

<h2>HAPPY CODING =)</h2>
