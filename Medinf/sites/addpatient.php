<?php
    include '../includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
    <form action="addpatient.php" method="post">
        Vorame: <input type="text" name="vn"> <br>
        Nachname: <input type="text" name="nn"> <br>
        Sozialversicherungsnummer: <input type="number" name="svn"> <br>
        Geburtstag: <input type="date" name="b"> <br>
        Biogeschlecht: <input type="text" name="g"> <br>
        Pronoun: <input type="text" name="p"> <br>
        Adresse: <input type="text" name="a"> <br>
        Stadt: <input type="text" name="s"> <br>
        Postleitzahl: <input type="number" name="plz"> <br>
        Mobilephone: <input type="text" name="mp"> <br>
        <input type = "submit" value ="Suchen"> <br>
        </form>
        <?php
            if(isset($_POST["vn"])) {
                $p1 = new Patient();
                $p1->addnewpatient($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"]);               
                }
        ?>
        
    </div>
   

</body>
</html>