<?php
session_start();
include '../includes/autoloader.inc.php'
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="stylesheet" href="../styles/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../styles/theme.css">
</head>
<body>
    <?php
        $user = new Personal();
        $u=$user->getPasswordByUsername($_POST['username']);

        if(password_verify($_POST['password'],$u["password"])){
            //header('Location: ../sites/table.php');  
        }
        else{
            $_SESSION["error"]="Der Nutzername und das Passwort stimmen nicht mit unseren Unterlagen überein. 
            Bitte überprüfe deine Angaben und versuche es erneut.";
            header('Location: ../index.php');  
        }
        
    ?>

<section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered has-text-black">
                <h2 class="Title">zeas..</h2>
            </div>
        </div>
    </div>
        
</body>
</html>