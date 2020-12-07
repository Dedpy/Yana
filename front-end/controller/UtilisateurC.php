<?PHP
	include "../config.php";
	require_once '../Model/Utilisateur.php';

	class UtilisateurC {
		
		function ajouterPatient($patient){
			$sql="INSERT INTO patient (nom, prenom, date_naissance, telephone, email, login, password) 
			VALUES (:nom, :prenom, :date_naissance, :telephone, :email, :login, :password)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $patient->getNom(),
					'prenom' => $patient->getPrenom(),
					'date_naissance' => $patient->getDateNaissance(),
					'telephone' => $patient->getTelephone(),
					'email' => $patient->getEmail(),
					'login' => $patient->getLogin(),
					'password' => $patient->getPassword()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherPatient(){
			
			$sql="SELECT * FROM patient";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerPatient($id){
			$sql="DELETE FROM patient WHERE id= :id";
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
		function modifierPatient($patient, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE patient SET 
						nom = :nom, 
						prenom = :prenom,
						date_naissance = :date_naissance,
						telephone = :telephone,
						email = :email,
						login = :login,
						password = :password
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $patient->getNom(),
					'prenom' => $patient->getPrenom(),
					'date_naissance' => $patient->getDateNaissance(),
					'telephone' => $patient->getTelephone(),
					'email' => $patient->getEmail(),
					'login' => $patient->getLogin(),
					'password' => $patient->getPassword(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererPatient($id){
			$sql="SELECT * from patient where id=$id";
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

		function recupererPatient1($id){
			$sql="SELECT * from patient where id=$id";
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
