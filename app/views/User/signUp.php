<!DOCTYPE html>
<html lang="en">

<head>
    <?= HEADLINKS; ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?= NAVBAR; ?>
    <h1><?= $data['title'] ?></h1>
    <form action="/user/signup" method="post">
        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" name='name' id="name" placeholder="John Doo" value="<?= $data['email']; ?>">
            <span class="invalid-feedback"><?= $data['email_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name='email' id="email" placeholder="John@example.com" value="<?= $data['email']; ?>">
            <span class="invalid-feedback"><?= $data['email_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
        </div>
        <div class="form-group">
            <label for="phone_nr">Phone number</label>
            <input type="phone" name='phone_nr' id="phone_nr" placeholder="06 - 12345678" value="<?= $data['phone_nr']; ?>">
            <span class="invalid-feedback"><?= $data['password_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name='password' id="password" placeholder="Password" value="<?= $data['password']; ?>">
            <span class="invalid-feedback"><?= $data['password_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
        </div>
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
</body>

</html>