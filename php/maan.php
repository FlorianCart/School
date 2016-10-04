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

  <nav class="navbar navbar-default navbar-static-top">

    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
          </button>

        <a class="navbar-brand" id="branding" href="maan.php">SchoolTool</a>

      </div>
      <div id="navbar" class="navbar-collapse collapse">

        <ul class="nav navbar-nav">

          <li class='active'><a href="maan.php">Accueil</a></li>
          <li><a href="transport.php">Transport</a></li>
          <li><a href="devoir.php">Aide aux devoirs</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fonctionnement<span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li class="dropdown-header">Le transport à l'école</li>
              <li><a href="#">Comment ça marche ?</a></li>
              <li><a href="register.php">Devenir conducteur</a></li>

              <li role="separator" class="divider"></li>

              <li class="dropdown-header">Aide aux devoirs</li>
              <li><a href="#">Principes</a></li>
              <li><a href="#">Les "Professeurs"</a></li>
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
        <button type="button" class="btn btn-info">Trajets Disponibles</button>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-book" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Aide aux devoirs</h3></span>
        <p>Progressez durant votre année scolaire graçe a l'entraide scolaire !</p>
        <button type="button" class="btn btn-info">Devenir prof ou élève</button>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="bordure">
        <span class="fa fa-wifi" aria-hidden="true"></span>
        <span class="titrebloc"><h3>Chez vous ou a distance</h3></span>
        <p>La distance n'est plus un problème avec la visio-conférence !</p>
        <button type="button" class="btn btn-info">+ d'infos</button>
      </div>
    </div>
    
  </div>


</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>