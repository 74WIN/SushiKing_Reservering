<?php
require_once '../db/connect.php';
//Delete from database
$id =  $_GET['id'];
$sql = "DELETE FROM reserveringen WHERE id = :id";
$statement = $handler->prepare($sql);
if ($statement->execute([':id' => $id])) {
    header("Location: dataconn.php");
}
?>
