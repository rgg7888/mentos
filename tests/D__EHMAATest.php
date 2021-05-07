<?php

# COLOR CODE
//? keyword
//* class
//^ method
#the variable $objetoD__EHMAA is an object

use PHPUnit\Framework\TestCase; //phpUnit class

use App\D__EHMAA\D__EHMAA; //my class

# my class //? extends(hereda de) 
#phpUnit class
class D__EHMAATest extends TestCase

//& bloque de codigo (code Block)
{

    //~ method (function) inside a class
    public function testInstancia(): void
    {

        //TODO objeto de la Instanciacion de la clase D__EHMAA
        //TODO INSTANCE
        $objetoD__EHMAA = D__EHMAA::instancia();

        //! confirmation of $objetoD__EHMAA , $objetoD__EHMAA is a D__EHMAA class
        $this->assertInstanceOf(D__EHMAA::class, $objetoD__EHMAA );

        //utilizando el metodo ok() de la clase D__EHMAA desde el objeto $objetoD__EHMAA
        //& this confirm that the ok() method return the string "OK !"
        $this->assertEquals('OK',$objetoD__EHMAA->ok());

        $this->assertEquals(' id="myId"',$objetoD__EHMAA->atributos(['id' => 'myId']));

        $this->assertEquals('<main></main>',$objetoD__EHMAA->etiquetas(['tipo' => 'normal','etiqueta' => 'main']));

        $this->assertEquals('<main>content</main>',$objetoD__EHMAA->etiquetas([
            'tipo' => 'normal',
            'etiqueta' => 'main',
            'contenido' => 'content'
        ]));

        $this->assertEquals('<html lang="es">content</html>',$objetoD__EHMAA->etiquetas([
            'tipo' => 'normal',
            'etiqueta' => 'html',
            'attr' => $objetoD__EHMAA->atributos([
                'lang' => 'es'
            ]),
            'contenido' => 'content'
        ]));

        $this->assertEquals('<img/>',$objetoD__EHMAA->etiquetas(['tipo' => 'auto','etiqueta' => 'img']));   

        $this->assertEquals('<!DOCTYPE html/>',$objetoD__EHMAA->etiquetas(['tipo' => 'auto','etiqueta' => '!DOCTYPE html'])); 
        
        $this->assertEquals('<img class="foto" src="foto.png" alt="foto"/>',$objetoD__EHMAA->etiquetas([
            'tipo' => 'auto',
            'etiqueta' => 'img',
            'attr' => $objetoD__EHMAA->atributos([
                'class' => 'foto',
                'src' => 'foto.png',
                'alt' => 'foto'
            ])
        ]));

        $this->assertEquals('<script src="./path/file.js"></script>',$objetoD__EHMAA->etiquetas([
            'tipo' => 'normal',
            'etiqueta' => 'script',
            'attr' => $objetoD__EHMAA->atributos([
                'src' => './path/file.js'
            ])
        ]));

    }

}