<?php
/**
 * Harkiolakis Laurent, Elkhattab Mahmoud
 * 
 */
class messageTable{

    public static function getMessages(){
    $em = dbconnection::getInstance()->getEntityManager() ;

    $msgepository = $em->getRepository('message');
 
    $last_entity = $em->createQueryBuilder()
      ->select('e')
      ->from('message', 'e')
      ->orderBy('e.id', 'DESC')
      ->setMaxResults(20)
      ->getQuery()
      ->getResult();

    return $last_entity;

  }


    public static function getMsgByUserId($id){
    $em = dbconnection::getInstance()->getEntityManager() ;

    $msgRepository = $em->getRepository('message');
 
    $last_entity = $em->createQueryBuilder()
      ->select('e')
      ->from('message','e')
      ->andwhere("e.destinataire IN (:destinataire) ")
      ->setParameter('destinataire', $id)
      ->orderBy('e.id', 'DESC')
      ->setMaxResults(6)
      ->getQuery()
      ->getResult();

    return $last_entity;
  
  }

}

?>
