/*
 *  Réalisé par : EL KHATTAB Mahmoud
 * c'est le code ajax associé à l'ajout d'un chat à la base de donnée et de son affichage dans la liste des chats 
*/

$(document).ready(function(){
		$("#draggable").draggable({axis:'x', containment:'document', grid:[100]});
		
		$('#addchatForm').on('submit',function(event){
			event.preventDefault();
			var msg = $('#chattext').val();
			var date = Date();
			
			$.ajax({
				url : 'ajaxDispatcher.php?action=addChat',
				type : 'POST',
				data :{'chattext':msg},
				success:function(response){
					alert('success adding chat');
			/*		$("div .chat").prepend('<div class="user-photo"><img src="images/avatar.png"/> </div> <div class="chat-message"><span>'+msg+'</span><br><span>'+Date()+'</span><span></span></div>');*/
				},
				error:function(response){
					alert('error adding chat');
				},
				complete:function(response){
					alert('complete ');
				},
			});
			
		});
	
	});
