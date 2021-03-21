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
</head>
<body>
    <?php
        $user = new Personal();
        $verify=$user->verify($_POST['username'],$_POST['password']);
        $_SESSION["error"]="";
        if($verify==false){
            $_SESSION["error"]="Der Nutzername und das Passwort stimmen nicht mit unseren Unterlagen überein. 
            Bitte überprüfe deine Angaben und versuche es erneut.";
            header('Location: ../index.php');     
        }
        //header('Location: ../sites/direct.php');   
    ?>
</body>
</html>