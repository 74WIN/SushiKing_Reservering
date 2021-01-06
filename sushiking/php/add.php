<?php
//php code hieronder later in een aparte file stoppen
//voegt form toe aan de database
if(isset($_POST['submit'])) {
    $naam = $_POST['naam'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $personen = $_POST['personen'];
    $email = $_POST['email'];
    $opmerking = $_POST['opmerking'];
    $addq = "INSERT INTO reserveringen(naam, telefoonnummer, datum, tijd, personen, email, opmerking) VALUES (:naam, :telefoonnummer, :datum, :tijd, :personen, :email, :opmerking)";
    $addquery = $handler->prepare($addq);
    $addresults = $addquery->execute(array(
        ":naam" => $naam,
        ":telefoonnummer" => $telefoonnummer,
        ":datum" => $datum,
        ":tijd" => $tijd,
        ":personen" => $personen,
        ":email" => $email,
        ":opmerking" => $opmerking,
    ));
    require_once 'php/reserveringmailer.php';
}
