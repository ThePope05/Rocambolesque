<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="/reservering/update" method="post">
                        <br>
                        <br>
                        <br>
                        <input type="hidden" name="id" value="<?= $data['reservation']->Id ?>">

                        <label for="amount_of_people">Amount of People:</label>
                        <input type="number" name="amount_of_people" id="amount_of_people" value="<?= $data['reservation']->AmountOfPeople ?>">

                        <label for="amount_of_children">Amount of Children:</label>
                        <input type="number" name="amount_of_children" id="amount_of_children" value="<?= $data['reservation']->AmountOfChildren ?>">

                        <label for="reservation_time">Reservation Time:</label>
                        <!-- date and time picker -->
                        <input type="datetime-local" name="reservation_time" id="reservation_time" value="<?= $data['reservation']->ReservationTime ?>">


                        <label for="comment">Comment:</label>
                        <textarea name="comment" id="comment"><?= $data['reservation']->Comment ?></textarea>


                        <button type="submit" class="btn btn-primary">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>