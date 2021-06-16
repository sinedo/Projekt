<?php
session_start();

?>

<!DOCTYPE html>
<html lang="de">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Vitalwerte</title>

    <link rel="stylesheet" href="../styles/bulma.css" />
    <link rel="stylesheet" type="text/css" href="../styles/vitalstyles.css">

</head>


<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-head">
            <div class="container">                  
                        <div class="columns">
                            <div class="column is-half  ">
                            <div class="box">
                                <div class="columns ">
                                    <div class="column is-one-third">
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Anrede: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Name: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Geschlecht: </h1>
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Pronomen: </h1>
                                    </div>
                                     <div class="column">
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"> Herr </h1> 
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"> Edonis Berisha </h1> 
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"> M</h1> 
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary"> he/him </h1>    
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
                                        <h1 class="title has-text-black is-size-4 is-family-sans-serif">Aufenthaltsgrund: </h1>
                                </div>  
                                <div class="column">
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary">22 </h1>
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary">1.90 cm </h1>
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary">250 kg </h1>
                                        <h1 class="title has-text-link-dark is-size-4 is-family-secondary">herzler </h1>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>    
                                        
                        <div class="dropdown is-fullwidth">
                            <div class="dropdown-trigger is-fullwidth">
                                <button class="button is-large is-fullwidth" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span>VITALWERT fucking hell geh doch fullwidh du wappler</span>
                                    <span class="icon is-small">
                                        <img src="../img/Down-Carrot-512.jpg">
                                    </span>
                                </button>
                                </div>
                                    <div class="dropdown-menu" id="dropdown-menu4" is-fullwidth role="menu">
                                        <div class="dropdown-content is-fullwidth">
                                            <div class="dropdown-item is-fullwidth"> 
                                                    <table class="table is-fullwidth">
                                                        <thead>
                                                        <tr>
                                                        <th>Wert</th>
                                                        <th>Wochendurchschnitt</th>
                                                        <th>was versteht der unter</th>
                                                        <th>fucking fullwidth ned oida</th>
                                                        <th></th>
                                                        </tr>
                                                    </thead>    
                                                    </table>
                                            </div>
                                        </div> 
                                    </div> 
                                     
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                        var dropdown = document.querySelector('.dropdown');
                        dropdown.addEventListener('click', function(event) {
                            event.stopPropagation();
                            dropdown.classList.toggle('is-active');
                        });
                        });        
                    </script>      
            </div>  
    </section>
<body>                   