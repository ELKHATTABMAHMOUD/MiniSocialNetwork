<?php

/*
 *    Réalisé par : EL KHATTAB Mahmoud, HARKIOLAKIS Laurent
*/

/** 
 * @Entity
 * @Table(name="fredouil.post")
 */
class post{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @Column(type="string") */ 
	public $texte;
		
	/** @Column(type="datetime", length=4000) */ 
	public $date;

	/** @Column(type="string", length=45) */ 
	public $image;

	


}
