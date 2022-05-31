<?php
include_once '../db/connect.php';
/*echo password_hash("TZ438JL987", PASSWORD_DEFAULT);*/

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/opmaak.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Log in</title>
</head>

<body>
<div class="main">
    <p class="sign" align="center">Inloggen</p>
    <form class="form1">
        <?php
        //if submit pressed
        if(isset($_POST['submit'])) {
            //if either code or code is not empty
            if(!empty($_POST['username']) || !empty($_POST['password'])) {
                //protect from sql injections and save as variable
                $email = mysqli_real_escape_string($conn, $_POST['username']);
                $verification = mysqli_real_escape_string($conn, $_POST['password']);

                //query to get email and verification from database
                $query = "SELECT password FROM `data` WHERE username = '$username'";
                //runs query on the database
                $result = mysqli_query($conn, $query);

                //if there is 1 result in the database
                if (mysqli_num_rows($result) == 1) {
                    //fetches information from database
                    $fetch = mysqli_fetch_assoc($result);
                    //only need password, which is a hash
                    $hash = $fetch['password'];

                    //if verification matches with password in db
                    if (password_verify($verification, $hash)){
                        $_SESSION['username'] = $email;
                        header("Location: dataconn.php");
                    }
                    else{
                        //if pw doesnt match with database, show error
                        ?>
                        <p>verification invalid</p>
                        <?php
                    }
                }
                else{
                    //if there is no such password in database
                    echo 'password invalid';
                }
                mysqli_close($conn);
            }
            else{
                //if username or password is empty
                ?>
                <p> Please enter ticket code</p>
                <?php
            }
        }
        ?>
        <input class="gebruiker" type="text" align="center" placeholder="Gebruikersnaam">
        <input class="pass" type="password" align="center" placeholder="Wachtwoord">
        <a class="submit" align="center">Log in</a>
</div>
</body>
</html
