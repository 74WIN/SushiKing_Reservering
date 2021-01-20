<?php require_once 'db/connect.php'; ?>
<?php require_once 'php/delete.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href ="css/Opmaak.css" rel = "stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header id="header-reservering">
        <a href="https://www.mountainspring-sushiking.nl/">
            <img id="logo" src="https://www.mountainspring-sushiking.nl/img/logo-transparent.243a420c.png" width = 350px; height=" 220px">
            <a/>
    <nav>
        <a href="https://www.mountainspring-sushiking.nl/">HOME</a>
        <a href="https://www.mountainspring-sushiking.nl/menukaart">MENUKAART</a>
        <a href="https://www.mountainspring-sushiking.nl/bezorgen">BEZORGEN</a>
        <a href=https://www.mountainspring-sushiking.nl/bezorgen>CONTACT</a>
        <a class="active" href="winkelmandje">Winkelmandje</a>
    </nav>
    <div id="titel">
        <div>Verwijderen</div>
    </div>
</header>
<div class="main">
    <div id="verwijderen">
        <h1>Verwijderen</h1>
        <form method="post" action="">
            E-mail: <input type="text" id="delEmail" name="delEmail"/><br>
            <input type="submit" name="submit" value="Delete"/>
        </form>
    </div>
</div>
</body>
</html>

