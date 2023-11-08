<?php

class Navbar
{

    public function __construct()
    {
        $element = "
        <nav>
            <img id='navLogo' src='/img/Rocambolesque-logo-DEF.jpg'>
            <div id='right'>" .
            (isset($_SESSION['user_id']) ? "
            <a class='navButton' href='/'>Dashboard</a>" : "
            <a class='navButton' href='/User/loginPage'>Login</a>") .
            (isset($_SESSION['user_id']) ? "
            <a class='navButton' href='/User/logout'>Logout</a>" : "
                <a class='navButton' href='/User/signUpPage'>Register</a>") . "
            </div>
        </nav>";

        define('NAVBAR', $element);
    }
}

new Navbar();
