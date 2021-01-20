<?php
//past bestaande data op de database, aan de hand van de email adres kunnen andere gegevens aangepast worden.
if(isset($_POST['submit'])) {
    $updNaam = $_POST['updNaam'];
    $updTelefoonnummer = $_POST['updTelefoonnummer'];
    $updDatum = $_POST['updDatum'];
    $updTijd = $_POST['updTijd'];
    $updPersonen = $_POST['updPersonen'];
    $updEmail = $_POST['updEmail'];
    $updOpmerking = $_POST['updOpmerking'];
    $addq = "UPDATE reserveringen SET naam = :updNaam,telefoonnummer = :updTelefoonnummer,datum = :updDatum , tijd = :updTijd, personen = :updPersonen, email = :updEmail, opmerking = :updOpmerking WHERE email = :updEmail";
    $addquery = $handler->prepare($addq);
    $addresults = $addquery->execute(array(
        ":updNaam" => $updNaam,
        ":updTelefoonnummer" => $updTelefoonnummer,
        "updDatum" => $updDatum,
        ":updTijd" => $updTijd,
        ":updPersonen" => $updPersonen,
        ":updEmail" => $updEmail,
        ":updOpmerking" => $updOpmerking,
    ));
    require_once 'updreserveringmailer.php';
}
?>
