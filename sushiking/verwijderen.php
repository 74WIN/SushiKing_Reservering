<?php require_once 'db/connect.php'; ?>
<?php require_once 'php/delete.php';?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href ="css/Opmaak.css" rel = "stylesheet" type="text/css"/>
</head>
<body>
<header id="header-reservering">
    <div id="logo">
        <a href="https://www.mountainspring-sushiking.nl/">
            <img src="https://www.mountainspring-sushiking.nl/img/logo-transparent.243a420c.png" width = 350px; height=" 220px">
            <a/>
    </div>
    <nav>
        <a class="active" href="winkelmandje">Winkelmandje</a>
        <a href=https://www.mountainspring-sushiking.nl/bezorgen>CONTACT</a>
        <a href="https://www.mountainspring-sushiking.nl/bezorgen">BEZORGEN</a>
        <a href="https://www.mountainspring-sushiking.nl/menukaart">MENUKAART</a>
        <a href="https://www.mountainspring-sushiking.nl/">HOME</a>
    </nav>
</header>
<div class="main">
    <div id="verwijderen">
        <center></center>
        <h1>Verwijderen</h1>
        <form method="post" action="">
            E-mail: <input type="text" id="delEmail" name="delEmail"/><br>
            <input type="submit" name="submit" value="Delete"/>
        </form>
        </center>
    </div>
</div>
</body>
</html>

