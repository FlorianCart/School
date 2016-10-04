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



  <nav class="navbar navbar-default navbar-static-top">

    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
          </button>

        <a class="navbar-brand" id="branding" href="main.php">SchoolTool</a>

      </div>
      <div id="navbar" class="navbar-collapse collapse">

        <ul class="nav navbar-nav">

          <li><a href="main.php">Accueil</a></li>
          <li class='active'><a href="transport.php">Transport</a></li>
          <li><a href="devoir.php">Aide aux devoirs</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fonctionnement<span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li class="dropdown-header">Le transport à l'école</li>
              <li><a href="transport-how.php">Comment ça marche ?</a></li>
              <li><a href="register.php">Devenir conducteur</a></li>

              <li role="separator" class="divider"></li>

              <li class="dropdown-header">Aide aux devoirs</li>
              <li><a href="principe.php">Principes</a></li>
              <li><a href="profs.php">Les "Professeurs"</a></li>
              <li><a href='#'>Les élèves</a></li>

            </ul>
          </li>
          <li><a href='quinoussommes.php'>A propos</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
          <li class="active"><a href="connexion.php"><i class="fa fa-user" aria-hidden="true"></i> Mon compte</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right visible-sm visible-xs">
          <li class="active"><a href="connexion.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="jumbotron">
      <p><span class="fa fa-bus" aria-hidden="true"></span> Voici les offres de transport disponibles actuellement</p>

    </div>
  </div>






    
         <?php $result = $req->fetchAll();
foreach($result as $unResultat)
  { ?>
  <div class='container'>
<div class="row">
      <div class="col-sm-4 col-md-4">
        <div class="thumbnail">
        
          <div class="caption">
    

          <h3><?php     echo "<td>".$unResultat["depart"]."</td>"; ?> <i class="fa fa-arrow-right" aria-hidden="true"></i> <?php     echo "<td>".$unResultat["arrivee"]."</td>"; ?></h3>
            <p><i class="fa fa-user" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["prenom"]."</td>"; ?></p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php     echo "<td>".$unResultat["horaire"]."</td>"; ?></p>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["email"]."</td>"; ?></p>
             <p><i class="fa fa-clock-o" aria-hidden="true"></i> : <?php     echo "<td>".$unResultat["telephone"]."</td>"; ?></p>
            <p><a href="#" class="btn btn-primary" role="button">+ d'infos</a> <a href="#" class="btn btn-default" role="button">Réserver</a></p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php } ?>
      

</body>

</html>

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>