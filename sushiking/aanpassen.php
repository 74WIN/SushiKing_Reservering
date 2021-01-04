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
        <a href="#Bezorgen">BEZORGEN</a>
        <a href="#Contact">CONTACT</a>
        <a href="#Menukaart">MENUKAART</a>
        <a href="#Home">HOME</a>
    </nav>
</header>
<div class="main">
        <div id="aanpassen">
            <h1>Aanpassen</h1>
            <form method="post" action="">

                <div>
                    <label for="name">Name:</label>

                    <input type="text" id="updNaam" name="naam" required>
                </div>
                <div>
                    <label for="email">email:</label>

                    <input type="email" id="updEmail" name="updEmail" >
                </div>
                <div>
                    <label for="telefoonnummer">telefoonnummer:</label>

                    <input type="tel" id="updTelefoonnummer" name="telefoonnummer">
                </div>
                <div>
                    <label for="opmerking">opmerking:</label>

                    <input type="text" id="updOpmerking" name="updOpmerking">
                </div>
                <div>
                    <label for="date">Datum:</label>
                    <input type="date" id="txtDate" min="<?php echo date("Y-m-d"); ?>">
                </div>
                <label for="tijd">Tijd:</label>
                <select id="updTijd" name="updTijd">
                    <option value="17:00">17:00</option>
                    <option value="20:00">20:00</option>
                </select>
                <label for="updPersonen">personen:</label>
                <select id="updPersonen" name="updPersonen">
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
                <input type="submit" value="Aanpassen"/>
        </div>
</div>
</body>
</html>
