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
        <p>bekijk ons menu <br> hier 
        <br> <span id="arrow-icon" class="material-symbols-rounded">arrow_downward</span>
        </p>
        <a id="homeButtons" href="/menu">Menu</a>
    </div>
    <div class="Boxcontainer">
        <h3 class="Boxtitle">Reservering</h3>
        <p>U kunt hier <br> Reserveren 
        <br> <span id="arrow-icon" class="material-symbols-rounded">arrow_downward</span>
        </p>
        <a id="homeButtons" href="/reservering">reservering</a>
    </div>
</body>

</html>