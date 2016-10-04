<!DOCTYPE html>
<?php 
// Hachage du mot de passe
$pass_hache = $_POST['pass'];
$pseudo = $_POST['pseudo'];
include("bdd.php");
// Vérification des identifiants
$req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :pseudo AND mdp = :pass');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));
$resultat = $req->fetch();
$req2 = $bdd->prepare('SELECT * FROM admin WHERE email = :pseudo AND mdp = :pass');
$req2->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));

$resultat2 = $req2->fetch();


$resultat2 = $req2->fetch();



if (!$resultat && !$resultat2)
{
   
}
else
{
    
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>Connexion - SchoolTool</title>
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
  

<?php if (empty($_SESSION['pseudo']))
{ ?><div class="container">
    
</div>
<div class="container">
    <form class="navbar-form" method="post">
        <div class="form-group">
            <input  name="pseudo" class="form-control" placeholder="Email" type="email">
            <br><br>
            <input type="password" name="pass" class="form-control" placeholder="Mot de passe">
            <br><br>
            <button type="submit" name="valider" class="btn btn-default">Submit</button>
        </div>
    </form>

</div>
<?php } 
if(isset($_POST['valider']))
{

if (!$resultat && !$resultat2)
{
    echo 'Mauvaiss identifiant ou mot de passe !';
    
}
else if($resultat2)
{
  echo "connecté en tant qu administrateur";
  $_SESSION['id'] = $resultat['id'];
    $_SESSION['fonction']="administrateur";
    $_SESSION['pseudo'] = $pseudo;
    echo $_SESSION['fonction']."dd";
}
else
{
  
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['fonction']="utilisateur";
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}
if (isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}}?>
</body>
</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
