<?php

/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController{	
	
	public static function login($request,$context){
	
		if(isset($_SESSION['user'])){
			
			$context->user	 =  utilisateurTable::getUserByLoginAndPass('alibaba','alibaba');
			$context->chats  =  chatTable::getLastChat() ;
			$context->friends =  utilisateurTable::getUsers();
			$context->messages =  messageTable::getMessages();
			$context->setSessionAttribute('user',$context->user) ;
			return context::SUCCESS;
		}
		else{
			
			if(isset($_POST['pseudo']) && isset($_POST['pass']) and isset($_POST['submit'])){
				
				$login = $_POST['pseudo'];
				$password  = $_POST['pass'];
				
				$context->user	 =  utilisateurTable::getUserByLoginAndPass('alibaba','alibaba');

				if($context->user != null){
					$context->friends =  utilisateurTable::getUsers();
					$context->messages =  messageTable::getMessages();
					$context->chats  =  chatTable::getLastChat() ;
					$context->setSessionAttribute('user',$context->user) ;
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
		$url = "ThatFace.php";
		return context::ERROR;
	}
	public static function helloWorld($request,$context)
	{
		$context->mavariable="hello world";
		return context::SUCCESS;
	}


	public static function index($request,$context)
	{
		return context::SUCCESS;
	}

	/* 
	 * Réalisé par : EL KHATTAB Mahmoud
	 * action qui permet de dérouter l'execution de la fonction d'ajout d'un chat à la base de données et affiche un message 		 * en retour à la fonction de callback ajax 
	 * la fonction de mise à jour est dans la classe utilisateurTable  
	 */
	public static function addChat($request, $context){
	//	echo json_encode("ajout du chat avec succès") ;
		
	//	$user = $context->user ;
	//	$chat = chatTable::addChat($request);
		echo 'ajout du chat avec succès';

	}
	/* 
	 * Réalisé par : EL KHATTAB Mahmoud
	 * action qui permet de dérouter l'execution de la fonction de mise à jour du statut et affiche un message en retour à la 		 * fonction de callback ajax
	 * la fonction de mise à jour est dans la classe utilisateurTable  
	 */	
	public static function updateStatut($request, $context){
		utilisateurTable::updateStatut($request);
		echo json_encode('statut updated');
	}
	
}
?>
