<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/devoir.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Hind|Roboto" rel="stylesheet">
  
  <title>Devoirs - SchoolTool</title>
</head>

<body>

 <?php  include("menu.php") ?>

 
 <div id="parallax1" class="parallax-container" data-parallax="scroll" data-position="top" data-image-src="../image/big-dossier.jpg" data-natural-width="1200" data-natural-height="414">
    <div class="container" id='bloc-accueil'>
      <p>Vous bloquez sur un exercice ?</p> 
		
	</div>   
</div>


   <div id="texte-page-devoir">
    <p>Avec l'aide au devoirs, vous pourrez apprendre en échangeant avec d'autres personnes expérimentées !</p>
  </div>

 
<div id="selection-niveau">
<div id="niveau" class="container">
   <p>Sélectionnez votre niveau d'enseignement dans le menu déroulant ci-dessous : </p>
    <select id="selection" style="width:150px;"class="form-control">
        <option>Collège</option>
        <option>Lycée</option>
        <option>Université</option>
        <option>Supérieur</option>
	</select>
</div>
</div>



</body>

</html>


<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../parallax/parallax.js"></script>
