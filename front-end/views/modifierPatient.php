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
           header('refresh:5;url=../index.php');
        }
        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Modifier le profil</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet"/>
       
	</head>

    <script>
    function verif() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;
    var prenom = document.querySelector('#prenom').value;
    var date_naissance = document.querySelector('#date_naissance').value;
    var telephone = document.querySelector('#telephone').value;
    var email = document.querySelector('#email').value;
    var login = document.querySelector('#login').value;
    var password = document.querySelector('#password').value;
    var confpassword = document.querySelector('#confpassword').value;


    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
        
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
        
    }

    if (prenom.charAt(0) < 'A' || prenom.charAt(0) > 'Z') {
        errors += "<li>Le prenom doit commencer par une lettre Majuscule </li>";
        
    }

    if (date_naissance === "") {
        errors += "<li>La date est obligatoire </li>";
        
    }

    if (email === "") {
        errors += "<li>L'email est obligatoire </li>";
        
    }

    if (login === "") {
        errors += "<li>Le login est obligatoire </li>";
        
    }

    if ( telephone.length != 8) {
        errors += "<li>Numéro de téléphone erroné </li>";
        
    }

    if (password !== confpassword || password === "" || confpassword === "" || password.length != 8) {
        errors += "<li> Veuillez vérifier le mot de passe saisi il doit contenir 8 caracteres au minimum</li>";
        document.querySelector('#password').value = "";
        document.querySelector('#confpassword').value = "";
        document.querySelector('#password').focus();
        
    }
    document.writeln(errors);
  

}
</script>

	<body class="bg-primary">
		<!-- <div><a class="btn btn-primary " href="afficherPatient.php">Retour à la liste</a></div> -->
        
        
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
                                    <h1 class="text-center font-weight-light my-4">Modifier mon profil</h1>
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
                                                    <input  class="form-control" type="text" name="date_naissance" id="date_naissance"  value = "<?php echo $user->date_naissance; ?>">
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