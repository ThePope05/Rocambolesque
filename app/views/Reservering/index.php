<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <div class="container">
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
                            <td><a href='/reservering/updatePage/<?= $reservation->Id ?>' class='btn btn-primary'>
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </a></td>
                            <td><a href='/reservering/delete/<?= $reservation->Id ?>' class='btn btn-danger'>
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span></a></td>
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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th><a href="/reservering/createPage"><span class="material-symbols-outlined">
                                add
                            </span></a></th>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>