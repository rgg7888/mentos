<?php

use PHPUnit\Framework\TestCase;
use Main;

class MainTest extends TestCase {

    public function testInstancia(): void
    {

        $objetoMain = Main::instancia();

        $this->assertInstanceOf(Main::class, $objetoMain );

        $this->assertEquals('OK !',$objetoMain->ok());

        $this->assertEquals('<link class="es_raro_una_clase_en_una_etiqueta_link_esto_es_solo_un_ejemplo" id="puedo_crear_los_atributos_que_quiera"/>',
        $objetoMain->selfClosing('link','es_raro_una_clase_en_una_etiqueta_link_esto_es_solo_un_ejemplo',[
            'id' => 'puedo_crear_los_atributos_que_quiera'
        ]));

        $this->assertEquals('<main class="myClass" id="myId">content</main>',$objetoMain->kMain('myClass','myId',['content']));

        $this->assertEquals('<main id="myId">content</main>',$objetoMain->jMain('myId',['content']));

        $this->assertEquals('<main class="myClass">content</main>',$objetoMain->iMain('myClass',['content']));

    }

}