<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Hind|Roboto" rel="stylesheet">

  <title>Accueil - SchoolTool</title>
</head>

<body>

<?php include("menu.php") ?>
  
  <div class="container">

    <div class="jumbotron" id='bloc-accueil'>
      <p>Bonjour et bienvenue sur SchoolTool. Le service d'aide à la personne dans le domaine scolaire, pour faciliter le déplacement, et l'apprentissage à chacun.</p>
    </div>
    
    <div class="col-md-12" id="boutons-main">
      
    <div class="btn-group" id='bouton-connect' role="group" aria-label="...">
      <a href="connexion.php" class="btn btn-default btn-lg" role="button">Se connecter</a>
    </div>
    <div class="btn-group" id='bouton-register' role="group" aria-label="...">
      <a href="register.php" class="btn btn-success btn-lg" role="button">S'inscrire</a>
    </div>
    
    </div>

  </div>


  <div class="container" id="reassurance-bloc">
    <div class="row">
      
    
    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-car" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Co-voiturage</h3></span>
        <p>Amenez vos enfants et ceux de vos voisins<br>pour plus de liberté !</p>
        <button a href='transport.php' type="button" class="btn btn-info">Trajets Disponibles</button>
      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-book" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Aide aux devoirs</h3></span>
        <p>Progressez durant votre année scolaire<br>grâce a l'entraide scolaire !</p>
        <button a href='register.php' type="button" class="btn btn-info">Devenir prof ou élève</button>
      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-wifi" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Chez vous ou a distance</h3></span>
        <p>La distance n'est plus un problème<br>avec la visio-conférence !</p>
        <button a href='#' type="button" class="btn btn-info">+ d'infos</button>
      </div>
    </div>

    </div>
  </div>


</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>