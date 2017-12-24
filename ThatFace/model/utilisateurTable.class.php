<?php
/**
 * Harkiolakis Laurent
 * Cette classe permet de gérer les données de la table utilsateur
 */

class utilisateurTable  {

	public static function getUserByLoginAndPass($login,$pass){
		$em = dbconnection::getInstance()->getEntityManager() ;

		$userRepository = $em->getRepository('utilisateur');
		$user = $userRepository->findOneBy(array('identifiant' => $login, 'pass' => sha1($pass)));	
	
		if ($user == false){
			echo 'Erreur sql';
		}
		return $user; 
	}

	public static function getUserById($identifiant)
	{
		$em = dbconnection::getInstance()->getEntityManager() ;
		$userRepository=$em->getRepository('utilisateur');
		$user =$userRepository->findOneBy(array('id' => $identifiant));
	       	
	       	 return $user;

	 }

	public static function getUsers(){
		$em = dbconnection::getInstance()->getEntityManager() ;
		$userRepository = $em->getRepository('utilisateur');
		$users=$userRepository->findAll();
		return $users;

	}

	public function deconnexion(){

		$em = dbconnection::closeConnection();
		return $em;
	}
	   /*
	    * ===================================================================================
	    * =================== Réalisé par : EL KHATTAB Mahmoud ==============================
		* ===================================================================================
	   */
	public function updateStatut($request){
	
		$em 	= dbconnection::getInstance()->getEntityManager() ;
		$id		= $_SESSION['user']->id ;
		$user 	= utilisateurTable::getUserById($id);
		$user->statut = $_POST['newstatut'] ;
		$_SESSION['user']->statut = $_POST['newstatut'];
		$em->persist($user);
		$em->flush();
		$b = utilisateurTable::getUserById(42);
		echo "Statut modifié avec success";

	}



}

?>
