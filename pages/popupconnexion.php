<!-- javascript pour le bouton connexion, faire apparaitre et disparaitre le div-->
<?php include ("../../controller/connexionPopup.php");?>

<div class="backgroundOverlay" style="display: none;" id="backgroundOverlay">

    <div class="popup" id="popup">

        <h2 class="connexionh2">Connexion</h2>
        <br />

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
            <a href='../users/inscription.php' id="lieninscri">Pas encore inscrit ? N'attendez plus !</a>

        </form>

    </div>

</div>