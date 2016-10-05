<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Accueil - SchoolTool</title>
</head>

<body>

<?php  include("menu.php") ?>
  
  <div class="container" id='bloc-accueil'>

    <div class="jumbotron">
      <p>Bonjour et bienvenue sur SchoolTool. Le service d'aide à la personne dans le domaine scolaire, pour faciliter le déplacement, et l'apprentissage à chacun.</p>
    </div>

    <div class="btn-group" role="group" aria-label="...">
      <a href="connexion.php" class="btn btn-default" role="button">Se connecter</a>
    </div>
    <div class="btn-group" role="group" aria-label="...">
      <a href="register.php" class="btn btn-success" role="button">S'inscrire</a>
    </div>

  </div>


  <div class="container" id="reassurance-bloc">

    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-car" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Co-voiturage</h3></span>
        <p>Amenez vos enfants et ceux de vos voisins pour plus de liberté !</p>
        <button a href='transport.php' type="button" class="btn btn-info">Trajets Disponibles</button>
      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-book" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Aide aux devoirs</h3></span>
        <p>Progressez durant votre année scolaire grâce a l'entraide scolaire !</p>
        <button a href='register.php' type="button" class="btn btn-info">Devenir prof ou élève</button>
      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-wifi" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Chez vous ou a distance</h3></span>
        <p>La distance n'est plus un problème avec la visio-conférence !</p>
        <button a href='#' type="button" class="btn btn-info">+ d'infos</button>
      </div>
    </div>

  </div>


</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>