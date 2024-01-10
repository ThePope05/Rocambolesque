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
    <div id="Boxcontainer">
        <h3 class="Boxtitle">Menu</h3>
        <p>Bekijk ons menu <br> hier 
        <br> <span id="arrow-icon" class="material-symbols-rounded">arrow_downward</span>
        </p>
        <a id="homeButtons" href="/menu">Menu</a>
    </div>
    <div id="BoxcontainerMargin">
        <h3 class="Boxtitle">Reservering</h3>
        <p>U kunt hier <br> reserveren 
        <br> <span id="arrow-icon" class="material-symbols-rounded">arrow_downward</span>
        </p>
        <a id="homeButtons" href="/reservering">Reservering</a>
    </div>
</body>

</html>