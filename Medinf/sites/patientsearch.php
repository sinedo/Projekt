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
    <form action="patientsearch.php" method="post">
        Patient: <input type="text" name="name">
        <input type = "submit" value ="Suchen">
        </form>
        <?php
            if(isset($_POST["name"])) {
                $p1 = new Patient();
                $output = $p1->searchbyname($_POST["name"]);
                while( $row = $output->fetch()){
                    echo "<br><p>".$row["name"]." ".$row["surname"]." ".$row["svn"]."</p>";
                }
            }
        ?>
    </div>
    
    

</body>
</html>