<?php
session_start();
?>

<?php include("../../model/dao/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html>
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
    <?php include("../navbar.php"); ?>

    <div class = container style="padding-top: 3rem">
        <div class = row>
            <div class = "col-md-7">

                <div class="col-md-10 hidden-xs" style="padding-top: 6rem;">

                    <img class="logo" src='../../assets/img/contourlogo.jpg' style="width:70%;display: block; margin: 0 auto;" alt='Logo du site !'/>

                </div>
            </div>

            <div class = 'col-md-5 inscription'>
                
            <h2 class="connexionh2">Connexion</h2>

            <p class="connexionp">Accédez à votre compte</p> <br />

            <form class='connexionformulaire' method='post' action=''>    

            <p>
                <input class='connexionchamp' type='text' id='pseudoco'  name='pseudoco' placeholder='Pseudo' maxlength='25' size='45' required />
            </p>

            <p>
                <input class='connexionchamp' type='password' id='passco' name='passco' placeholder='Mot de passe' maxlength='25' size='45' required/>
            </p>

            <p>
                <br />
                <input type='submit' class = 'btn' name='formco' value="Se connecter" />
                <br />
            </p>   

            <?php

            if(isset($erreur))
            {
                echo $erreur;
            }
            
            ?>

            <br />
            <br />
            <a href='inscription.php' id="lieninscri">Pas encore inscrit ? N'attendez plus !</a>

        </form>

            </div>
        </div>
    </div>

    <?php include("../footer.php"); ?>

    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>