<?php
                                        /*
                                         *  R�alis� par : EL KHATTAB Mahmoud
                                        */
/*   Inclusion de la classe Post */
require_once "chat.class.php";


class chatTable {

    /*
     *  auteur : EL KHATTAB Mahmoud
     * cette m�thode permet de retourner l'ensemble de chats sous forme d'un array
    */
    public static function getChats(){
        $em = dbconnection::getInstance()->getEntityManager() ;

        $chatRepository = $em->getRepository("chat");
        $chats = $chatRepository->findAll();

        if ($chats == false){
            echo "Aucun enregistrement dans la table chat n'est trouv�";
        }
        return $chats;
    }

    /*
     *  auteur : EL KHATTAB Mahmoud
     * cette m�thode permet de retourner les 20 derniers derniers chats
    */
    public static function getLastchats(){

        $em = dbconnection::getInstance()->getEntityManager() ;
        $qb = $em->createQueryBuilder();
		$qb->select('c')
			->from('chat','c')
			->from('post','p')
			->where('c.post = p.id') 
			->orderBy('c.id','DESC')
			->setMaxResults(20);
        $query = $qb->getQuery();
        $results = $query->getResult();
	 
        return $results;
    }
	/*
     *  auteur : EL KHATTAB Mahmoud
     * cette m�thode permet de retourner le dernier chat post� 
    */
    public static function getLastchat(){

        $em = dbconnection::getInstance()->getEntityManager() ;
        $qb = $em->createQueryBuilder();
		$qb->select('c')
			->from('chat','c')
			->from('post','p')
			->where('c.post = p.id') 
			->orderBy('c.id','DESC')
			->setMaxResults(1);
        $query = $qb->getQuery();
        $results = $query->getResult();
	 
        return current($results);
    }
	/*
     *  auteur : EL KHATTAB Mahmoud
     * cette m�thode permet de retourner les chats les plus r�cents apr�s 
	 * le chat dont l'id est donn�e en param�tres
    */
	public static function getRecentChats($id){

        $em = dbconnection::getInstance()->getEntityManager() ;
        $qb = $em->createQueryBuilder();
		$qb->select('c')
			->from('chat','c')
			->from('post','p')
			->where('c.post = p.id')
			->andWhere('c.id>'.$id)
			->orderBy('c.id','ASC') //************* � remplacer par DESC
			->setMaxResults(2);
        $query = $qb->getQuery();
        $results = $query->getResult();
	 
        return $results;
    }
    /*
     *  auteur : EL KHATTAB Mahmoud
     *  cette m�thode permet de retourner le dernier message post� sur un chat donn� par son id
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
            echo "Aucun message post� sur le chat ".$id."'est trouv�";
        else
            return current($results) ;
    }
	/*
	 *  auteur : EL KHATTAB Mahmoud
	 * cette m�thode permet d'ajouter un chat � la base de donn�es en ajoutant �galement le post et l'utilisateur associ�
	*/
	public static function addChat($request,$context){
	
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
		$_SESSION['chatid'] = $chat->id ;
		$em->flush();
//		return $chat;
	
	}

}

?>
