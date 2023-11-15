<?php

class Navbar
{

    public function __construct()
    {
        $element = "
        <nav>
            <img id='navLogo' src='/img/Rocambolesque-logo-DEF.jpg'>
            <div id='right'>
                <a class='navButton' href='/User/loginPage'>Login</a>
                <a class='navButton' href='/User/signUpPage'>Register</a>
            </div>
        </nav>";

        define('NAVBAR', $element);
    }
}

new Navbar();
