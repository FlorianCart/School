<!DOCTYPE html>
<html lang="en">
<?php include("bdd.php"); 
$req = $bdd->prepare('UPDATE trajet
SET etat = 0
WHERE id_trajet='.$_GET['id'].';');
$req->execute();?>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/transport.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Réservation réussie</title>
</head>

<body>


<?php  include("menu.php") ?>

  <div class="container">
  <h1> Réservation réussie<h1>
    <div class="jumbotron">

      <p><span class="fa fa-bus" aria-hidden="true">
Votre rendez-vous à bien était réservé.
      	
      </span></p>
<a href="index.php">Retour à l'accueil </a>

    </div>
  </div>





  <div class='container'>

<div class="row">
    

    </div>
  
  </div>
      

</body>

</html>

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>