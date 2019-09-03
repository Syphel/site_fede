
<div class="container footer">

	<!-- <div class="col-sm-6 col-xs-12">
		<h4 style="text-align:center;" >Contacts</h4>
	    <ul class="center list-unstyled">
	    	<li>69 boulevard Dolez, 7000 Mons</li>
			<li><a href="mailto:list.fede@echoecho.com">
Send Email</a> </li>
			<li><<a href="mailto:email@echoecho.com">
Send Email</a> </li>
        	<li><a href="mailto:email@echoecho.com">
Send Email</a> </li>
			<li>mail de la fédé</li>
        	<li> Num du prési et secretaire actuel</li>
  		</ul>
  	</div>
 --> 
 <div class="col-sm-6 col-xs-12">
 	
 	<h4> Contacts par mail :</h4>
  	<ul class="list-unstyled">

  		<?php
	                
	                
	                $reponse = $bdd->query('SELECT distinct tmp_cercle FROM historique');

	                // On affiche chaque entrée une à une
	                while ($donnees = $reponse->fetch()) {
					?>


					<?php
	                	$mailsarray=array();
		                $reponse2 = $bdd->prepare('SELECT tmp_mail from historique where tmp_annee in (select max(tmp_annee) from historique) and tmp_cercle=? ');
		                $reponse2 -> execute(array($donnees['tmp_cercle']));

		                // On affiche chaque entrée une à une
		                while ($donnees2 = $reponse2->fetch()) {
		                	array_push($mailsarray,$donnees2['tmp_mail']);
							?> 

							<?php

			                }
			                
			                $reponse2->closeCursor(); // Termine le traitement de la requête
			                
	                	?>


	         		<li style="text-align: center;" > <a href="mailto:<?php foreach ($mailsarray as &$value) {
							    echo $value;
							    echo " ;";
							} ?>"> <?php echo $donnees['tmp_cercle'] ?> </a> </li>

	            
                

                <?php

	                }
	                
	                $reponse->closeCursor(); // Termine le traitement de la requête

                ?>

            </ul>

    </div>

  	<div class="col-sm-6 col-xs-12">
  		<h4> Où nous trouver? </h4>
  		<div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=69%2Cboulevard%20Dolez&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:400px;}</style></div>
  	</div>

	

</div>