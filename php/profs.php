<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/profs.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Hind|Roboto" rel="stylesheet">

  <title>Les Professeurs - SchoolTool</title>
</head>

<body>
  
<?php  include("menu.php") ?>

<div id="parallax1" class="parallax-container" data-parallax="scroll" data-position="middle" data-image-src="../image/prof.png" data-natural-width="1989" data-natural-height="877">
    <div class="container" id='bloc-accueil'>
      <p class="container">Découvrez les professeurs</p> 
    </div>   
</div>

<div id="container-texte-accueil">  
  <div class="container" id="texte-accueil"><h1>Ce que nous appellons professeurs, ce sont les personnes étant disponibles pour vous aider sur un cours incompris, un exercice non résolu ou autre chose concernant vos connaissances.</h1>
  </div>
</div> 

  <div id="how-to" class='container'>
    <h3>Comment ca marche ?</h3>
  </div>

<div class="container" id="howto-bloc">

    <div class="col-md-6">
      <div class="bordure">
        <i class="fa fa-map" aria-hidden="true"></i>
        <span class="titrebloc"><h3>À domicile</h3></span>
        <p>Le professeur se rend directement chez vous.</p>
        <p>Convenez ensemble d'une date afin de vous rencontrer directement.</p>

      </div>
    </div>

    <div class="col-md-6">
      <div class="bordure">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <span class="titrebloc"><h3>À distance</h3></span>
        <p>La distance vous séparant est trop importante ?</p>
        <p>Effectuez une vidéo-conférence avec un professeur et échangez sans limites.</p>

      </div>
    </div>

	<div class="col-md-12" id="bouton-cours">
		<a href="devoir.php" class="btn btn-info" role="button">Voir les créneaux disponibles</a>
	</div>
	
</div>  

 

</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../parallax/parallax.js"></script>