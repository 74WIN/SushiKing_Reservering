<?php require_once 'php/update.php';?>
<?php require_once 'db/connect.php'; ?>
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
<!--In de form hieronder kan jij de reservering plaatsen op de db-->
<div class="main">
    <section class="border">
        <h1><center>Reserveren</center></h1>
        <form method="post" action="">
            <div>
                <label for="date">Datum:</label>
                <input type="date" name="updDatum" min="<?php echo date("Y-m-d"); ?>">
            </div>
            <label for="tijd">Tijd:</label>
            <select id="tijd" name="updTijd">
                <option value="17:00">17:00</option>
                <option value="20:00">20:00</option>
            </select>
            <br>
            <label for="personen">personen:</label>
            <select id="personen" name="updPersonen">
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

                <input type="text" id="naam" name="updNaam" required>
            </div>
            <div>
                <label for="telefoonnummer">Telefoonnummer:</label>

                <input type="tel" id="telefoonnummer" name="updTelefoonnummer" required>
            </div>
            <div>
                <label for="email">Email:</label>

                <input type="email" id="email" name="updEmail" required>
            </div>
            <div>
                <label for="opmerking">Opmerking:</label>

                <textarea type="text" id="opmerking" name="updOpmerking"></textarea>
            </div>
            <div class="knop">
                <input type="submit" name="submit" value="Aanpassen" />
            </div>
        </form>
        <section/>
</div>
</body>
</html>
