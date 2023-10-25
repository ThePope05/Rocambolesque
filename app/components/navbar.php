<?php

class Navbar
{

    public function __construct()
    {
        $element = "<h1>NAVBAR</h1>";

        define('NAVBAR', $element);
    }
}

new Navbar();
