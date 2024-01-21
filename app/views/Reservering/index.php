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
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a href="/reservering/createPage" class="btn btn-primary">Create Reservation</a>
                    <?php endif; ?>

                    <!-- show latest reservation -->
                    <h1>Latest Reservation</h1>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Amount of People</th>
                                <th scope='col'>Amount of Children</th>
                                <th scope='col'>Reservation Time</th>
                                <th scope='col'>Comment</th>
                                <th scope='col'>User ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (is_array($data['reservation']) && count($data['reservation']) > 0) : ?>
                                <?php foreach ($data['reservation'] as $reservation) : ?>
                                    <tr>
                                        <th scope='row'><?= $reservation->Id; ?></th>
                                        <td><?= $reservation->AmountOfPeople; ?></td>
                                        <td><?= $reservation->AmountOfChildren; ?></td>
                                        <td><?= $reservation->ReservationTime; ?></td>
                                        <td><?= $reservation->Comment; ?></td>
                                        <td><?= $reservation->user_id; ?></td>
                                        <td><a href='/reservering/delete/<?= $reservation->Id ?>' class='btn btn-danger'>Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <th scope='row'></th>
                                    <td>No</td>
                                    <td>reservations</td>
                                    <td>were found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>