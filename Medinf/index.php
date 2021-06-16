<?php
session_start();
$_SESSION["role"]="";
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Med-login</title>

    <link rel="stylesheet" href="styles/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/theme.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Anmeldung</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Anmelden um fortzufahren</p>
                    <div class="box">

                        <img src="img/logo.png" alt="logo.png">
                        <form action="logic/login.php" method="POST">     
                        
                                <?php 
                                    if(isset($_SESSION["error"])){
                                        echo '<p class="is-6 has-text-red">'.($_SESSION["error"]).'</p> <br>';
                                        $_SESSION["error"]="";
                                    }
                                ?> 
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" name="username" type="text" placeholder="Benutzername"
                                        autofocus="" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" name="password" type="password" placeholder="Passwort"
                                        required>
                                </div>
                            </div>
                            
                            <input class="button is-block is-info is-large is-fullwidth" type="submit" value="Anmelden">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>