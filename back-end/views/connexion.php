

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link href="styles.css" rel="stylesheet"/>
        
    </head>

    <body >
        
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4">Se connecter </h1>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="email">email:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="email" id="password" placeholder="Entrer l'email">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="password">Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="password" id="password" placeholder="Entrer le mot de passe">
                                                </td>
                                            </tr>
                                </div>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input class="btn btn-primary btn-block" type="submit" value="Envoyer"> 
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
    </body>
</html>           

<?php
    include_once '../Model/patient.php';
    include_once '../Controller/patientC.php';
    
    
    if (
        $_POST["email"]=='behija.benghorbel@esprit.tn' && 
        $_POST["password"]=='12345678'
    ) { 
        
            header('Location:../dist/index.html');
        }
        
     
?>