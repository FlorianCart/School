<!DOCTYPE html>

<?php 	include("menu.php");
		include("bdd.php");
	if(!isset($_SESSION['log'])){
	
	 header('Location: connexion.php');
	}
$_SESSION['modif_on']=0;
	
if(isset($_POST['update'])&&$_POST['update']=="Update"){

$id=$_SESSION['id'];
$nom = $_POST['nom'];
$prenom= $_POST['prenom'];
$naissance = $_POST['naissance'];
$sexe = $_POST['sexe'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$email = $_POST['email'];


			$verif = $bdd->prepare("SELECT email from utilisateur WHERE email='$email' AND id!='$id'");
			$verif->execute();
			if(!$verif->fetch()){
$sql_query = $bdd->prepare("UPDATE utilisateur SET nom='$nom',prenom='$prenom',naissance='$naissance',sexe='$sexe',ville='$ville',adresse='$adresse',cp='$cp',email='$email' WHERE id=".$_SESSION['id']);
			$sql_query->execute();
			if($sql_query){
				$_SESSION['id'] = $id;
				$_SESSION['nom']=$nom;
				$_SESSION['prenom']=$prenom;
				$_SESSION['naissance']=$naissance;
				$_SESSION['sexe']=$sexe;
				$_SESSION['adresse']=$adresse;  
				$_SESSION['ville']=$ville; 
				$_SESSION['cp']=$cp;
				$_SESSION['email']=$email; 
				$_SESSION['pseudo'] = $email;
				$_SESSION['modif_on']=0;
				echo "Modifications effectuées avec succès";
				}
			}
			else{
				echo "Cette adresse email est déjà utilisée";
			}

	
} ?>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Mon Compte - SchoolTool</title>
</head>

<body>

  <div class="container" id='bloc-accueil'>
		<div class="jumbotron">
		<p>Connecté en tant que <?php echo $_SESSION['prenom']?> </p>
		</div>
	</div>
	
<?php if(isset($_POST['modifier'])&&$_POST['modifier']=="Modifier"){
	
	$_SESSION['modif_on']=1;
	$id_real=$_SESSION['id'];
	$query = $bdd->prepare("SELECT * from utilisateur WHERE id='$id_real'");
	$query->execute();
	$row=$query->fetch();
?>
 <form action="account.php" method="post" enctype="multipart/form-data">
    <table style="margin-left:auto;margin-right:auto;">
    <tr>
    <td align="center"><a href="account.php">Retourner sur votre compte</a></td>
    </tr>
    <tr>
    <td><input type="text" name="nom" placeholder="Nom" value="<?php if(isset($row))echo $row['nom']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="prenom" placeholder="Prenom" value="<?php if(isset($row))echo $row['prenom']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="date" name="naissance" placeholder="Naissance" value="<?php if(isset($row))echo $row['naissance']; ?>" required /></td>
    </tr>
    <tr>
    <td>
	<select name="sexe" id="sexe" value="<?php if(isset($row))echo $row['sexe'];?>" required />
		<option value="homme" >Homme</option>
		<option value="femme">Femme</option>
	</select>
	</td>
    </tr>
    <tr>
    <td><input type="text" name="ville" placeholder="Ville" value="<?php if(isset($row))echo $row['ville']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="adresse" placeholder="Adresse" value="<?php if(isset($row))echo $row['adresse']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="number" min="1" max ="99999" name="cp" placeholder="Code Postal" value="<?php if(isset($row))echo $row['cp']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="email" name="email" placeholder="E-mail" value="<?php if(isset($row))echo $row['email']; ?>" required /></td>
    </tr>
	<tr>
	<td colspan="1" align="center"><button type="submit" name="update" class="btn btn-default" value="Update">Enregistrer</button></td>
	</tr>
	</table>
</form>
<?php } ?>
<?php if(isset($_SESSION['log'])&&$_SESSION['modif_on']==0){

	if (isset($_SESSION['pseudo'])){
	$upperLastName=  strtoupper($_SESSION['nom']);
    //echo 'Bonjour ' .$upperLastName.' '.$_SESSION['prenom']. ' (' . $_SESSION['pseudo'].')';
	}
	
//Tableau pour afficher les values
 ?>
  <form action="account.php" method="post" enctype="multipart/form-data">
   <table style="margin-left:auto;margin-right:auto;">	    
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
		<td colspan="1" align="center"><button type="submit" name="modifier" class="btn btn-default" value="Modifier">Modifier</button></td>

		</tr>

</table>
</form>
</br></br>
<?php } ?>
	
	<div class="container" id='bloc-accueil'>
		<div class="btn-group" role="group" aria-label="...">
		<?php if($_SESSION['modif_on']==0){?>
		<a href="deconnexion.php" class="btn btn-default" role="button">Se déconnecter</a>
		<?php } ?>
		</div>
	
	</div>
	

  </div>


</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

