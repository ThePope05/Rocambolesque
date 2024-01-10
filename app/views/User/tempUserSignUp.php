<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <img src="/public/img/login.png" alt="" class="loginbackground">
    <div class="login">
        <div class='login-form'>
            <form action="/user/signup" method="post">
                <h1><?= $data['title'] ?></h1>
                <div class="login-form-group">
                    <label for="name">Full name</label>
                    <input type="text" name='name' id="name" placeholder="John Doo" value="<?= $data['name']; ?>">
                    <span class="invalid-feedback"><?= $data['name_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
                </div>
                <div class="login-form-group">
                    <label for="phone_nr">Phone number</label>
                    <input type="phone" name='phone_nr' id="phone_nr" placeholder="06 - 12345678" value="<?= $data['phone_nr']; ?>">
                    <span class="invalid-feedback"><?= $data['phone_nr_err']; ?></span> <!-- <<<<This should be hidden until innerhtml is set -->
                </div>
                <div class="login-form-group">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>