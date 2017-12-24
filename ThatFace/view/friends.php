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
				if ($users != null) {
					foreach ($users as $user) {
						$image = "images/avatar.png" ;
			?>
			<div class="row">
				<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="width: 20%; height: 25px;"> 
					<img src="<?php 
							if( $user->avatar)
								echo htmlspecialchars($user->avatar) ;
							else 
								echo $image ; ?>" style="border-radius: 50%;" />
				</div>
				<div class=" col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ">
				<a href="ThatFace.php?action=otherProfile&id=<?php echo $user->id ?>" class="friendprofile">
				<?php
							echo $user->nom.' '.$user->prenom."<br/>";
				?>
				</a>
				</div>
			</div>
			
			<?php
					}
				}
			?>
</div>

<script>
$(document).ready(function(){
	$('div .friendprofile').on('click',function(){
		
	});
});
</script>
