<?php require_once 'db/connect.php'; ?>
<?php require_once 'php/add.php';?>
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
        <img id="logo" src="https://www.mountainspring-sushiking.nl/img/logo-transparent.243a420c.png"/>
    </a>
    <nav>
        <a class="active" href="winkelmandje">Winkelmandje</a>
        <a href=https://www.mountainspring-sushiking.nl/bezorgen>CONTACT</a>
        <a href="https://www.mountainspring-sushiking.nl/bezorgen">BEZORGEN</a>
        <a href="https://www.mountainspring-sushiking.nl/menukaart">MENUKAART</a>
        <a href="https://www.mountainspring-sushiking.nl/">HOME</a>
    </nav>
</header>
<!--In de form hieronder kan jij de reservering plaatsen op de db-->
<div class="main">
    <section class="border">
        <h1><center>Reserveren</center></h1>
        <form method="post" action="">
            <div>
                <label for="date">Datum:</label>
                <input type="date" name="datum" min="<?php echo date("Y-m-d"); ?>" required>
            </div>
            <label for="tijd">Tijd:</label>
            <select id="tijd" name="tijd" required>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">20:00</option>
                <option value="16:00">12:00</option>
                <option value="17:00">13:00</option>
                <option value="19:45">19:45</option>
            </select>
            <br>
            <label for="personen">personen:</label>
            <select id="personen" name="personen" required>
                <option value=1>1 persoon</option>
                <option value=2">2 personen</option>
                <option value=3">3 personen</option>
                <option value=4">4 personen</option>
                <option value=5">5 personen</option>
                <option value=6">6 personen</option>
                <option value=7">7 personen</option>
                <option value=8">8 personen</option>
                <option value=9">9 personen</option>
                <option value=10">10 personen</option>
            </select>
            <div>
                <label for="name">Naam:</label>

                <input type="text" id="naam" name="naam" required>
            </div>
            <div>
                <label for="telefoonnummer">Telefoonnummer:</label>

                <input type="tel" id="telefoonnummer" name="telefoonnummer" required>
            </div>
            <div>
                <label for="email">Email:</label>

                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="opmerking">Opmerking:</label>

                <textarea type="text" id="opmerking" name="opmerking" cols="30" rows="5" maxlength="50"></textarea>
            </div>
            <div class="knop">
                <input type="submit" name="submit" value="Reserveer" href="bevestiging.php"/>
            </div>
        </form>
        <section/>
</div>
</body>
</html>

