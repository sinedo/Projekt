<?php
session_start();

?>

<!DOCTYPE html>
<html lang="de">


<head>
<meta charset="utf-8">
  <meta name="description" content="Basic dependency-free accordion menu">
  <meta name="author" content="DevMarketer">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

  <link rel="stylesheet" href="../styles/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="../styles/theme.css">
  

  <link rel="stylesheet" href="../styles/accordion.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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

                        
            <div class="container has-text-centered">
                <h3 class="title has-text-black">Vitalwerte</h3>
                <hr class="login-hr">
                <p class="subtitle has-text-black">Puls, Gewicht, Blutdruck</p>

                <button class="accordion">Puls</button>
                <div class="accordion-content">
                  <div id="chart"></div>

                  <div class="columns">
                    <div class="column">
                      <button class="button is-link is-fullwidth">Tabelle</button>
                    </div>
                  
                    <div class="column">
                      <button class="button is-link is-fullwidth">Graph</button>

                    </div>
                  </div>
                  <br>
                </div>
                <button class="accordion">Gewicht</button>
                <div class="accordion-content">
                  <div id="chart"></div>

                  <div class="columns">
                    <div class="column">
                      <button class="button is-link is-fullwidth">Tabelle</button>
                    </div>
                  
                    <div class="column">
                      <button class="button is-link is-fullwidth">Graph</button>
                      </div>
                      </div>
                    </div>
                </div>
                <button class="accordion">Blutdruck</button>
                <div class="accordion-content">
                  <div id="chart"></div>

                  <div class="columns">
                    <div class="column">
                      <button class="button is-link is-fullwidth">Tabelle</button>
                    </div>
                  
                    <div class="column">
                      <button class="button is-link is-fullwidth">Graph</button>
                      </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>                            
                       
    </section>
    <script src="scripts.js"></script>
<body>                 