<?php require_once 'db/connect.php'; ?>
<?php include 'php/add.php';?>
<?php include 'php/delete.php';?>
<?php include 'php/update.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>

    </head>
    <body>
    <!--In de form hieronder kan jij de reservering plaatsen op de db-->
    <h1>Reserveren:</h1>
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
    <!--In de form hieronder kan jij de reservering verwijderen op de db-->
        <h1>Verwijderen:</h1>
        <form method="post" action="">
            E-mail: 	<input type="text" id="delEmail" name="delEmail"/><br>
            <input type="submit" value="Delete"/>
        </form>
        <br>
    <!--In de form hieronder kan jij de reservering aanpassen op de db-->
    <h1>Aanpassen:</h1>
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
                <td><input type="text" id="updNaam" name="updNaam"/></td>
                <td><input type="text" id="updTelefoonnummer" name="updTelefoonnummer"/></td>
                <td><input type="text" id="updTijd" name="updTijd"/></td>
                <td><input type="text" id="updPersonen" name="updPersonen"/></td>
                <td><input type="text" id="updEmail" name="updEmail"/></td>
                <td><input type="text" id="updOpmerking" name="updOpmerking"/></td>
            </tr>
        </table>
        <input type="submit" value="Aanpassen"/>
    </body>
</html>
