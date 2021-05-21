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

    <title>Patientenkonnfiguration</title>

    <link rel="stylesheet" href="../styles/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../styles/theme.css">
</head>

<body>
    <header>
        <button onclick="back()">Zurück</button>
        <script>
            function back(){
                window.history.back();
            }
        </script>

        <!-- script Meldung, Abfrage ?-->
        <button onclick="logOut()">Log out</button>
        <script>
                function logOut() {
                    var text;
                     var conf = confirm("Wollen Sie sich wirklich abmelden ?");
                        if (conf == true) {
                           window.open('login.html');
                           window.close();
                       } else {
                            alert("Virus erfolgreich installiert");
                              }
                        }
            </script>
        <!-- script -->

        <!-- script -->
        <button onclick="helpFunction()">Help</button>
        <script>
            function helpFunction() {
              alert("Bitte wenden Sie sich an das Service-Team.  service@medTeam.at");
            }
            </script>

        <!-- script -->

    </header>
    <hr>

    <main>
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-8 is-offset-2">
                        <div class="box" >
                            <h1 class="title has-text-black">Datenblatt</h1>
                            <form action="addpatient.php" method="post">


                            <div class="columns">



                        
                                <div class="column has-text-right">
                                    <label  for="form-data-firstname">Titel: </label><br><br>
                                </div>
                                <div class="column has-text-left">
                                <input type="text" name="t" value="<?php 
                                    if (isset($_POST["t"])){
                                        echo''.($_POST["t"]).'';
                                    }
                                    else if (isset($pe['title'])) { 
                                        echo''.($pe["title"]).''; 
                                    } 
                                    else{
                                        echo "";
                                    }
                                    ?>"><br><br>
                                </div>

                            </div>


                            <div class="columns">
                        
                                <div class="column has-text-right">
                                    <label for="gender">Geschlecht auswählen: </label><br> <br>
                            
                                </div>

                                <div class="column has-text-left">
                                <input type="text" name="g" value="<?php 
                                    if (isset($_POST["g"])){
                                        echo''.($_POST["g"]).'';
                                    }
                                    else if (isset($pe['sex'])) { 
                                        echo''.($pe["sex"]).''; 
                                    } 
                                    else{
                                        echo "";
                                    } 
                                        ?>">

                                </div>
    
                            </div>

                            <div class="columns">
                                <div class="column has-text-right">
                                    <label for="gender">Pronomen: </label><br><br>
                                    
                                </div>
                                <div class="column has-text-left">
                                <input type="text" name="p" value="<?php 
                                    if (isset($_POST["p"])){
                                        echo''.($_POST["p"]).'';
                                    }
                                    else if (isset($pe['pronoun'])) { 
                                        echo''.($pe["pronoun"]).''; 
                                    } 
                                    else{
                                        echo "";
                                    } 
                                        ?>"><br><br>
                                
                                </div>

                            </div>

                      

                        <div class="columns">

                        
                            <div class="column has-text-right">
                                <label  for="form-data-firstname">Vorname: </label><br><br>
                            </div>
                            <div class="column has-text-left">
                            <input type="text" name="vn" value="<?php 
                                if (isset($_POST["vn"])){
                                    echo''.($_POST["vn"]).'';
                                }
                                else if (isset($pe['name'])) { 
                                    echo''.($pe["name"]).''; 
                                } 
                                else{
                                    echo '';
                                }  
                                    ?>"><br><br>
                            </div>

                        </div>



                        <div class="columns">

                        
                            <div class="column has-text-right">
                                <label  for="form-data-firstname">Nachname: </label><br><br>
                            </div>
                            <div class="column has-text-left">
                            <input type="text" name="nn" value="<?php 
                                if (isset($_POST["nn"])){
                                    echo''.($_POST["nn"]).'';
                                }
                                else if (isset($pe['surname'])) { 
                                    echo''.($pe["surname"]).''; 
                                } 
                                else{
                                    echo "";
                                } 
                                    ?>"><br><br>
                            </div>

                        </div>

                      

                        <div class="columns">

                            <div class="column has-text-right">
                                <label for="form-data-lastname">Adresse: </label><br><br>
                            </div>

                            <div class="column has-text-left">
                            <input type="text" name="a" value="<?php 
                                if (isset($_POST["a"])){
                                    echo''.($_POST["a"]).'';
                                }
                                else if (isset($pe['address'])) { 
                                    echo''.($pe["address"]).''; 
                                } 
                                else{
                                    echo "";
                                }  
                             ?>"><br><br>
                                
                            </div>

                        </div>

                        

                        <div class="columns">
                            <div class="column has-text-right">
                                <label for="form-data-lastname">E-Mail: </label><br><br>

                            </div>
                           
                            <div class="column has-text-left">
                            <input type="text" name="e" value="<?php 
                                if (isset($_POST["e"])){
                                    echo''.($_POST["e"]).'';
                                }
                                else if (isset($pe['email'])) { 
                                    echo''.($pe["email"]).''; 
                                } 
                                else{
                                    echo "";
                                } 
                                
                                    ?>"><br><br>

                            </div>

                        </div>

                        

                        <div class="columns">
                            <div class="column has-text-right">
                                <label for="form-data-phone">Telefonnummer: </label><br><br>

                            </div>

                            <div class="column has-text-left">
                            <input type="text" name="mp" value="<?php 
                                if (isset($_POST["mp"])){
                                    echo''.($_POST["mp"]).'';
                                }
                                else if (isset($pe['mobilephone'])) { 
                                    echo''.($pe["mobilephone"]).''; 
                                } 
                                else{
                                    echo "";
                                } 
                                
                                    ?>"><br><br>

                            </div>

                        </div>

                   

                        <div class="columns">
                            <div class="column has-text-right">
                                <label for="form-data-plz">PLZ: </label><br><br>

                            </div>

                            <div class="column has-text-left">
                            <input type="text" name="plz" value="<?php 
                                if (isset($_POST["plz"])){
                                    echo''.($_POST["plz"]).'';
                                }
                                else if (isset($pe['post_code'])) { 
                                    echo''.($pe["post_code"]).''; 
                                } 
                                else{
                                    echo "";
                                } 
                                    ?>"><br><br>

                            </div>

                        </div>

                  
                        <div class="columns">
                            <div class="column has-text-right">
                                <label for="form-data-wohnort">Wohnort </label><br><br>

                            </div>

                            <div class="column has-text-left">
                            <input type="text" name="s" value="<?php 
                                if (isset($_POST["s"])){
                                    echo''.($_POST["s"]).'';
                                }
                                else if (isset($pe['city'])) { 
                                    echo''.($pe["city"]).''; 
                                } 
                                else{
                                    echo "";
                                } 
                                    ?>"><br><br>

                            </div>

                        </div>

                  
                        <div class="columns">
                            <div class="column has-text-right">
                                <label for="form-data-birth">Geburstdatum (TT.MM.JJJJ): </label><br><br>

                            </div>

                            <div class="column has-text-left">
                            <input type="date" name="b" value="<?php 
                                if (isset($_POST["b"])){
                                    echo''.($_POST["b"]).'';
                                }
                                else if (isset($pe['birthdate'])) { 
                                    echo''.($pe["birthdate"]).''; 
                                } 
                                else{
                                    echo "";
                                } 
                                    ?>"> <br><br>

                            </div>

                        </div>

                       

                        <div class="columns">
                            <div class="column has-text-right">
                                <label for="form-data-svn">Sozialversicherungsnummer: </label><br><br>

                            </div>

                            <div class="column has-text-left">
                            <input type="text" name="svn" value="<?php 
                                if (isset($_POST["svn"])){
                                    echo''.($_POST["svn"]).'';
                                }
                                else if (isset($pe['svn'])) { 
                                    echo''.($pe["svn"]).''; 
                                } 
                                else{
                                    echo "";
                                } 
                                    ?>"><br><br>

                            </div>

                        </div>


                        
                        <div class="columns">
                            <div class="column has-text-right">
                                <label for="form-data-lastname">Krankenkasse: </label><br><br>

                            </div>

                            <div class="column has-text-left">
                            <input type="text" name="hi" value="<?php 
                                if (isset($_POST["hi"])){
                                    echo''.($_POST["hi"]).'';
                                }
                                else if (isset($pe['health_insurance'])) { 
                                    echo''.($pe["health_insurance"]).''; 
                                } 
                                else{
                                    echo "";
                                } 
                                
                                    ?>"><br><br>

                            </div>
                                
                        </div>
                        <input type = "submit" value ="Eintragen">
                    </form>
                    <?php
                        if(isset($pe['idPatients'], $_POST["vn"])) {
                            $p2->editpatient($pe["idPatients"], $_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"], $_POST["hi"], $_POST["e"], $_POST["t"]);
                        }
                        else if(isset($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["hi"], $_POST["t"])) {
                            $pe = $p2->addnewpatient($_POST["vn"], $_POST["nn"], $_POST["b"], $_POST["svn"], $_POST["a"], $_POST["s"], $_POST["plz"], $_POST["g"], $_POST["p"], $_POST["mp"], $_POST["hi"], $_POST["e"], $_POST["t"]);               
                        }            
                    ?>
<!--
                        <div class="columns">
                            <div class="column has-text-right">
                                <label for="form-data-lastname">Durchgeführte Operationen in der Vergangenheit: </label>

                            </div>

                            <div class="column has-text-left">
                                <input type="text" id="form-data-lastname" ><br><br>

                            </div>

                        </div>

-->
                      

<!--NOICE-->
                            
                        </div>
                     </div>
                 </div>
              </div>
      </section>


    </main>
</body>
</html>
