<?php
    session_start();
    include '../includes/autoloader.inc.php';

    $p1 = new Patient();
    $output = $p1->searchbyname($_POST["name"]);
    
    while( $row = $output->fetch()){
        echo "<br><p>".$row["name"]." ".$row["surname"]." ".$row["svn"]."</p>";
    }

    //var_dump($output->fetchAll());
?>