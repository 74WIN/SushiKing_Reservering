<?php //Delete from database
    if(isset($_POST['delEmail'])) {
        $delEmail = $_POST['delEmail'];
        $pdoQuery = "DELETE FROM `reserveringen` WHERE `email` = :delEmail";
        $pdoResult = $handler->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(":delEmail"=>$delEmail));
    }
?>
