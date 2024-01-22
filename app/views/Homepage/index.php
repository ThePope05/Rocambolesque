<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->components('headLinks'); ?>
    <title>Home screen</title>
</head>

<body>
    <?php $this->components('navbar'); ?>
    <div id="Boxcontainer">
        <h3 class="Boxtitle">Menu</h3>
        <p>Bekijk ons menu <br> hier
            <br> <span class="material-symbols-outlined">
                arrow_downward
            </span>
        </p>
        <a id="homeButtons" href="/menu">Menu</a>
    </div>
    <div id="BoxcontainerMargin">
        <h3 class="Boxtitle">Reservering</h3>
        <p>U kunt hier <br> reserveren
            <br> <span class="material-symbols-outlined">
                arrow_downward
            </span>
        </p>
        <a id="homeButtons" href="/reservering/createpage">Reservering</a>
    </div>
</body>

<?php $this->components('footer'); ?>