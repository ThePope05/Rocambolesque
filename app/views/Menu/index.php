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
            <div class="menu-part <?= $menu->Name ?>">
                <h2><?= $menu->Name ?></h2>
                <?php foreach ($menu->menuItems as $menuItem) : ?>
                    <hr>
                    <div class="<?= $menuItem->Name ?>">
                        <h4><?= $menuItem->Name ?></h4>
                        <p><?= $menuItem->Description ?></p>
                        <?php if (isset($data['editMode']) && $data['editMode']) : ?>
                            <a href="/Menu/editPage/<?= $menuItem->Id ?>">
                                <span class="material-symbols-outlined">
                                    edit
                                </span></a>
                            <a href="/Menu/delete/<?= $menuItem->Id ?>">
                                <span class="material-symbols-outlined">
                                    delete
                                </span></a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                <?php if (isset($data['editMode']) && $data['editMode']) : ?>
                    <a href="/Menu/createPage/<?= $menu->Id ?>">
                        <span class="material-symbols-outlined">
                            add
                        </span></a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>

<?php $this->components('footer'); ?>