<?php
class Panier
{
	private $id_client;
	private $id_produit;
	private $qte;
	function __construct($id_client,$id_produit,$qte)
	{
		$this->id_produit=$id_produit;
		$this->id_client=$id_client;
		$this->qte=$qte;
	}
	
	function getId_produit()
	{
		return $this->id_produit;
	}
	function getId_client()
	{
		return $this->id_client;
	}
	function getQte()
	{
		return $this->qte;
	}

	function setId_produit($id_produit)
	{
		$this->id_produit=$id_produit;
	}
	function setId_client($id_client)
	{
		$this->id_client;
	}
	function setQte($qte)
	{
		$this->qte=$qte;
	}
	
}
?>