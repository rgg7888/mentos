<?php

use PHPUnit\Framework\TestCase;
use App\TAGS\img\Img;

class ImgTest extends TestCase {

    public function testInstancia(): void
    {

        $objetoImg = Img::instancia();

        $this->assertInstanceOf(Img::class, $objetoImg );

        $this->assertEquals('OK !',$objetoImg->ok());

        $this->assertEquals ('<img class="myImage" src="./path/image.png" alt="description of the image"/>', 
        $objetoImg->aImg('myImage','./path/image.png','description of the image'));

        $this->assertEquals ('<img class="myImage" src="./path/image.png" alt="description of the image" width="300" height="400"/>', 
        $objetoImg->bImg('myImage','./path/image.png','description of the image','300','400'));

    }

}