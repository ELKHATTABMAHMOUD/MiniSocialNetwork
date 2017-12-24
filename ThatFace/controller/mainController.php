<?php

/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController{	
	
	/* 
	 * Réalisé par : EL KHATTAB Mahmoud
	 */
	public static function login($request,$context){
	
		if(isset($_SESSION['user'])){
			
			$context->profile	=  $_SESSION['user'];
			$context->chats  	=  chatTable::getLastChats() ;
			$context->friends 	=  utilisateurTable::getUsers();
			$context->messages 	=  messageTable::getMessages();
		//	$context->setSessionAttribute('user',$context->user) ;
			return context::SUCCESS;
		}
		else{
			
			if(isset($_POST['pseudo']) && isset($_POST['pass']) and isset($_POST['submit'])){
				
				$login = $_POST['pseudo'];
				$password  = $_POST['pass'];
				
				$context->user	 =  utilisateurTable::getUserByLoginAndPass($login,$password);

				if($context->user != null){
					$context->friends =  utilisateurTable::getUsers();
					$context->messages =  messageTable::getMessages();
					$context->chats  =  chatTable::getLastChats() ;
					$context->setSessionAttribute('user',$context->user) ;
					$context->profile = $context->user ;
					return context::SUCCESS ;
				}				
				return context::ERROR;
			}
			else{
					return context::ERROR;
			}
		}
		
	//return context::ERROR;
	}
	public static function logout($request,$context){
		unset($_SESSION['user']);
		return context::SUCCESS ;
		
	}
	public static function helloWorld($request,$context)
	{
		$context->mavariable="hello world";
		echo "";
		//return context::SUCCESS;
	}


	public static function index($request,$context)
	{
		return context::SUCCESS;
	}

	/* 
	 * Réalisé par : EL KHATTAB Mahmoud
	 * action qui permet de dérouter l'execution de la fonction d'ajout d'un chat 
	 * à la base de données et affiche un message en retour à la fonction de callback
	 * ajax la fonction de mise à jour est dans la classe utilisateurTable  
	 */
	public static function addChat($request, $context){

		$chat = chatTable::addChat($request,$context);
	//	echo 'ajout du chat avec succès'.$_SESSION['lastChatId'];

	}
	/* 
	 * Réalisé par : EL KHATTAB Mahmoud
	 * action qui permet de dérouter l'execution de la fonction de mise à jour du statut et affiche un message en retour à la 		 * fonction de callback ajax
	 * la fonction de mise à jour est dans la classe utilisateurTable  
	 */	
	public static function updateStatut($request, $context){
		utilisateurTable::updateStatut($request);
	}
	/*
	*
	*/
	
	public static function lastStats($request,$context){
	
		$recentchats ='';
		if(!isset($_SESSION['chatid'])){
			$dernierchat = chatTable::getLastchat();  		
			
			$_SESSION['chatid'] = $dernierchat->id ;
		}
		else{
			$recentchats = chatTable::getRecentChats($_SESSION['chatid']);
			if(count($recentchats)> 0){
				$i = count($recentchats) ;
				$_SESSION['chatid'] = $recentchats[$i-1]->id ;
			}
		}
		
		$html='';
		foreach($recentchats as $chat){
			$text   = htmlspecialchars($chat->post->texte);
			$date   = htmlspecialchars($chat->post->date->format('d-m-y:H:m:s')) ;
			$prenom = htmlspecialchars($chat->emetteur->prenom) ;
			$nom    = htmlspecialchars($chat->emetteur->nom);
			if($chat->emetteur->avatar!=null){
				$image  = htmlspecialchars($chat->emetteur->avatar);
			}
			$message = '<div class="row msg_container base_receive">
							<div class="col-md-2 col-xs-2 col-lg-2 avatar ">
								<img src="'.$image.'class="img-responsive" style="height:40px; width:50px">
							</div>
							<div class="col-md-10 col-xs-10 col-lg-10 col-xl-10">
								<div class="messages msg_receive">
									<p><span>'.$text.'</span></p>
									<time datetime="'.$date.'">'.$prenom.' Le :'.$date.'<br></time>
								</div>
							</div>
						</div>';
			$avatar  =  	'';
			$html = $message.''.$avatar.''.$html;
		}
		echo $html;
	}
	
	/* 
	 * =========================    Réalisé par : EL KHATTAB Mahmoud    ======================
	 * action qui permet de dérouter l'affichage d'un profile autre que celui de l'utilisateur
	 * =======================================================================================
	 */	
	public static function otherProfile($request, $context){
		$id = $_GET['id'];
		$context->profile = utilisateurTable::getUserById($id);
		$context->chats  	=  chatTable::getLastChats() ;
		$context->friends 	=  utilisateurTable::getUsers();
		$context->messages 	=  messageTable::getMessages();
	}
}
?>
