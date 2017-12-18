/*
 *  Réalisé par : EL KHATTAB Mahmoud
 * c'est le code ajax associé à la mise à jour du statut 
*/

$(document).ready( function(){
		$('#st_success').fadeOut(3000);
		$("#statutForm").on('submit',function(event){
			event.preventDefault();
			var statutText = $('#newstatut').val();
			$.ajax({
				url : "ajaxDispatcher.php?action=updateStatut" ,
				type : "POST",
				data :{'newstatut':statutText},
				dataType: "json",
				success:function(response){
				
					$('#fermer').click();
					$('#st_content').text(statutText);
					$('#st_success').html('<strong>Success !</strong> modification du statut réussie');
					$('#st_success').fadeIn(3000);
					setTimeout(function(){ $('#st_success').fadeOut(4000); }, 3000);
					
			
				},
				error:function(response){
					$('#fermer').click();
					$('#st_error').html("<strong>Error !</strong> modification du statut échouée'");
					$('#st_error').fadeIn(3000);
					setTimeout(function(){ $('#st_error').fadeOut(4000); }, 3000);
				},
			});
			
		});
	});
