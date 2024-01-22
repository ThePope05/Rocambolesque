<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <img src="/public/img/login.png" alt="" class="loginbackground">
    <div class="singup">
        <div class='singup-form'>
            <form action="/user/signup" method="post">
                <h1><?= $data['title'] ?></h1>
                <div class="singup-form-group">
                    <label for="name">Full name</label>
                    <input type="text" name='name' id="name" placeholder="John Doo" value="<?= $data['name']; ?>">
                    <span class="invalid-feedback"><?= $data['name_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
                </div>
                <div class="singup-form-group">
                    <label for="email">Email address</label>
                    <input type="email" name='email' id="email" placeholder="John@example.com" value="<?= $data['email']; ?>">
                    <span class="invalid-feedback"><?= $data['email_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
                </div>
                <div class="singup-form-group">
                    <label for="phone_nr">Phone number</label>
                    <input type="phone" name='phone_nr' id="phone_nr" placeholder="06 - 12345678" value="<?= $data['phone_nr']; ?>">
                    <span class="invalid-feedback"><?= $data['phone_nr_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
                </div>
                <div class="singup-form-group">
                    <label for="password">Password</label>
                    <input type="password" name='password' id="password" placeholder="Password" value="<?= $data['password']; ?>">
                    <span class="invalid-feedback"><?= $data['password_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</body>

<?php $this->components('footer'); ?>