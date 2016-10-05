<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>Mon Compte - SchoolTool</title>
</head>

<body>

 <?php  include("menu.php");
	if(!isset($_SESSION['log'])){
	
	 header('Location: connexion.php');
	}
	?>
  <div class="container" id='bloc-accueil'>

    <div class="jumbotron">
      <p>Connecté en tant que <?php echo $_SESSION['prenom']?> </p>
    </div>

    <div class="btn-group" role="group" aria-label="...">
      <a href="deconnexion.php" class="btn btn-default" role="button">Se déconnecter</a>
    </div>

  </div>


  <div class="container" id="reassurance-bloc">
	
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
    

  </div>


</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
0
