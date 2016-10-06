<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/principe.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Hind|Roboto" rel="stylesheet">
  
  <title>Principe des Devoirs - SchoolTool</title>
</head>

<body>

<?php  include("menu.php") ?>


<div id="parallax1" class="parallax-container" data-parallax="scroll" data-position="middle" data-image-src="../image/devoir.jpg" data-natural-width="1620" data-natural-height="1080">
    <div class="container" id='bloc-accueil'>
      <p class="container">Aide aux devoirs</p> 
    </div>   
</div>

<div id="container-texte-accueil">  
  <div class="container" id="texte-accueil"><h1>Chaque professeur ou étudiant souhaitant aider, peut renseigner ses créneaux et matières principales, pour subvenir aux besoins d'un/des jeunes étudiants.<br> 
    L'objectif principal est de combler les lacunes et/ou difficultés sur de nombreuses matières, pour faciliter la réussite de chacun. Nous voulons la réussite pour TOUS.</h1>
  </div>
</div> 

  <div id="how-to" class='container'>
    <h3>Comment ca marche ?</h3>
  </div>

  <div class="container" id="howto-bloc">

	<div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <span class="titrebloc"><h3>Des étudiants ou professeurs</h3></span>
        <p>Des professeurs ou étudiants expérimentés peuvent proposer leurs services.</p>
        <p>Ils seront présents pour permettre à chaque élèves en difficulté, de s'en sortir afin de pouvoir réussir son année scolaire.</p>

      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-child" aria-hidden="true"></i>
        <span class="titrebloc"><h3>Une réussite</h3></span>
        <p>Il ne faut pas avoir honte de ses difficultés, c'est en se faisant aider que la réussite devient possible.</p>
        <p>C'est pourquoi l'aide aux devoirs va permettre à l'élève dans le besoin de plus facilement comprendre, et de ne pas stagner dans ses études.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-home" aria-hidden="true"></i>
        <span class="titrebloc"><h3>Se déplacer ? Vous décidez</h3></span>
        <p>Selon la préférence, et la distance séparant les deux interlocuteurs, ils peuvent se mettre d'accord pour faire le cours en vidéo conférence.</p>
        <p>La distance n'est donc plus un problème, vous n'avez plus d'excuses pour réussir.</p>
      </div>
    </div>
	
	<div class="col-md-12" id="bouton-trajets">
		<a href="devoir.php" class="btn btn-info" role="button">Accès aux cours disponibles</a>
	</div>
	
  </div>  
  
  



</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../parallax/parallax.js"></script>