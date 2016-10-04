<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Inscription - SchoolTool</title>
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
      <p>Veullez remplir tous les champs ci-dessous afin de procéder a votre inscription.</p>
    </div>
  </div>

  <<<<<<< HEAD <div class="container">
    <form class="navbar-form navbar-left" role="search" method="post">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Nom" name="nom"> =======
        <div class="container">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nom"> >>>>>>> origin/master
              <br><br>
              <input type="text" class="form-control" placeholder="Prénom" name="prenom">
              <br><br>
              <input type="text" class="form-control" placeholder="Date de naissance">
              <br><br>
              <input type="text" class="form-control" placeholder="Adresse">
              <br><br>
              <input type="text" class="form-control" placeholder="Ville">
              <br><br>
              <input type="text" class="form-control" placeholder="Code Postal">
              <br><br>
              <input type="text" class="form-control" placeholder="Mail">
              <br><br>
              <input type="text" class="form-control" placeholder="Confirmez votre mail">
              <br><br>
              <input type="text" class="form-control" placeholder="Mot de passe">
              <br><br>
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </form>
        </div>

</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>