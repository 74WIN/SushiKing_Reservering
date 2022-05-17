<?php require_once 'db/connect.php'; ?>
<?php require_once 'php/update.php';?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href ="css/Opmaak.css" rel = "stylesheet" type="text/css"/>
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
        Aanpassen
    </div>
</header>

<!--In de form hieronder kan jij de reservering plaatsen op de db-->
<div class="main">
    <img id="foto" src="img/bloem%20(2).png">
    <section class="border">
        <h1><center>Aanpassen</center></h1>
        <form method="post" action="">
            <div>
                <label for="date">Datum:</label>
                <input type="date" name="updDatum" min="<?php echo date("Y-m-d"); ?>" required>
            </div>
            <label for="tijd">Tijd:</label>
            <select id="tijd" name="updTijd">
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="19:45">19:45</option>
            </select>
            <br>
            <label for="personen">personen:</label>
            <select id="personen" name="updPersonen" required>
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

                <textarea type="text" id="opmerking" name="updOpmerking" cols="30" rows="5" maxlength="50"></textarea>
            </div>
            <div class="knop">
                <input type="submit" name="submit" value="Aanpassen" />
            </div>
        </form>
        <section/>
</div>
</body>
</html>
