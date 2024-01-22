<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <img src="/public/img/login.png" alt="" class="background">
    <div class="content">
        <div class="container">
            <div class="reservering">
                <div class="reservering-form">
                    <form action="/reservering/create" method="post">
                        <h1><?= $data['title'] ?></h1>
                        <div class="reservering-form-group">
                            <div>
                                <div>
                                    <label for="amount_of_people">Amount of People:</label>
                                </div>
                                <input type="number" name="amount_of_people" id="amount_of_people">
                            </div>

                            <div>
                                <div>
                                    <label for="amount_of_children">Amount of Children:</label>
                                </div>
                                <input type="number" name="amount_of_children" id="amount_of_children">
                            </div>

                            <div>
                                <div>
                                    <label for="reservation_time">Tijdstip</label>
                                </div>
                                <input type="datetime-local" name="reservation_time" id="reservation_time">
                            </div>

                            <div>
                                <div>
                                    <label for="comment">Comment:</label>
                                </div>
                                <textarea name="comment" id="comment"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php $this->components('footer'); ?>