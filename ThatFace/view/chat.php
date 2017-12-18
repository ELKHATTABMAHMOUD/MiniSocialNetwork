<?php 
/**
 * EL KHATTAB Mahmoud
 * Vue pour l'affichage des 20 derniers chat postés  
 */
 
?>
	
	<div class="chat-header" style="height: 30px; background: rgba(71, 70, 106, 0.24); padding-top: 5px; padding-left: 10px; margin-bottom: 10px;">
		<span> Chat's List</span>
		
	</div>
	<div class="chatbox">
		<div class="chatlogs"> 
			<div class="chat">
			<?php
				$chats = $context->chats  ; 
					foreach( $chats as $chat ){
							$image = "images/avatar1.png" ;
							$sender = false ;
							if( $chat->emetteur != null and $chat->emetteur->avatar){
								$image = $chat->emetteur->avatar ;
							}
			?>
				<div class="user-photo">
					<img src="<?php echo $image;?>"/>
				</div>
				<div class="chat-message ">
					<?php

						echo '<span>'.$chat->post->texte."</span><br>";
					?>
					<span>
						<?php
							echo $chat->post->date->format('d-m-y')."<br>";
						?>
					</span>
					<span>

				<?php
					if( $chat->emetteur != null )
						echo $chat->emetteur->prenom ; 
					else
						echo "aucun emetteur";
				?>
				</span>
				</div>

	<?php	
		}
	?>	
			</div>
		</div>
		
		<div class="chat-form">
		<form class="addchat form-inline " method="post" id="addchatForm">
			<textarea name="chattext" rows="1" class="col-lg-6" id="chattext"> </textarea>
			 <button type="submit" class="btn btn-default">Submit</button>
		</form>
		</div>
		
	</div>

