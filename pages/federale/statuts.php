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

	</head>

	<body>
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>

		<div class="container"> <!-- upload files -->
			<div class="container">			
				<div class="page-header">
					<h1>Mise à jour des Statuts </h1>
					<h2 >seul le comité fédé et la commission web voient l'outil d'upload</h2>
					<h2 >Le fichier que tu upload remplace le précédent</h2>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="uploadstatuts.php">
							<div class="form-group">
								<label for="exampleInputFile">Select file to upload:</label>
								<input type="file" id="exampleInputFile" name="files[]" >
								<p class="help-block"><span class="label label-info">Note:</span> Please, select a pdf file</p>
							</div>			
							<button type="submit" class="btn btn-primary" name="btnSubmit" >Upload</button>
						</form>
						<br/>
						<label for="Progressbar">Progress:</label>
						<div class="progress" id="Progressbar">
							<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="divProgressBar">
								<span class="sr-only">45% Complete</span>
							</div>						
						</div>
						<div id="status">
						</div>
					</div>
				</div>
			</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){			
				
				var divProgressBar=$("#divProgressBar");
				var status=$("#status");
				
				$("#uploadForm").ajaxForm({
					
					dataType:"json",
					
					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},
					
					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},
					
					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>

		</div>

		<div class="container">			
			<div class="page-header">
				<h1>Statuts de la fédérale </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<br/>
					<?php 
						$conn = mysqli_connect("localhost","root","","bdd_site_fede");
						
						$query = "SELECT * FROM statuts ORDER BY `statuts_name` DESC LIMIT 1";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$url = $row["statuts_path"]."/".$row["statuts_name"];
					?>
								<li> <a href="<?php echo $url; ?>" target="_blank"> <?php echo $row["statuts_name"]  ?> </a> </li>
					<?php
							}
						}
						else
						{
					?>
						<p>Il n'y a pas de statuts enregistrés</p>
					<?php
						}
					?>					
				</div>
			</div>
		</div>

		<div class="container">			
			<div class="page-header">
				<h1>Historique des statuts </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<br/>
					<?php 
						$conn = mysqli_connect("localhost","root","","bdd_site_fede");
						
						$query = "SELECT * FROM statuts ORDER BY `statuts_name` DESC ";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$url = $row["statuts_path"]."/".$row["statuts_name"];
					?>
								<li> <a href="<?php echo $url; ?>" target="_blank"> <?php echo $row["statuts_name"]  ?> </a> </li>
					<?php
							}
						}
						else
						{
					?>
						<p>Il n'y a pas de statuts enregistrés</p>
					<?php
						}
					?>					
				</div>
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>	


		<?php include("../footer.php"); ?>

	</body>
</html>

