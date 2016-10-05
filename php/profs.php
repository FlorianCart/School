<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Les Professeurs - SchoolTool</title>
</head>

<body>
  
<?php  include("menu.php") ?>

  <div class="container" id='bloc-accueil'>

    <div class="jumbotron">
      <h2>Découvrez les "professeurs"</h2>
      <h4>Ce que nous appellons professeurs, ce sont les personnes étant disponibles pour vous aider sur un cours incompris, un exercice non résolu ou autre chose concernant vos connaissances.</h4>
    </div>

  </div>


  <div class='container'>

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

    <a href="devoir.php" class="btn btn-info" role="button">Voir les créneaux disponibles</a>

  </div>


</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>