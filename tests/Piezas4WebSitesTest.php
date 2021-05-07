<?php

use PHPUnit\Framework\TestCase;
use App\Piezas\Piezas4WebSites;

class Piezas4WebSitesTest extends TestCase {

    public function testInstancia(): void
    {

        $this->assertEquals( "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\"/>" , 
        Piezas4WebSites::materialize()[0] );

        $this->assertEquals( "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\" type=\"text/javascript\"></script>" , 
        Piezas4WebSites::materialize()[1] );

        $this->assertEquals(
            "<div class=\"row\"><div class=\"col s12 m6\"><div class=\"card blue-grey darken-1\"><div class=\"card-content white-text\" id=\"changeMyContent\"><!-- put something here --></div><div class=\"card-action\" id=\"changeMyActionContent\"><!-- put something here --></div></div></div></div>",
            Piezas4WebSites::materializeBasicCardContainer ()
        );

    }

}