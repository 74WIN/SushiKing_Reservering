<?php
$con = mysqli_connect("localhost","root","","sushiking");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
//voegt form toe aan de database
if(isset($_POST['submit'])) {
    $naam = mysqli_escape_string($con, $_POST['naam']);
    $telefoonnummer =mysqli_escape_string($con, $_POST['telefoonnummer']) ;
    $datum = mysqli_escape_string($con, $_POST['datum']);
    $tijd =mysqli_escape_string($con, $_POST['tijd']);
    $personen =mysqli_escape_string($con, $_POST['personen']);
    $email =mysqli_escape_string($con, $_POST['email']);
    $opmerking = mysqli_escape_string($con, $_POST['opmerking']);
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
    require_once 'reserveringmailer.php';
}
