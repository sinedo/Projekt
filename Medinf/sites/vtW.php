<?php
    include '../includes/autoloader.inc.php';
    $v1 = new Vitals();
    $vital = $v1->getVitals($_POST["id"]);
    $p1 = new Patient();
    $patient = $p1->getpatientwithid($_POST["id"]);
    while( $row = $vital->fetch()){
        $height=$row['height'];
        $weight=$row['weight'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="../styles/bulma.css" />
  <link rel="stylesheet" type="text/css" href="../styles/vitalstyles.css">
  <link rel="stylesheet" type="text/css" href="../styles/theme.css">
  <link rel="stylesheet" href="../styles/accordion.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <section class="hero is-success is-fullheight">
    <form action="vitals.php" method="POST">
                    <input type="text" class="is-hidden" name="id" value="<?php echo $_POST["id"];?>">
                    <input class="button is-block is-info is-large fullwidth" name="docs" type="submit" value="Zurück">
                  </form>
        <div class="hero-head">
            <div class="container">                  
                        <div class="columns">
                            <div class="column is-half  ">
                            <div class="box">
                                <div class="columns ">
                                    <div class="column is-one-third">
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Name: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Geschlecht: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Pronomen: </h1>
                                    </div>
                                     <div class="column">
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"> <?php echo $patient["name"].' '.$patient["surname"]; ?> </h1> 
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php echo $patient["sex"]; ?> </h1> 
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php echo $patient["pronoun"]; ?> </h1>    
                                        </div>                
                                    </div>
                                </div>
                            </div>
                                <div class="column is-half ">
                                <div class="box">
                                <div class="columns">
                                <div class="column is-one-third">
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Alter: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Größe: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Gewicht: </h1>
                                        
                                </div>  
                                <div class="column">
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php 
                                        $today = date("Y-m-d");
                                        $diff = date_diff(date_create($patient["birthdate"]), date_create($today));
                                        
                                        echo $diff->format('%y')." Jahre"; ?> </h1>
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php echo $height.' cm'; ?> </h1>
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"><?php echo $weight.' kg';  ?> </h1>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>  

<div class="hero is-success is-fullheight">

    <div class="container">             
      <form class="box">
        <div class="field">
          <h1 class="title has-text-black">Gewichtstabelle</h1>
          <div class="columns">
            <div class="column is-11">
            </div>
            <div class="column">
            </div>
      </form>
    </div>  
    <table class="table is-fullwidth">
      <thead>
        <tr>
          <th> Datum </th>
          <th>Gewicht</th>

          <th></th>
        </tr>
      </thead>
        <?php
         
            $vital = $v1->getVitalsDESC($_POST["id"]);
            while( $row = $vital->fetch()){

                echo 
                    '<tr>
                    <td>'.$row["created_at"]. '</td>
                    <td>'.$row["weight"].'</td>
                    <td> 
        
                    </td>
                    <td>
                  
                    </td> 
                    </tr>';
            }
        ?>                                           

    </table>
  </div>

  </div>

</div>
</div>
</html>
</body>