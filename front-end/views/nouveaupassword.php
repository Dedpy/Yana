<?php

require('../config.php');

session_start();
	
//var_dump($_SESSION);
if (isset($_POST['password'])){


    $email=$_SESSION['email'] ;
    //var_dump($_SESSION);
    $password=$_POST['password'];
    $sql="UPDATE patient SET password= '" . $password . "' WHERE email='" . $email . "'";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				//$user=$query->fetch();
                
               
                //$_SESSION['id'] = $user['id'];
                

            header("Location: login.php");
        //var_dump($_SESSION);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
            }
        } 







    
    // $email = stripslashes($_REQUEST['email']);
	// $email = mysqli_real_escape_string($conn, $email);
	
	// $query="SELECT * FROM patient WHERE email='" . $email . "'";
    
	// $result = mysqli_query($conn,$query) or die(mysql_error());
    // $rows = mysqli_num_rows($result);
    
	// if($rows==1){
    //     $_SESSION['email'] = $email;
    //     $password=$_POST['password'];
    //     $query1="UPDATE patient SET password= '" . $password . "' WHERE email='" . $email . "'";
    //     $result1 = mysqli_query($conn,$query1) or die(mysql_error());
	//     header("Location: login.php");
	// }else{
	// 	$message = "L'email est incorrect.";
	// }



  





?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nouveau mot de passe</title>
        <link href="styles.css" rel="stylesheet"/>
        
    </head>

    <body class="bg-primary">
    
        
        <div id="error">
            <?//php echo $error; ?>
        </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4">Nouveau mot de passe</h1>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                        
                                                <td>
                                                    <label class="small mb-1" for="password">Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="password" id="password" placeholder="Entrer le mot de passe">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="confpassword">Verifier Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="confpassword" id="confpassword" placeholder="Confirmer le mot de passe">
                                                </td>
                                            </tr>
                                </div>
                                            <tr>
                                                <td></td>
                                                <td>
                                                
                                                    <input class="btn btn-primary btn-block" type="submit" value="Envoyer" > 
                                                   

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



















