<!DOCTYPE html>
<?php 
include("menu.php");
include("bdd.php");

//Si on veut se connecter
if(isset($_POST['valider'])){
$pass = $_POST['pass'];
$pseudo = $_POST['pseudo'];

// Vérification des identifiants
$req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :pseudo AND mdp = :pass');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass));
$resultat = $req->fetch();

//Pour l'admin
$req2 = $bdd->prepare('SELECT * FROM admin WHERE email = :pseudo AND mdp = :pass');
$req2->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass));
$resultat2 = $req2->fetch();

if (!$resultat && !$resultat2){
	echo 'Mauvais identifiant ou mot de passe !';
	}
else{
	//récupération des values in bdd de l'user
	$_SESSION['log']=1;
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
	$_SESSION['nom']=$resultat['nom'];
	$_SESSION['prenom']=$resultat['prenom'];
	$_SESSION['naissance']=$resultat['naissance'];
	$_SESSION['sexe']=$resultat['sexe'];
	$_SESSION['adresse']=$resultat['adresse'];  
	$_SESSION['ville']=$resultat['ville']; 
	$_SESSION['cp']=$resultat['cp'];
	$_SESSION['email']=$resultat['email']; 
	$_SESSION['categorie']=$resultat['categorie']; 
	
		if($resultat2){
		echo "connecté en tant qu administrateur";
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['pseudo'] = $pseudo;
		echo $_SESSION['categorie']."dd";
		header('Location: account.php');
		}
		else{
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['pseudo'] = $pseudo;
		header('Location: account.php');
		}
	
}
	
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/connexion.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>Connexion - SchoolTool</title>
</head>

<body>
<?php

if(!isset($_SESSION['log'])){ ?>

<div class="container">
  <div id="message-connexion" class="panel panel-info">
  <div class="panel-heading">
	<h3 class="panel-title">Connexion</h3>
  </div>
  <div class="panel-body">
	<p>Veuillez vous identifier ci-dessous.</p>
  </div>
  </div>
</div>

<div  class="container">
    <form id="logs" class="navbar-form" method="post">
        <div  class="form-group">
            <input  name="pseudo" class="form-control" placeholder="Email" type="email">
            <br><br>
            <input name="pass" type="password"  class="form-control" placeholder="Mot de passe">
            <br><br>
            <button type="submit" name="valider" class="btn btn-default">Submit</button>
        </div>
    </form>

</div>
<?php }  
else{
	header('Location: account.php');
}


?>
</body>
</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
