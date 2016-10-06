<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Hind|Roboto" rel="stylesheet">

  <title>Accueil - SchoolTool</title>
</head>

<body>

<?php include("php/menuindex.php") ?>
  

<div id="parallax1" class="parallax-container" data-parallax="scroll" data-position="middle" data-image-src="../image/soutien-scolaire.jpg" data-natural-width="1800" data-natural-height="1050">
    <div class="container" id='bloc-accueil'>
      <p class="container">Réussir ensemble</p> 
    </div>   
</div>

<div id="container-texte-accueil">  
  <div class="container" id="texte-accueil"><h1>Le service d'aide à la personne dans le domaine scolaire, pour faciliter le déplacement, et l'apprentissage à chacun.</h1>
  </div>
</div> 

<?php if(!isset($_SESSION['log'])){?>
<div id="whale">

 <div class="container" id="whale2">
  <div class="col-md-12" id="boutons-main">
    
    <div class="btn-group" id='bouton-connect' role="group" aria-label="...">
      <a id="bouton-connexion" href="php/connexion.php" class="btn btn-default btn-lg" role="button">Se connecter</a>
    </div>
    <div class="btn-group" id='bouton-register' role="group" aria-label="...">
      <a id="bouton-inscrit" href="php/register.php" class="btn btn-success btn-lg" role="button">S'inscrire</a>
    </div>
<?php }?>
    
    </div>
 </div>
  <div class="container" id="reassurance-bloc">
    <div class="row">
      
    
    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-car" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Covoiturage</h3></span>
        <p>Amenez vos enfants et ceux de vos voisins<br>a l'école pour plus de liberté !</p>
        <a href='php/transport.php' type="button" class="btn btn-info">Trajets Disponibles</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-book" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Aide aux devoirs</h3></span>
        <p>Progressez durant votre année scolaire<br>grâce a l'entraide scolaire !</p>
        <a href='php/register.php' type="button" class="btn btn-info">Devenir prof ou élève</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-wifi" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Chez vous ou à distance</h3></span>
        <p>La distance n'est plus un problème<br>avec la visio-conférence !</p>
        <a href='php/principe.php' type="button" class="btn btn-info">+ d'infos</a>
      </div>
    </div>

    </div>
  </div>

  
</div>  

  
</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../parallax/parallax.js"></script>
