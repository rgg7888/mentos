<?php

use PHPUnit\Framework\TestCase;
use D__EHMAA;

class D__EHMAATest extends TestCase
{
    public function testInstancia(): void
    {
        
        $objetoD__EHMAA = D__EHMAA::instancia();

        $this->assertInstanceOf(D__EHMAA::class, $objetoD__EHMAA );

        $this->assertEquals('OK !',$objetoD__EHMAA->ok());

    }
}