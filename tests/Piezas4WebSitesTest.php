<?php

use PHPUnit\Framework\TestCase;
use App\Piezas\Piezas4WebSites;

class Piezas4WebSitesTest extends TestCase {

    public function testInstancia(): void
    {

        $this->assertEquals( "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\"/><script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>" , Piezas4WebSites::materialize() );

    }

}