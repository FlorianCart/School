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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>Inscription - SchoolTool</title>
</head>
<body>


  <?php  include("menu.php") ?>
  

<div class="container">
  <div id="message-inscription" class="panel panel-info">
  <div class="panel-heading">
	<h3 class="panel-title">Inscription</h3>
  </div>
  <div class="panel-body">
	<p>Veullez remplir tous les champs ci-dessous afin de procéder a votre inscription.</p>
  </div>
  </div>
</div>

<div id="champs" class="container">
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
