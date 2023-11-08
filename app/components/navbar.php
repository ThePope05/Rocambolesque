<?php

class Navbar
{

    public function __construct()
    {
        //Problem refresh page 2 times before navbar is updated according to session id

        $element = "
        <nav>
            <a class='navButton' href='/'><img id='navLogo' src='/img/Rocambolesque-logo-DEF.jpg'></a>
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
