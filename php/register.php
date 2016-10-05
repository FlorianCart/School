<!DOCTYPE html>
<?php
include_once("bdd.php");
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['register']) && $_POST['register'] == 'Register') {
 $values=array();
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $naissance = $_POST['naissance'];
 $sexe = $_POST['sexe'];
 $adresse=$_POST['adresse'];
 $ville = $_POST['ville'];
 $cp = $_POST['cp'];
 $email = $_POST['email'];
 $mdp = $_POST['mdp'];
 $mdpconfirm = $_POST['mdpconfirm'];
 array_push($values,$nom,$prenom,$naissance,$sexe,$adresse,$ville,$cp,$email,$mdp,$mdp,$mdpconfirm);
 $con = ("INSERT INTO utilisateur(nom,prenom,naissance,sexe,adresse,ville,cp,email,mdp) VALUES('$nom','$prenom','$naissance','$sexe','$adresse','$ville','$cp','$email','$mdp')");
 
 if ($_POST['mdp'] != $_POST['mdpconfirm']) {
		echo "Les 2 mots de passe sont différents.";
	}
else{
	
	$c=0;
	foreach($values as $v){
		if(!empty($v)){
			
			$c++;
		}
	}
	//Pour le sexe
	if($c>1){
			
		try{
			$verif = $bdd->prepare("SELECT email from utilisateur WHERE email='$email'");
			$verif->execute();
			if(!$verif->fetch()){
			$req=$bdd->prepare($con);
			$req->execute();
			echo "Inscription réussie";
			}
			else{
			echo "Le mail est déjà utilisé";
			}
			
		}
		catch(Exception $e){
        die('Erreur : '.$e->getMessage());
		}
		
	}
	else{
		echo "Au moins un des champs est vide";
		}
}
 
}
?>

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
      <p>Veullez remplir tous les champs ci-dessous afin de procéder a votre inscription.</p>
    </div>
  </div>

<div class="container">
<form class="navbar-form navbar-left" role="search" action="register.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="nom" placeholder="Nom">
        <br><br>
        <input type="text" class="form-control" name="prenom" placeholder="Prénom">
        <br><br>
        <input type="date" class="form-control" name="naissance" placeholder="Date de naissance">
        <br><br>
		<!--<input type="text" class="form-control" name="sexe" placeholder="Sexe">-->
		<select name="sexe" id="sexe">
		<option value="homme" selected>Homme</option>
		<option value="femme">Femme</option>
		</select>
        <br><br>
        <input type="text" class="form-control" name="adresse" placeholder="Adresse">
        <br><br>
        <input type="text" class="form-control" name="ville" placeholder="Ville">
        <br><br>
        <input type="number_format" class="form-control" name="cp" placeholder="Code Postal">
        <br><br>
        <input type="email" class="form-control" name="email" placeholder="Mail">
        <br><br>
        <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
        <br><br>
        <input type="password" class="form-control" name="mdpconfirm" placeholder="Confirmez votre Mot de Passe">
    <br><br>
        <button type="submit" name="register" class="btn btn-default" value="Register">Submit</button>
    </div>
</form>
</div>

</body>
</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>