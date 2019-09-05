<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Site Fédé</title>

		 <!--ICONE FAV, A AJOUTER-->
		<link rel="shortcut icon" type="image/icon" href="#"/>

		<!-- MAIN STYLE -->
		<link href="../style.css" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script language="javascript" type="text/javascript" src="assets/js/functions.js"></script>

		<link rel="shortcut icon" type="image/png" href="../../assets/img/favicon/favico.png"/>


	</head>

	<body>
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<!-- HEADER -->

		<div class="header-container">
			<img src="../../assets/img/houdain9.jpg" alt="img">
			<div class="header-text">
				<h1>Bienvenue sur le site Fédé</h1>
			</div>
			<div class="header-btn-area">
				<a class="header-btn" href="../users/connexion.php">Connexion</a>
				<a class="header-btn" href="../users/inscription.php">Inscription</a>
			</div>	
		</div>	

		<?php include("../navbar.php"); ?>



		<?php include("../footer.php"); ?>

	</body>
</html>

