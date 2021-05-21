<?php
    include '../includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Med-login</title>

    <link rel="stylesheet" href="../styles/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../styles/theme.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-8 is-offset-2">
                    <h3 class="title has-text-black">Patientenkonfiguration</h3>
                    <hr class="login-hr">
                    
                    <div class="box">
                    <form action="../sites/addpatient.php" method="post">
                        <p class="subtitle has-text-black">Sozialversicherungsnummer:</p>
                        <input type="text" name="svn">
                        <input type = "submit" value ="Suchen">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>