<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title>Home screen</title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <div id="imgContainer">
        <img id="background-img" src="img/Restaurant1.jpg">
    </div>
    <div class="Boxcontainer">
        <h3 class="Boxtitle">Menu</h3>
        <a href="/menu">Menu</a>
    </div>
    <div class="Boxcontainer">
        <h3 class="Boxtitle">Reservering</h3>
    </div>
</body>

</html>