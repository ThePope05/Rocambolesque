<nav>
    <a class='navButton' href='/'><img id='navLogo' src='/img/Rocambolesque-logo-DEF.jpg'></a>
    <div id='right'>
        <?php echo (isset($_SESSION['user_id']) ? "
        <a class='navButton' href='/Homepage/contact'>Contact</a>
        <a class='navButton' href='/Reservering/'>Dashboard</a>
        <a class='navButton' href='/User/logout'>Logout</a>"
            : "
        <a class='navButton' href='/Homepage/contact'>Contact</a>
        <a class='navButton' href='/User/loginPage'>Login</a>
        <a class='navButton' href='/User/signUpPage'>Register</a>")
        ?>
    </div>
</nav>