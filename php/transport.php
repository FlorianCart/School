<!DOCTYPE html>
<html lang="en">
<?php   include("bdd.php"); 
$req = $bdd->prepare('SELECT * FROM trajet, utilisateur where utilisateur.id=trajet.idu and etat=1');
$req->execute();
$req2 = $bdd->prepare('SELECT * FROM trajet, utilisateur where utilisateur.id=trajet.idu and etat=0');
$req2->execute();
?>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/transport.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Hind|Roboto" rel="stylesheet">
  
  <title>Transport - SchoolTool</title>
</head>

<body>



<?php  include("menu.php"); ?>

  
	<div id="dispo-texte" class="container">
      <p><span class="fa fa-bus" aria-hidden="true"></span><h1>Voici les offres de transport disponibles actuellement</h1></p>
	</div>
  

  <div class='container'>

<div class="row">
    
         <?php $result = $req->fetchAll();
         $result2 = $req2->fetchAll();
foreach($result as $unResultat)
  { ?>
      <div class="col-sm-4 col-md-4">
        <div class="thumbnail">
        
          <div class="caption">
    

          <h3><?php     echo "<td>".$unResultat["depart"]."</td>"; ?> <i class="fa fa-arrow-right" aria-hidden="true"></i> <?php     echo "<td>".$unResultat["arrivee"]."</td>"; ?></h3>
            <p><i class="fa fa-user" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["prenom"]."</td>"; ?></p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php     echo "<td>".$unResultat["horaire"]."</td>"; ?></p>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["email"]."</td>"; ?></p>
             <p><i class="fa fa-clock-o" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["telephone"]."</td>"; ?></p>
            <p>  <form class="navbar-form" method="get" action ="reserved.php">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php     echo $unResultat["id_trajet"]; ?>">
            <button type="submit" name="reserver" class="btn btn-default">Réserver</button>
        </div>
    </form></p>
          </div>
        </div>
      </div>

  <?php } ?>
    </div>
  
  </div>
  
   
    <div id="indispo-texte" class="container">
      <p><span class="fa fa-bus" aria-hidden="true"></span><h1>Voici les offres de transport déja réservées</h1></p>
    </div>
 
    <div class='container'>

<div class="row">
    
         <?php foreach($result2 as $unResultat)
  { ?>
      <div class="col-sm-4 col-md-4">
        <div class="thumbnail">
        
          <div class="caption">
    

          <h3><?php     echo "<td>".$unResultat["depart"]."</td>"; ?> <i class="fa fa-arrow-right" aria-hidden="true"></i> <?php     echo "<td>".$unResultat["arrivee"]."</td>"; ?></h3>
            <p><i class="fa fa-user" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["prenom"]."</td>"; ?></p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php     echo "<td>".$unResultat["horaire"]."</td>"; ?></p>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["email"]."</td>"; ?></p>
             <p><i class="fa fa-clock-o" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["telephone"]."</td>"; ?></p>
            <p>  <form class="navbar-form" method="get" action ="reserved.php">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php     echo $unResultat["id"]; ?>">
            <button type="submit" name="reserver" class="btn btn-default">Trop tard</button>
        </div>
    </form></p>
          </div>
        </div>
      </div>

  <?php } ?>
    </div>
  
  </div>
      

</body>
<?php 
if(isset($_POST['reserver']))
{

}
?>
</html>

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
