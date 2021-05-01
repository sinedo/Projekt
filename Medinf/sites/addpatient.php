<?php
    include '../includes/autoloader.inc.php';
    $safety = 0;
    if (isset($_POST["svn"])) {
        $p2 = new Patient();
        $pe = $p2->getpatient($_POST["svn"]);
        $safety = 1;
    }
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
        Vorame: <input type="text" name="vn" value=" <?php 
        if (isset($pe)) { 
            echo''.($pe["name"]).''; 
        } 
        else{
            echo '';
        }  
            ?>"> <br>
        Nachname: <input type="text" name="nn" value="<?php 
        if (isset($pe['surname'])) { 
            echo''.($pe["surname"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Sozialversicherungsnummer: <input type="number" name="svn" value="<?php 
        if (isset($pe['svn'])) { 
            echo''.($pe["svn"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Geburtstag: <input type="date" name="b" value="<?php 
        if (isset($pe['birthdate'])) { 
            echo''.($pe["birthdate"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Biogeschlecht: <input type="text" name="g" value="<?php 
        if (isset($pe['sex'])) { 
            echo''.($pe["sex"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Pronoun: <input type="text" name="p" value="<?php 
        if (isset($pe['pronoun'])) { 
            echo''.($pe["pronoun"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Adresse: <input type="text" name="a" value="<?php 
        if (isset($pe['address'])) { 
            echo''.($pe["address"]).''; 
         } 
        else{
            echo "";
        }  
            ?>"> <br>
        Stadt: <input type="text" name="s" value="<?php 
        if (isset($pe['city'])) { 
            echo''.($pe["city"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Postleitzahl: <input type="number" name="plz" value="<?php 
        if (isset($pe['post_code'])) { 
            echo''.($pe["post_code"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Mobilephone: <input type="text" name="mp" value="<?php 
        if (isset($pe['mobilephone'])) { 
            echo''.($pe["mobilephone"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        <input type = "submit" value =" <?php
        if($safety== 1) {
            echo "Bearbeiten";
        }
        else {
            echo "Anlegen";            
        } ?>"> 
        <br>
        </form>
        <?php
            if($safety == 1 && isset($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"])) {
                $safety = 0;
                $p3 = new Patient();
                $p3->editpatient($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"]);
            }
            else if(isset($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"])) {
                $p1 = new Patient();
                $pe = $p1->addnewpatient($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"]);               
            }            
        ?>
  
    </div>
   

</body>
</html>