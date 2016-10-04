<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Principe des Devoirs - SchoolTool</title>
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

        <a class="navbar-brand" id="branding" href="principe.php">SchoolTool</a>

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
              <li class="active"><a href="principe.php">Principes</a></li>
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

  <div class="container" id='bloc-principe'>

    <div class="jumbotron">
      <h2>Le principe de l'aide aux devoirs est simple.</h2>

      <h4>L'aide aux devoirs devient simple grâce à SchoolTool</h4>
    </div>

  </div>

  <div class='container'>

    <p>Chaque professeur ou Etudiant souhaitant aider, peut inscrire ses créneaux et matières principales, pour subvenir aux besoins d'un/des jeunes étudiants. </p>
    <p>L'objectif principal est d'aider les nombreuses lacunes et/ou difficultés sur de nombreuses matières, pour faciliter la réussite de chacun. Nous voulons la réussite pour TOUS.</p>
    <h3>Comment ca marche ?</h3>
  </div>
  <br>
  <div class="container" id="howto-bloc">

    <div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <span class="titrebloc"><h3>Des étudiants ou professeurs</h3></span>
        <p>Des professeurs ou étudiants expérimentés peuvent proposer leurs services.</p>
        <p>Ils seront présents pour permettre à chaque élèves en difficulté, de s'en sortir et réussir son année scolaire.</p>

      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-check-circle" aria-hidden="true"></i>
        <span class="titrebloc"><h3>Une réussite</h3></span>
        <p>Il ne faut pas avoir honte de ses difficultés, c'est en se faisant aider que la réussite devient possible.</p>
        <p>C'est pourquoi l'aide aux devoirs va permettre à l'élève dans le besoin de plus facilement comprendre, et de ne pas stagner dans ses études.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="bordure">
        <i class="fa fa-check-circle" aria-hidden="true"></i>
        <span class="titrebloc"><h3>Se déplacer ? Cela dépend de vous.</h3></span>
        <p>Selon la préférence, et la distance séparant les deux interlocuteurs, ils peuvent se mettre d'accord pour faire le cours en vidéo conférence.</p>
        <p>La distance n'est donc plus un problème, vous n'avez plus d'excuses pour réussir.</p>
      </div>
    </div>


    <div class="btn-group" role="group" aria-label="...">
      <a href="devoir.php" class="btn btn-info" role="button">Accès au cours disponible</a>
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