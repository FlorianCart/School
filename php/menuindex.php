<link rel="stylesheet" href="../css/menu.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Dosis|Hind|Raleway|Roboto" rel="stylesheet">

<?php session_start(); ?>
<nav id="navtotal" class="navbar navbar-default navbar-fixed-top">

    <div class="container" id="navbar-total">

      <div class="navbar-header">
        <button id="bouton-resp" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
          </button>

        <a class="navbar-brand" id="marque" href="index.php"><p>SchoolTool</p></a>

      </div>
      <div id="navbar" class="navbar-collapse collapse">

        <ul class="nav navbar-nav">

          <li><a href="index.php">Accueil</a></li>
          <li><a href="php/transport.php">Transport</a></li>
          <li><a href="php/devoir.php">Aide aux devoirs</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fonctionnement<span class="caret"></span></a>
            <ul id="dropdown-texte" class="dropdown-menu">

              <li class="dropdown-header">Le transport à l'école</li>
              <li><a href="php/transport-how.php">Comment ça marche ?</a></li>
              <li><a href="php/register.php">Devenir conducteur</a></li>

              <li class="dropdown-header">Aide aux devoirs</li>
              <li><a href="php/principe.php">Principes</a></li>
              <li><a href="php/profs.php">Les "Professeurs"</a></li>

            </ul>
          </li>
          <li><a href='php/quinoussommes.php'>A propos</a></li>
        </ul>

        <ul id="compte" class="nav navbar-nav navbar-right hidden-sm hidden-xs">
          <li><a href="php/account.php">Mon compte <i class="fa fa-user fa-fw" aria-hidden="true"></i></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right visible-sm visible-xs">
          <li><a href="php/account.php"><i class="fa fa-user fa-fw" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>