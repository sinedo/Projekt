<?php
    include '../includes/autoloader.inc.php';
    if (isset($_POST["svn"])) {
        $p2 = new Patient();
        $pe = $p2->getpatient($_POST["svn"]);
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
        Vorame: <input type="text" name="vn" value="<?php 
        if (isset($_POST["vn"])){
            echo''.($_POST["vn"]).'';
        }
        else if (isset($pe['name'])) { 
            echo''.($pe["name"]).''; 
        } 
        else{
            echo '';
        }  
            ?>"> <br>
        Nachname: <input type="text" name="nn" value="<?php 
        if (isset($_POST["nn"])){
            echo''.($_POST["nn"]).'';
        }
        else if (isset($pe['surname'])) { 
            echo''.($pe["surname"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Sozialversicherungsnummer: <input type="text" name="svn" value="<?php 
        if (isset($_POST["svn"])){
            echo''.($_POST["svn"]).'';
        }
        else if (isset($pe['svn'])) { 
            echo''.($pe["svn"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Geburtstag: <input type="date" name="b" value="<?php 
        if (isset($_POST["b"])){
            echo''.($_POST["b"]).'';
        }
        else if (isset($pe['birthdate'])) { 
            echo''.($pe["birthdate"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Biogeschlecht: <input type="text" name="g" value="<?php 
        if (isset($_POST["g"])){
            echo''.($_POST["g"]).'';
        }
        else if (isset($pe['sex'])) { 
            echo''.($pe["sex"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Pronoun: <input type="text" name="p" value="<?php 
        if (isset($_POST["p"])){
            echo''.($_POST["p"]).'';
        }
        else if (isset($pe['pronoun'])) { 
            echo''.($pe["pronoun"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Adresse: <input type="text" name="a" value="<?php 
        if (isset($_POST["a"])){
            echo''.($_POST["a"]).'';
        }
        else if (isset($pe['address'])) { 
            echo''.($pe["address"]).''; 
         } 
        else{
            echo "";
        }  
            ?>"> <br>
        Stadt: <input type="text" name="s" value="<?php 
        if (isset($_POST["s"])){
            echo''.($_POST["s"]).'';
        }
        else if (isset($pe['city'])) { 
            echo''.($pe["city"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Postleitzahl: <input type="text" name="plz" value="<?php 
        if (isset($_POST["plz"])){
            echo''.($_POST["plz"]).'';
        }
        else if (isset($pe['post_code'])) { 
            echo''.($pe["post_code"]).''; 
        } 
        else{
            echo "";
        } 
            ?>"> <br>
        Mobilephone: <input type="text" name="mp" value="<?php 
        if (isset($_POST["mp"])){
            echo''.($_POST["mp"]).'';
        }
        else if (isset($pe['mobilephone'])) { 
            echo''.($pe["mobilephone"]).''; 
        } 
        else{
            echo "";
        } 
        
            ?>"> <br>
        Krankenversicherung: <input type="text" name="hi" value="<?php 
        if (isset($_POST["hi"])){
            echo''.($_POST["hi"]).'';
        }
        else if (isset($pe['health_insurance'])) { 
            echo''.($pe["health_insurance"]).''; 
        } 
        else{
            echo "";
        } 
        
            ?>"> <br> 
        email: <input type="text" name="e" value="<?php 
        if (isset($_POST["e"])){
            echo''.($_POST["e"]).'';
        }
        else if (isset($pe['email'])) { 
            echo''.($pe["email"]).''; 
        } 
        else{
            echo "";
        } 
        
            ?>"> <br>
        title: <input type="text" name="t" value="<?php 
        if (isset($_POST["t"])){
            echo''.($_POST["t"]).'';
        }
        else if (isset($pe['title'])) { 
            echo''.($pe["title"]).''; 
        } 
        else{
            echo "";
        }
        ?>"> <br>      
        <input type = "submit" value ="Eintragen"> 
        <br>
        </form>
        <?php
            if(isset($pe['idPatients'], $_POST["vn"])) {
                $p2->editpatient($pe["idPatients"], $_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"], $_POST["hi"], $_POST["e"], $_POST["t"]);
            }
            else if(isset($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["hi"], $_POST["t"])) {
                $pe = $p2->addnewpatient($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"], $_POST["hi"], $_POST["e"], $_POST["t"]);               
            }            
        ?>
  
    </div>
   

</body>
</html>