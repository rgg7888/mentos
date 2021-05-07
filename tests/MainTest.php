<?php

use PHPUnit\Framework\TestCase;
use App\TAGS\main\Main;

class MainTest extends TestCase {

    public function testInstancia(): void
    {

        $objetoMain = Main::instancia();

        $this->assertInstanceOf(Main::class, $objetoMain );

        $this->assertEquals('OK',$objetoMain->ok());

        $this->assertEquals('<link rel="activando_link_por_su_atributo_rel" type="text/css"/>',
        $objetoMain->selfClosing('link','activando_link_por_su_atributo_rel',[
            'type' => 'text/css'
        ]));

        $this->assertEquals('<meta charset="UTF-8"/>',
        $objetoMain->selfClosing('meta','UTF-8'));

        $this->assertEquals('<meta name="keywords" content="esto,si,sirve"/>',
        $objetoMain->selfClosing('meta','keywords',[
            'content' => 'esto,si,sirve'
        ]));

        $this->assertEquals("<body class=\"cuerpo\">contenido</body>",
        $objetoMain->blockTypeTag('body','cuerpo',"contenido"));

        //& content type array
        $this->assertEquals('<main class="myClass" id="myId">content</main>',$objetoMain->kMain('myClass','myId',['content']));

        //& content type array
        $this->assertEquals('<main id="myId">content</main>',$objetoMain->jMain('myId',['content']));

        //& content type array
        $this->assertEquals('<main class="myClass">content</main>',$objetoMain->iMain('myClass',['content']));

        //& content type array
        $this->assertEquals('<main>content</main>',$objetoMain->hMain(['content']));

        //? content type string
        $this->assertEquals('<main class="myClass" id="myId">content</main>',$objetoMain->gMain('myClass','myId','content'));

        //? content type string
        $this->assertEquals('<main id="myId">content</main>',$objetoMain->fMain('myId','content'));

        //? content type string
        $this->assertEquals('<main class="myClass">content</main>',$objetoMain->eMain('myClass','content'));

        //^empty tag
        $this->assertEquals('<main id="myId"></main>',$objetoMain->dMain('myId'));

        //^empty tag
        $this->assertEquals('<main class="myClass"></main>',$objetoMain->cMain('myClass'));

        //? content type string
        $this->assertEquals('<main>content</main>',$objetoMain->bMain('content'));

        //^empty tag
        $this->assertEquals('<main></main>',$objetoMain->aMain());

    }

}