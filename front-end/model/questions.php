<?PHP
	class Question{
		private ?int $id_question = null;
		private ?string $sujet_question = null;
		private ?string $message_question = null;
		private ?string $categorie_question = null;
		private ?DateTime $date_question = null;
		private ?int $id_patient = null;

		function __construct(string $sujet_question, string $message_question, string $categorie_question, DateTime $date_question, int $id_patient){
			
			$this->sujet_question=$sujet_question;
			$this->message_question=$message_question;
			$this->categorie_question=$categorie_question;
			$this->date_question=$date_question;
			$this->id_patient=$id_patient;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getsujet_question(): string{
			return $this->sujet_question;
		}
		function getmessage_question(): string{
			return $this->message_question;
		}
		function getdate_question(): date{
			return $this->date_question;
		}
		function getcategorie_question(): string{
			return $this->categorie_question;
		}
		function getid_patient(): string{
			return $this->id_patient;
		}

		function setNom(string $sujet_questionom): void{
			$this->sujet_question=$sujet_question;
		}
		function setmessage_question(string $message_question): void{
			$this->message_question;
		}
		function setdate_question(string $date_question): void{
			$this->date_question=$date_question;
		}
		function setcategorie_question(string $categorie_question): void{
			$this->categorie_question=$categorie_question;
		}
		function setid_patient(string $id_patient): void{
			$this->id_patient=$id_patient;
		}
	}
?>