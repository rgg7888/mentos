<?php

use PHPUnit\Framework\TestCase;
use App\TAGS\div\Div;

class DivTest extends TestCase {

    public function testInstancia(): void
    {

        $objetoDiv = Div::instancia();

        $this->assertInstanceOf(Div::class, $objetoDiv );

        $this->assertEquals('OK !',$objetoDiv->ok());

        //& content type array
        $this->assertEquals('<div class="myClass" id="myId">content</div>',$objetoDiv->kDiv('myClass','myId',['content']));

        //& content type array
        $this->assertEquals('<div id="myId">content</div>',$objetoDiv->jDiv('myId',['content']));

        //& content type array
        $this->assertEquals('<div class="myClass">content</div>',$objetoDiv->iDiv('myClass',['content']));

        //& content type array
        $this->assertEquals('<div>content</div>',$objetoDiv->hDiv(['content']));

        //? content type string
        $this->assertEquals('<div class="myClass" id="myId">content</div>',$objetoDiv->gDiv('myClass','myId','content'));

        //? content type string
        $this->assertEquals('<div id="myId">content</div>',$objetoDiv->fDiv('myId','content'));

        //? content type string
        $this->assertEquals('<div class="myClass">content</div>',$objetoDiv->eDiv('myClass','content'));

        //^empty tag
        $this->assertEquals('<div id="myId"></div>',$objetoDiv->dDiv('myId'));

        //^empty tag
        $this->assertEquals('<div class="myClass"></div>',$objetoDiv->cDiv('myClass'));

        //? content type string
        $this->assertEquals('<div>content</div>',$objetoDiv->bDiv('content'));

        //^empty tag
        $this->assertEquals('<div></div>',$objetoDiv->aDiv());
    }
}