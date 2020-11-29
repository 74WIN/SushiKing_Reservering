<?php
//php code hieronder later in een aparte file stoppen
//voegt form toe aan de database
if(isset($_POST['updEmail'])) {
    $updNaam = $_POST['updNaam'];
    $updTelefoonnummer = $_POST['updTelefoonnummer'];
    $updTijd = $_POST['updTijd'];
    $updPersonen = $_POST['updPersonen'];
    $updEmail = $_POST['updEmail'];
    $updOpmerking = $_POST['updOpmerking'];
    $addq = "UPDATE `reserveringen` SET `naam` = :updNaam, `telefoonnummer` = :updTelefoonnummer, `tijd` = :updTijd, `personen` = :updPersonen, `email` = :updEmail, `opmerking` = :updOpmerking WHERE `email` = :updEmail";
    $addquery = $handler->prepare($addq);
    $addresults = $addquery->execute(array(
        ":updNaam" => $updNaam,
        ":updTelefoonnummer" => $updTelefoonnummer,
        ":updTijd" => $updTijd,
        ":updPersonen" => $updPersonen,
        ":updEmail" => $updEmail,
        ":updOpmerking" => $updOpmerking,
    ));
}
?>
