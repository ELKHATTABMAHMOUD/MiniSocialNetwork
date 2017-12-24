<div class="wall">
<h2 id="super">Derniers messages postés : </h2>
<?php

/**
 * Harkiolakis Laurent
 * Vue pour l'affichage des messages 
 */

	$messages = $context->messages;
	foreach($messages as $message) {
		
		echo "Message de ".htmlspecialchars($message->emetteur->nom)." ".htmlspecialchars($message->emetteur->prenom)." : ".htmlspecialchars($message->post->texte)."<br>";
	}
	
?>

		
	<div class="msg-form">
	<form class="addmessage form-inline " method="post">
		<textarea name="msgtext" rows="1" class="col-lg-6" id="msgtext"> </textarea>
		<input type="button" id="submit" class="btn btn-primary col-lg-4"  value="Publier" />
	</form>
	</div>

</div>

