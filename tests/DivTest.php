<?php

use PHPUnit\Framework\TestCase;
use App\Div;

class DivTest extends TestCase {

    public function testInstancia(): void
    {

        $objetoDiv = Div::instancia();

        $this->assertInstanceOf(Div::class, $objetoDiv );

        $this->assertEquals('OK !',$objetoDiv->ok());
    }
}