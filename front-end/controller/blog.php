<?PHP
	include "../config.php";
	require_once '../model/questions.php';

	class blog {
		
		function ajouterquestion($question){
			$sql="INSERT INTO questions (sujet_question,message_question,date_question,categorie_question,id_patient) 
			VALUES (:sujet_question,:message_question, :date_question,:categorie_question, :id_patient)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'sujet_question' => $question->getsujet_question(),
					'message_question' => $question->getmessage_question(),
					'categorie_question' => $question->getcategorie_question(),
					'date_question' => $question->getdate_question(),
					'id_patient' => $question->getid_patient()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherquestions(){
			
			$sql="SELECT * FROM question";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerquestion($id){
			$sql="DELETE FROM question WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierquestion($question, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE question SET 
						sujet_question = :sujet_question, 
						message_question = :message_question,
						categorie_question = :categorie_question,
						date_question = :date_question,
						id_patient = :id_patient
					WHERE id = :id'
				);
				$query->execute([
					'sujet_question' => $question->getsujet_question(),
					'message_question' => $question->getmessage_question(),
					'categorie_question' => $question->getcategorie_question(),
					'date_question' => $question->getdate_question(),
					'id_patient' => $question->getid_patient(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererquestion($id){
			$sql="SELECT * from question where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererquestion1($id){
			$sql="SELECT * from question where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>