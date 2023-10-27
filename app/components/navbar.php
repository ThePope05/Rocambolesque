<?php

class Navbar
{

    public function __construct()
    {
        $element = "<nav>
        <img id='navLogo' src='/img/Rocambolesque-logo-DEF.jpg'>
        <div id='right'>
            <a class='navButton' href=''>Login</a>
            <a class='navButton' href=''>Register</a>
        </div>
        </nav>";

        define('NAVBAR', $element);
    }
}

new Navbar();
