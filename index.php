<?php

require_once __DIR__ . "/vendor/autoload.php";

$objetoDiv = Div::instancia();

echo $objetoDiv->ok();

echo $objetoDiv->aDiv();

echo $objetoDiv->bDiv("content");