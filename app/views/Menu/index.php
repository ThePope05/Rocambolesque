<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks') ?>
    <title>Document</title>
</head>

<body>
    <?php $this->components('navbar') ?>

    <div class="menu">
        <?php foreach ($data['menu'] as $menu) : ?>
            <div class="menu-column <?= $menu->Name ?>">
                <h2><?= $menu->Name ?></h2>
                <?php foreach ($menu->menuItems as $menuItem) : ?>
                    <div class="<?= $menuItem->Name ?>">
                        <h4><?= $menuItem->Name ?></h4>
                        <p><?= $menuItem->Description ?></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>

<?php $this->components('footer'); ?>