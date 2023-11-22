<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?php $this->components('navbar'); ?>

    <?php $action = (isset($_SESSION['user_id']) ? "/reservering" : "/user"); ?>
    <!-- If user logged in, add reservering, else ask user info first -->
    <h1>Reservering</h1>
    <form action="<?= $action ?>" method="post">

    </form>

</body>

</html>