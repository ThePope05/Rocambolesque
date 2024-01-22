<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <nav class="navbar"><?php $this->components('navbar'); ?></nav>
    <img src="/public/img/login.png" alt="" class="loginbackground">
    <div class="login">
        <div class="login-form">
            <form action="/user/login" method="post">
                <h1><?= $data['title'] ?></h1>
                <div class="login-form-group">
                    <input type="email" name='email' id="email" placeholder="Email" value="<?= $data['email']; ?>">
                    <span class="invalid-feedback"><?= $data['email_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->


                    <input type="password" name='password' id="password" placeholder="Password" value="<?= $data['password']; ?>">
                    <span class="invalid-feedback"><?= $data['password_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
                    <button type="submit" class="btn">Login</button>
                    <a href="/User/signUpPage">Geen deelnemer? Registeren</a>
                </div>
            </form>
        </div>
    </div>
</body>

<?php $this->components('footer'); ?>