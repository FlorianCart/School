<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <title>SchoolTool</title>
</head>

<body>
  
<?php  include("menu.php");
	if(isset($_SESSION['ok'])){?>

  <div class="container" id='confirm-inscription'>

    <div class="alert alert-success" role="alert"><strong>Félicitations !</strong> Votre inscription est validée</div>
	<a href="../index.php">Revenir à l'accueil</a>

  </div>
	<?php } 
	
		else{
			
			header('Location: register.php');
		}
		?>


  <div class="container" id="reassurance-bloc">

    

  </div>


</body>

</html>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>