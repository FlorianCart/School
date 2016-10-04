<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/transport.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Comment ca marche - Transport - SchoolTool</title>
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
          <li><a href="transport.php">Transport</a></li>
          <li><a href="devoir.php">Aide aux devoirs</a></li>

          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fonctionnement<span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li class="dropdown-header">Le transport à l'école</li>
              <li><a href="transport-how.php">Comment ça marche ?</a></li>
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


  <div class="container">
    <div class="jumbotron">
      <p>Covoiturage</p>
      <p>Le bus scolaire partagé entre particuliers !</p>
    </div>
  </div>
  
  <div class='container'>
  <p>Avec le service de covoiturage scolaire, vous pourrez confier le trajet Maison - Ecole a l'un de vos voisins ou bien un autre parent déposant son enfant a la même école que vous.</p>
  </div>
    
  <div class='container'>
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
    
  </div>

</body>

</html>

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>