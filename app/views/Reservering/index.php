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
                        <?php 
                            // if user is logged in
                            if (isset($_SESSION['user_id'])) {
                                if (count($data['reservation']) > 0) {
                                    echo "<h1>Latest Reservation</h1>";
                                    echo "<table class='table'>";
                                    echo "<thead>";
                                    echo "<tr>";
                                    echo "<th scope='col'>#</th>";
                                    echo "<th scope='col'>Amount of People</th>";
                                    echo "<th scope='col'>Amount of Children</th>";
                                    echo "<th scope='col'>Reservation Time</th>";
                                    echo "<th scope='col'>Comment</th>";
                                    echo "<th scope='col'>User ID</th>";
                                    echo "<th scope='col'>Delete</th>";
                                    echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    foreach ($data['reservation'] as $reservation) {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . $reservation->id . "</th>";
                                        echo "<td>" . $reservation->AmountOfPeople . "</td>";
                                        echo "<td>" . $reservation->AmountOfChildren . "</td>";
                                        echo "<td>" . $reservation->ReservationTime . "</td>";
                                        echo "<td>" . $reservation->Comment . "</td>";
                                        echo "<td>" . $reservation->user_id . "</td>";
                                        echo "<td><a href='/reservering/delete/" . $reservation->user_id . "' class='btn btn-danger'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";
                                    echo "</table>";
                                } else {
                                    echo "<h1>No Reservations</h1>";
                                }
                            } else {
                                // if user is not logged in
                                if (count($data['reservation']) > 0) {
                                    echo "<h1>Latest Reservation</h1>";
                                    echo "<table class='table'>";
                                    echo "<thead>";
                                    echo "<tr>";
                                    echo "<th scope='col'>#</th>";
                                    echo "<th scope='col'>Amount of People</th>";
                                    echo "<th scope='col'>Amount of Children</th>";
                                    echo "<th scope='col'>Reservation Time</th>";
                                    echo "<th scope='col'>Comment</th>";
                                    echo "<th scope='col'>User ID</th>";
                                    echo "</tr>";
                                    echo "</thead>";
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