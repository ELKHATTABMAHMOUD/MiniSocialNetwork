<?php 
/*
 *    Réalisé par EL KHATTAB Mahmoud, Laurent Harkiolakis
 */
class postTable {

	/*
	* cette méthode permet l'ajout d'un message et le post associé. 
	*/

	public static function addmsg($request){

		$em = dbconnection::getInstance()->getEntityManager() ;
		$post=new post();
		$post->texte=$request['msg_zone'];
		$post->date=new DateTime("now");
		$em->persist($post);
		$em->flush();
		$message = new message();
		$message->post = $post;
		$message->emetteur =utilisateurTable::getUserById( $context->getSessionAttribute("id") );
		$message->destinataire = $request['destinataire'];
		$message->parent =utilisateurTable::getUserById( $context->getSessionAttribute("id") );
		$em->persist($post);
		$em->flush();


	}


}









?>
