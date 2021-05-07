<?php

use PHPUnit\Framework\TestCase;
use App\TAGS\img\Img;

class ImgTest extends TestCase {

    public function testInstancia(): void
    {

        $objetoImg = Img::instancia();

        $this->assertInstanceOf(Img::class, $objetoImg );

        $this->assertEquals('OK !',$objetoImg->ok());

        #$this->assertEquals ('', $objetoImg->aImg('myImage','./path/image.png','description of the image'));

    }

}