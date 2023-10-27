<!DOCTYPE html>
<html lang="en">

<head>
    <?= HEADLINKS; ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?= NAVBAR; ?>
    <h1><?= $data['title'] ?></h1>
    <form action="/user/login" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name='email' id="email" placeholder="Enter email" value="<?= $data['email']; ?>">
            <span class="invalid-feedback"><?= $data['email_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name='password' id="password" placeholder="Password" value="<?= $data['password']; ?>">
            <span class="invalid-feedback"><?= $data['password_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</body>

</html>