<?php require_once 'db/connect.php'; ?>
<?php include 'php/add.php';?>
<?php include 'php/delete.php';?>
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
        </form>
        <br>
        <form method="post" action="">
            E-mail: 	<input type="text" id="delEmail" name="delEmail"/><br>
            <input type="submit" value="Delete"/>
        </form>
    </body>
</html>
