<?php
                                        /*
                                         *  Réalisé par : EL KHATTAB Mahmoud
                                        */
/*   Inclusion de la classe Post */
require_once "chat.class.php";


class chatTable {

    /*
     *  auteur : EL KHATTAB Mahmoud
     * cette méthode permet de retourner l'ensemble de chats sous forme d'un array
    */
    public static function getChats(){
        $em = dbconnection::getInstance()->getEntityManager() ;

        $chatRepository = $em->getRepository("chat");
        $chats = $chatRepository->findAll();

        if ($chats == false){
            echo "Aucun enregistrement dans la table chat n'est trouvé";
        }
        return $chats;
    }

    /*
     *  auteur : EL KHATTAB Mahmoud
     * cette méthode permet de retourner l'le dernier message posté sur un chat
    */
    public static function getLastchat(){

        $em = dbconnection::getInstance()->getEntityManager() ;
        $qb = $em->createQueryBuilder();
		$qb->select('c')
			->from('chat','c')
			->from('post','p')
			->where('c.post = p.id') 
			->orderBy('c.id','DESC');
        $query = $qb->getQuery();
        $results = $query->getResult();
	 
        return $results;
    }

    /*
     *  auteur : EL KHATTAB Mahmoud
     * cette méthode permet de retourner le dernier message posté sur un chat donné par son id
    */

    public static function getLastChatById($id){

        $em = dbconnection::getInstance()->getEntityManager() ;
        $qb = $em->createQueryBuilder();
        $qb->select('c')
            ->from('chat', 'c')
            ->from('post', 'p')
            ->where(' m.post = p.id and  p.id= :id')
            ->orderBy('p.date','DESC')
            ->setParameter('id',$id);
        $query = $qb->getQuery();
        $results = $query->getResult();
        if($results == null  )
            echo "Aucun message posté sur le chat ".$id."'est trouvé";
        else
            return current($results) ;
    }
	/*
	 *  auteur : EL KHATTAB Mahmoud
	 * cette méthode permet d'ajouter un chat à la base de données en ajoutant également le post et l'utilisateur associé
	*/
	public static function addChat($request){
	
		$em = dbconnection::getInstance()->getEntityManager() ;
		
		$post = new post();
		$post->texte = $_POST['chattext'];
		$post->date=new DateTime("now");
		$em->persist($post);
		$em->flush();
		
		$chat = new chat();
		$id = $_SESSION['user']->id ;
		$user = utilisateurTable::getUserById($id);
		$chat->post = $post ;
		$chat->emetteur = $user ;
		$em->persist($chat);
		$em->flush();
		
//		return $chat;
	
	}

}

?>
