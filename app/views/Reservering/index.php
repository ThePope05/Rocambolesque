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
                        <form action="/reservering/create" method="post">
                             <br> 
                             <br>
                             <br>
                             <label for="amount_of_people">Amount of People:</label>
                            <input type="number" name="amount_of_people" id="amount_of_people">

                            <label for="amount_of_children">Amount of Children:</label>
                            <input type="number" name="amount_of_children" id="amount_of_children">

                            <label for="reservation_time">Reservation Time:</label>
                             <!-- date and time picker -->
                            <input type="datetime-local" name="reservation_time" id="reservation_time">

                            <div id='calendar'></div>
                            

                            <label for="comment">Comment:</label>
                            <textarea name="comment" id="comment"></textarea>


                            <button type="submit" class="btn btn-primary">Create</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>