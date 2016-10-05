<!DOCTYPE html>
<?php 
include("menu.php");
//Si on veut se connecter
if(isset($_POST['valider'])){
$pass_hache = $_POST['pass'];
$pseudo = $_POST['pseudo'];

include("bdd.php");
// Vérification des identifiants
$req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :pseudo AND mdp = :pass');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));
$resultat = $req->fetch();

//Pour l'admin
$req2 = $bdd->prepare('SELECT * FROM admin WHERE email = :pseudo AND mdp = :pass');
$req2->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));
$resultat2 = $req2->fetch();

if (!$resultat && !$resultat2){
	echo "Mauvais identifiant ou mot de passe !";
	}
else{
	if($resultat2){
		echo "connecté en tant qu administrateur";
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['fonction']="administrateur";
		$_SESSION['pseudo'] = $pseudo;
		echo $_SESSION['fonction']."dd";
	}
	else{
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['fonction']="utilisateur";
		$_SESSION['pseudo'] = $pseudo;
		echo 'Vous êtes connecté ! ';
	} 
}
if($resultat || $resultat2){
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
	
	}
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

<?php if(!isset($_SESSION['log'])){ ?>

<div class="container">
    
</div>
<div class="container">
    <form class="navbar-form" method="post">
        <div class="form-group">
            <input  name="pseudo" class="form-control" placeholder="Email" type="email">
            <br><br>
            <input name="pass" type="password"  class="form-control" placeholder="Mot de passe">
            <br><br>
            <button type="submit" name="valider" class="btn btn-default">Submit</button>
        </div>
    </form>

</div>
<?php }
?> 
<?php if(isset($_SESSION['log'])){
	
	if (isset($_SESSION['pseudo'])){
		
	$upperLastName=  strtoupper($_SESSION['nom']);
    echo 'Bonjour ' .$upperLastName.' '.$_SESSION['prenom']. ' (' . $_SESSION['pseudo'].')';

}
	
//Tableau pour afficher les values
 ?>
   <table>    
        <tr>
			<th>Nom</th>
			<td><?php echo $upperLastName ?></td>
        </tr>
		<tr>
			<th>Prenom</th>
			<td><?php echo $_SESSION['prenom']; ?></td>
       </tr>
		<tr>
			<th>Naissance</th>
			<td><?php echo $_SESSION['naissance'];  ?></td>
		</tr>
		<tr>
			<th>Sexe</th>
			<td><?php echo $_SESSION['sexe'];  ?></td>
		</tr>
		<tr>
			<th>Ville</th>
			<td><?php echo $_SESSION['ville'];  ?></td>
		</tr>
		<tr>
			<th>Adresse</th>
			<td><?php echo $_SESSION['adresse'];  ?></td>
		</tr>
		<tr>
			<th>Code Postal</th>
			<td><?php echo $_SESSION['cp'];  ?></td>
		</tr>
		<tr>
			<th>E-mail</th>
			<td><?php echo $_SESSION['email'];  ?></td>
		</tr>
		<tr>
		<td colspan="1" align="center"><a href="javascript:edt_id('<?php echo $_SESSION['id']; ?>')">Modifier le Profil</a></td>
		</tr>

</table>
<?php } ?>
</body>
</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
