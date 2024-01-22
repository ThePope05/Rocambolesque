<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks') ?>
    <title>Document</title>
</head>

<body>
    <?php $this->components('navbar') ?>

    <div class="login">
        <div class="login-form">
            <form action="<?= (isset($data['menu'])) ? '/Menu/edit' : '/Menu/create' ?>" method="POST">
                <input type="hidden" name="id" value="<?= (isset($data['menu'])) ? $data['menu']->Id : '' ?>">
                <div class="login-form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?= (isset($data['menu'])) ? $data['menu']->Name : '' ?>" class="form-control" id="name" placeholder="Name">

                    <label for="description">Description</label>
                    <textarea name="description" value="<?= (isset($data['menu'])) ? $data['menu']->Description : '' ?>" class="form-control" id="description" rows="3"><?= (isset($data['menu'])) ? $data['menu']->Description : '' ?></textarea>

                    <label for="category">Category</label>
                    <select name="category" class="form-control" id="category">
                        <?php foreach ($data['categorys'] as $category) : ?>
                            <option value="<?= $category->Id ?>" <?=
                                                                    (isset($data['menu']) && $category->Id == $data['menu']->CategoryId) ? 'selected' : ''
                                                                    ?>><?= $category->Name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary"><?= (isset($data['menu'])) ? 'edit' : 'create' ?></button>
            </form>
        </div>
    </div>
</body>

<?php $this->components('footer'); ?>