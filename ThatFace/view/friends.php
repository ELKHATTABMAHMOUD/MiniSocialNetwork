<?php

/**
 * Harkiolakis Laurent
 * Vue qui liste les amis (tous les utilisateurs de la base)
 */

?>
<div class="fList">
<?php
	// $users = $context->getSessionAttribute("users");
	$users = $context->friends;  
    	echo "<u>Liste des amis : </u><br/>";
	if ($users != null) {
	    foreach ($users as $user) {
		
		echo $user->identifiant."<br/>";
		
	    }

	}
?>

</div>
