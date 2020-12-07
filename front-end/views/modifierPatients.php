<?php
    include "../controller/patientC.php";
    include_once '../Model/patient.php';

	$patientC = new patientC();
	$error = "";

	if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["date_naissance"]) &&
        isset($_POST["telephone"]) && 
        isset($_POST["email"]) && 
        isset($_POST["login"]) && 
        isset($_POST["password"])
    ){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) &&
            !empty($_POST["date_naissance"]) && 
            !empty($_POST["telephone"]) &&  
            !empty($_POST["email"]) && 
            !empty($_POST["login"]) && 
            !empty($_POST["password"])
        ) {
            $user = new patient(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['date_naissance'],
                $_POST['telephone'], 
                $_POST['email'],
                $_POST['login'],
                $_POST['password']
            );
            
            $patientC->modifierPatient($user, $_GET['id']);
           // header('Location:afficherPatient.php');
        }
        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Modifier Utilisateur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body class="bg-primary">
		<div><a class="btn btn-primary " href="afficherPatient.php">Retour à la liste</a></div>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $patientC->recupererPatient1($_GET['id']);
				
		?>
		<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4">S'inscrire</h1>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="nom">Nom:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $user->nom; ?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="prenom">Prénom:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $user->prenom; ?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="date_naissance">date de naissance:</label>
                                                </td>
                                                <td>
                                                    <input  class="form-control" type="date" name="date_naissance" id="date_naissance" maxlength="20" value = "<?php echo $user->date_naissance; ?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="telephone">telephone:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="telephone" id="telephone" maxlength="20" value = "<?php echo $user->telephone; ?>">
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="email">Adresse mail:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user->email; ?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="login">Login:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="login" id="login" value = "<?php echo $user->login; ?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="password">Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="password" id="password" value = "<?php echo $user->password; ?>">
                                                </td>
                                            </tr>

                                    

                                </div>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input class="btn btn-primary btn-block" type="submit" value="Envoyer" onclick="verif();"> 
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input class="btn btn-primary btn-block" type="reset" value="Annuler" >
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>

		<?php
		}
		?>
	</body>
</html>
