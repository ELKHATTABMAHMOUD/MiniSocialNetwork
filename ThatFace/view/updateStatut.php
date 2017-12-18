<?php
/**-------------------------------------------------------------------------------------------------------------------------
 * ----------------------------    Réalisé par : EL KHATTAB Mahmoud  -------------------------------------------------------
 * Formulaire de type Modal qui s'affiche au moment du clique sur le lien modifier statut. ce formulaire est utilisé pour 	 
 * saisir le nouveau statut et déclenche l'action ajax dédiée 
 * -------------------------------------------------------------------------------------------------------------------------
 */
?>
<a href="#" role="button" data-toggle="modal" data-target="#login-modal">Modifier Statut</a>

<!-- BEGIN # MODAL Modifier statut -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" id="modal">
    	<div class="modal-dialog" id="form_statut">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="images/updateStatut.png">
					<button type="button" class="close" id="fermer" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                <div id="div-forms">
                    <form id="statutForm"^method="post">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Saisir votre nouveau statut.</span>
                            </div>
							<textarea  id="newstatut" class="form-control" type="password" placeholder="Password" >
							</textarea>
							<input type="text" class="form-control" />
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Mettre à jour</button>
                            </div>
				        </div>
                    </form>
                </div>
                
			</div>
		</div>
	</div>
    <!-- END # MODAL Modifier statut -->
