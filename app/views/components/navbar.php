<nav>
    <a class='navButton' href='/'><img id='navLogo' src='/img/Rocambolesque-logo-DEF.jpg'></a>
    <div id='right'>
        <a class='navButton' href='/Homepage/contact'>Contact</a>
        <?php if (isset($_SESSION['user_id'])) : ?>
            <?php if ($_SESSION['user_id'] == 1) : ?>
                <a class='navButton' href='/Menu/index/true'>Edit Menu</a>
            <?php endif; ?>
            <a class='navButton' href='/Reservering/'>Reservations</a>
            <a class='navButton' href='/User/logout'>Logout</a>
        <?php else : ?>
            <a class='navButton' href='/User/loginPage'>Login</a>
            <a class='navButton' href='/User/signUpPage'>Register</a>
        <?php endif; ?>
    </div>
</nav>