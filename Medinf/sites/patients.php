<?php
  session_start();
  include '../includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patientensuche</title>
  <link rel="stylesheet" href="../styles/bulma.css" />
  <link rel="stylesheet" type="text/css" href="../styles/theme.css">
</head>


<body>
<section class="hero is-success is-fullheight">
  <div class="hero-body">
    <div class="container">             
      <form class="box" action="patients.php" method="post">
        <div class="field">
          <h1 class="title has-text-black">Patientensuche</h1>
          <div class="columns">
            <div class="column is-11">
              <input class="input" name="name" type="text" placeholder="Sucheintrag...">
            </div>
            <div class="column">
              <input class="button is-link" value="GO" type="submit">
            </div>
      </form>
    </div>  
    <table class="table is-fullwidth">
      <thead>
        <tr>
          <th> SVNR </th>
          <th>Vorname</th>
          <th>Nachname</th>
          <th>weitere Informationen</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(isset($_POST["name"])) {
            $p1 = new Patient();
            $output = $p1->searchbyname($_POST["name"]);
            while( $row = $output->fetch()){
              echo 
              '<tr>
                <td>'.$row["svn"]. '</td>
                <td>'.$row["name"].'</td>
                <td>'.$row["surname"].'</td>
                <td> 
                  <form action="../sites/docs.php" method="POST">
                    <input type="text" class="is-hidden" name="id" value="'.$row["idPatients"].'">
                    <input class="button is-block is-info is-large" name="docs" type="submit" value="Dokumentation" </td>
                  </form>
                </td>
                <td>
                  <form action="../sites/vitals.php" method="POST">
                    <input type="text" class="is-hidden" name="id" value="'.$row["idPatients"].'">
                    <input class="button is-block is-info is-large" name="vitals" type="submit" value="Vitalwerte" </td>
                  </form>
                </td> 
              </tr>';
            }
          }
            else{
              $p1 = new Patient();
              $output = $p1->searchbyname("");
              while( $row = $output->fetch()){
                echo '<tr>
                <td>'.$row["svn"]. '</td>
                <td>'.$row["name"].'</td>
                <td>'.$row["surname"].'</td>
                <td> <button class="button is-link"> Vitalwerte</button> </td>
                <td> <button class="button is-link"> Dokumentation</button></td>
                </tr> ';
              }
            }
        ?>                                           
      </tbody>
    </table>
  </div>
  </div>
  </div>
</section>
<body>

</html>
