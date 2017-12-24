<!--==================================================================================================->
<!--==================================== Réalisé Par : EL KHATTAB Mahmoud ===========================-->
<!--=================================================================================================-->

	<div class="panel panel-default">
		<div class="panel-heading">  <h4 >User Profile</h4></div>
		<div class="panel-body">
			<div class="box box-info">
				<div class="box-body">
					<div class="col-sm-6">
					<?php 
						$user = $context->profile ;
					?>
						<div  align="center"> 
							<img alt="User Pic"src="<?php if($user->avatar !=null){
								echo htmlspecialchars($user->avatar);
							?> 
							<?php
							}else{
								echo "https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg";
							}?>
							id="profile-image1" class="img-circle img-responsive"> 
						<input id="profile-image-upload" class="hidden" type="file">
					
					<!--Upload Image Js And Css-->
					</div>
					<br>
					<!-- /input-group -->
					</div>
					<div class="col-sm-6">
					 <?php  
						include('updateStatut.php'); 
					 ?>
					<p id="affstatut">
						<?php 	
								echo $user->statut ;
						?> 
					</p>            
					</div>
					<div class="clearfix"></div>
					<hr style="margin:5px 0 5px 0;">
					<div class="col-sm-5 col-xs-6 col-md-7 col-lg-6 tital " >First Name:</div>
					<div class="col-sm-7 col-xs-6 col-md-5 col-lg-6 "><?php echo htmlspecialchars($user->nom) ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>
					<div class="col-sm-5 col-xs-6 col-md-7 col-lg-6 tital ">Last Name:</div>
					<div class="col-sm-7 col-xs-6 col-md-5 col-lg-6"> <?php echo htmlspecialchars($user->prenom) ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>
					<div class="col-sm-5 col-xs-6 col-md-7 col-lg-6  tital " >Date of birth:</div>
					<div class="col-sm-7 col-xs-6 col-md-5 col-lg-6"><?php echo htmlspecialchars($user->date_de_naissance->format('d-m-Y')) ; ?></div>
				</div>
			</div>      
		</div> 
	</div>
	
   	<script>   
			/* =====================================================================
					SCRIPT POUR LA MODIFICATION DE LA PHOT DE PROFILE 	
			   =====================================================================
			 */
              $(function() {
			  
//					$('#profile-image1').on('click', function() {
						$('#profile-image-upload').on('click',function(){
							alert('le nom du fichier est : ');
						});
						
						
//					});
                });       
    </script> 
       
       
