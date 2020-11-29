<?php
//php code hieronder later in een aparte file stoppen
//voegt form toe aan de database
if(isset($_POST['naam'])) {
    $naam = $_POST['naam'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $tijd = $_POST['tijd'];
    $personen = $_POST['personen'];
    $email = $_POST['email'];
    $opmerking = $_POST['opmerking'];
    $addq = "INSERT INTO reserveringen(naam, telefoonnummer, tijd, personen, email, opmerking) VALUES (:naam, :telefoonnummer, :tijd, :personen, :email, :opmerking);";
    $addquery = $handler->prepare($addq);
    $addresults = $addquery->execute(array(
        ":naam" => $naam,
        ":telefoonnummer" => $telefoonnummer,
        ":tijd" => $tijd,
        ":personen" => $personen,
        ":email" => $email,
        ":opmerking" => $opmerking,
    ));
}
?>