<?PHP
class Facture
{
	private $ref;
	private $nom;
	private $date;
	private $heure;
	private $statut;
	private $total;
	function __construct($ref,$nom,$date,$heure,$statut,$total)
	{
		$this->ref=$ref;
		$this->nom=$nom;
		$this->date=$date;
		$this->heure=$heure;
		$this->statut=$statut;
		$this->total=$total;
	}
	
	function getref()
	{
		return $this->ref;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getDate()
	{
		return $this->date;
	}
	function getHeure()
	{
		return $this->heure;
	}
	function getStatut()
	{
		return $this->statut;
	}
	function getTotal()
	{
		return $this->total;
	}

	function setNom($nom)
	{
		$this->nom=$nom;
	}
	function setDate($date)
	{
		$this->date;
	}
	function setHeure($heure)
	{
		$this->heure=$heure;
	}
	function setStatut($statut)
	{
		$this->statut=$statut;
	}
	function setStatut($total)
	{
		$this->total=$total;
	}
	
}

?>