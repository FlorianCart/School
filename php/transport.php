<!DOCTYPE html>
<html lang="en">
<?php include("bdd.php"); 
$req = $bdd->prepare('SELECT * FROM trajet, utilisateur where utilisateur.id=trajet.idu');
$req->execute();?>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/transport.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Transport - SchoolTool</title>
</head>

<body>



<?php  include("menu.php") ?>

  <div class="container">
    <div class="jumbotron">
      <p><span class="fa fa-bus" aria-hidden="true"></span> Voici les offres de transport disponibles actuellement</p>

    </div>
  </div>





  <div class='container'>

<div class="row">
    
         <?php $result = $req->fetchAll();
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
            <p> <a href="#" class="btn btn-default" role="button">Réserver</a></p>
          </div>
        </div>
      </div>

  <?php } ?>
    </div>
  
  </div>
      

</body>

</html>

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>