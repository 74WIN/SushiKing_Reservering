<?php require_once 'db/connect.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>

    </head>
    <body>
        <form method="post" action="">
            <table>
               <tr>
                   <td>Naam </td>
                   <td>Telefoon/Mobiel </td>
                   <td>Tijdslot </td>
                   <td>Aantal personen </td>
                   <td>E-mail </td>
                   <td>Opmerking </td>
               </tr>
               <tr>
                   <td><input type="text" id="naam" name="naam"/></td>
                   <td><input type="text" id="telefoonnummer" name="telefoonnummer"/></td>
                   <td><input type="text" id="tijd" name="tijd"/></td>
                   <td><input type="text" id="personen" name="personen"/></td>
                   <td><input type="text" id="email" name="email"/></td>
                   <td><input type="text" id="opmerking" name="opmerking"/></td>
               </tr>
            </table>
            <input type="submit" value="Reserveer"/>
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
        </form>
    </body>
</html>
