<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <h1><?= $data['title'] ?></h1>
<div class="login-form">
    <form action="/user/login" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name='email' id="email" placeholder="Enter email" value="<?= $data['email']; ?>">
            <span class="invalid-feedback"><?= $data['email_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->

            <label for="password">Password</label>
            <input type="password" name='password' id="password" placeholder="Password" value="<?= $data['password']; ?>">
            <span class="invalid-feedback"><?= $data['password_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
</body>

</html>