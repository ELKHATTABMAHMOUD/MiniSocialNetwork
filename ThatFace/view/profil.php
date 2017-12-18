<div class="row profil">
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 avatar">
		<img src="images/avatar.png" class=" img-circle" height="190px" width="150px" />			
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 infoProfil"  >
		<h4> <?php $user = $_SESSION['user'] ;  
				echo $user->nom."  "; ;
				echo $user->prenom."<br>";
				echo 'Date de naissance : '.$user->date_de_naissance->format('d-m-Y')."<br>";
				echo 'Statut : <span id="st_content">';
				if($user->statut != '')
					echo $user->statut ;
				else
					echo 'pas de statut';
				echo "</span>";
			 ?> </h4>
		<?php include('updateStatut.php'); ?>

	</div>
</div>


