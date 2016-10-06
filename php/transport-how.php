<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/transport-how.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Hind|Roboto" rel="stylesheet">
  
  <title>Comment ca marche - Transport - SchoolTool</title>
</head>

<body>


<?php  include("menu.php") ?>

<div id="parallax1" class="parallax-container" data-parallax="scroll" data-position="middle" data-image-src="../image/covoite.jpg" data-natural-width="1320" data-natural-height="698">
    <div class="container" id='bloc-accueil'>
      <p>Covoiturage</p> 
		<h1>Le "bus scolaire" partagé entre particuliers !</h1>
	</div>   
</div>


  <div id="texte-page-covoit">
    <p>Avec le service de covoiturage scolaire, vous pourrez confier le trajet Maison - Ecole<br>à l'un de vos voisins ou bien un autre parent déposant son enfant a la même école que vous.</p>
  </div>

  
  <div id="how-to" class='container'>
    <h3>Comment ca marche ?</h3>
  </div>

  <div class="container" id="howto-bloc">

    <div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-map" aria-hidden="true"></i>
        <span class="titrebloc"><h3>Prévoyez votre trajet</h3></span>
        <p>Consultez les trajets disponibles ainsi que la disponibilité.</p>
        <p> Vous n'aurez plus a affronter les bouchons du matin, le conducteur se charge de tout.</p>

      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <span class="titrebloc"><h3>En route vers l'école</h3></span>
        <p>Une fois votre trajet réservé, il ne vous reste plus qu'a attendre.</p>
        <p>Le conducteur passera chez vous a l'heure prévue pour récuperer votre enfant.</p>

      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-check-circle" aria-hidden="true"></i>
        <span class="titrebloc"><h3>Un voyage sans accros</h3></span>
        <p>Tous les enfants a bord sont sous la responsabilité du conducteur.</p>
        <p>Une fois arrivé, le conducteur confirme sur son compte que les enfants ont bien étés déposés.</p>
      </div>
    </div>
	
	<div class="col-md-12" id="bouton-trajets">
		<a href="transport.php" class="btn btn-info" role="button">Consulter les trajets disponibles</a>
	</div>
	
  </div>



</body>

</html>

<!-- Scripts -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../parallax/parallax.js"></script>