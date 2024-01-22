<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <h1>Something went horribly wrong</h1>
    <h3>You are not supposed to see this</h3>
    <a href="/Homepage/index">Go back</a>

</body>

<?php $this->components('footer'); ?>