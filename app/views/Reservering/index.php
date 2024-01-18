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
                        <?php
                        // if user is logged in
                        if (isset($_SESSION['user_id'])) {
                            if (is_array($data['reservation'])) {
                                if (count($data['reservation']) > 0) {
                                    echo "<tbody>";
                                    foreach ($data['reservation'] as $reservation) {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . $reservation->Id . "</th>";
                                        echo "<td>" . $reservation->AmountOfPeople . "</td>";
                                        echo "<td>" . $reservation->AmountOfChildren . "</td>";
                                        echo "<td>" . $reservation->ReservationTime . "</td>";
                                        echo "<td>" . $reservation->Comment . "</td>";
                                        echo "<td>" . $reservation->user_id . "</td>";
                                        echo "<td><a href='/reservering/delete/" . $reservation->Id . "' class='btn btn-danger'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";
                                    echo "</table>";
                                } else {
                                    echo "<h1>No Reservations</h1>";
                                }
                            } else {
                                if (isset($data['reservation'])) {
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $data['reservation']->Id . "</th>";
                                    echo "<td>" . $data['reservation']->AmountOfPeople . "</td>";
                                    echo "<td>" . $data['reservation']->AmountOfChildren . "</td>";
                                    echo "<td>" . $data['reservation']->ReservationTime . "</td>";
                                    echo "<td>" . $data['reservation']->Comment . "</td>";
                                    echo "<td>" . $data['reservation']->user_id . "</td>";
                                    echo "<td><a href='/reservering/delete/" . $data['reservation']->Id . "' class='btn btn-danger'>Delete</a></td>";
                                    echo "</tr>";
                                    echo "</tbody>";
                                    echo "</table>";
                                } else {
                                    echo "<h1>No Reservations</h1>";
                                }
                            }
                        } else {
                            // if user is not logged in
                            if (count($data['reservation']) > 0) {
                                echo "<tbody>";
                                foreach ($data['reservation'] as $reservation) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $reservation->user_id . "</th>";
                                    echo "<td>" . $reservation->AmountOfPeople . "</td>";
                                    echo "<td>" . $reservation->AmountOfChildren . "</td>";
                                    echo "<td>" . $reservation->ReservationTime . "</td>";
                                    echo "<td>" . $reservation->Comment . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                            } else {
                                echo "<h1>No Reservations</h1>";
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>