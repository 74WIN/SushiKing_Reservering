<?php
require_once '../php/xssSecurity.php';
require_once '../db/connect.php';

$sql = 'SELECT * FROM reserveringen';
$statement = $handler->prepare($sql);
$statement -> execute();
$reserveringen = $statement -> fetchAll(PDO::FETCH_OBJ);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/opmaakdata.css">
</head>
<body>
<div class="item">
    <form method="post" action="">
    <table class="adminTable">
        <tr>
            <th>id</th>
            <th>naam</th>
            <th>telefoonnummer</th>
            <th>email</th>
            <th>personen</th>
            <th>tijd</th>
            <th>datum</th>
            <th>opmerking</th>
            <th colspan="2"></th>
            <th><a href="login.php">Log out</th>
        </tr>
        <?php
        //reads array and puts in table
        foreach($reserveringen as $reservering){ ?>
        <tr>
            <td><?= e($reservering->id)?></td>
            <td><?= e($reservering->naam)?></td>
            <td><?= e($reservering->telefoonnummer)?></td>
            <td><?= e($reservering->email)?></td>
            <td><?= e($reservering->personen)?></td>
            <td><?= e($reservering->tijd)?></td>
            <td><?= e($reservering->datum)?></td>
            <td><?= e($reservering->opmerking)?></td>
            <td><a href="../aanpassen.php?id=<?= e($reservering->id) ?>">Edit</a></td>
            <td>
                <a href="../login/delete.php?id=<?= e($reservering->id) ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    </form>
</div>
</body>

</html>
