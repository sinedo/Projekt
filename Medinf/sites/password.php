<?php

    function randomPassword() {
        $chars = "abcdefghijklmnopqrstuvwxyz1234567890_<>,;.:!?=-ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $pass = array(); 
        $charslength = strlen($chars) - 1; 
        for ($i = 0; $i < rand(8,16) ; $i++) {
            $n = rand(0, $charslength);
            $pass[] = $chars[$n];
        }
        return implode($pass);
    }

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>password</title>

    <link rel="stylesheet" href="../styles/bulma.min.css" />
    <link rel="stylesheet" href="../styles/theme.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-8 is-offset-2">
                    <h3 class="title has-text-black">Sicherheit</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Passwort salzen</p>
                    <div class="box">                                                         
                        <form action="password.php" method="post">
                            <br>
                            <br>
                            <div class="field">
                                <div class="control">
                                    <p class="input is-large">
                                        <?php
                                            $password=randomPassword();
                                            echo $password;
                                        ?>     
                                    </p>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <p class="input is-large">
                                        <?php
                                            echo password_hash($password, PASSWORD_DEFAULT);
                                        ?>     
                                    </p>
                                </div>
                            </div>
                                
                            <br>
                            <br>    

                            <input class="button is-block is-info is-large is-fullwidth" type="submit" value="neues sicheres Passwort">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>