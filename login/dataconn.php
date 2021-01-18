<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sushiking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reserveringen";
$result = mysqli_query($conn, $sql);

$reserveringen = [];

while ($row = mysqli_fetch_assoc($result)){
    $reserveringen[] = $row;
}
mysqli_close($conn);
?>
<?php

$url1=$_SERVER['REQUEST_URI'];

header("Refresh: 5; URL=$url1");

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/opmaakdata.css">
</head>
<body>
<<div class="item">
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
            <th><a href="logout.php">Log out</th>
        </tr>
        <?php
        //reads array and puts in table
        foreach($reserveringen as $value){ ?>
        <tr>
            <td><?= $value["id"]?></td>
            <td><?= $value["naam"]?></td>
            <td><?= $value["telefoonnummer"]?></td>
            <td><?= $value["email"]?></td>
            <td><?= $value["personen"]?></td>
            <td><?= $value["tijd"]?></td>
            <td><?= $value["datum"]?></td>
            <td><?= $value["opmerking"]?></td>
            <td><a href="../sushiking/aanpassen.php?id=<?= $value['id'] ?>">Edit</a></td>
            <td><a href="../sushiking/verwijderen.php?id=<?= $value['id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>

</html>
