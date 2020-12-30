<?php

require('../config.php');

session_start();
	

if (isset($_POST['code'])){

    
    
    $email=$_SESSION['email'] ;
    $code=$_POST['code'];
    //$id=$_SESSION['id'] ;
    $sql="SELECT * FROM patient WHERE email='" . $email . "' && code = '". $code."'";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
                $count=$query->rowCount();
                if($count==1){
                   $user=$query->fetch(); 
                  // $_SESSION['login'] = $user['login'];
                //$_SESSION['id'] = $user['id'];
                header("Location: nouveaupassword.php");
                }
                
                //$_SESSION['login'] = $user['login'];
                //$_SESSION['id'] = $user['id'];
                
        //var_dump($_SESSION);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
            }
        } 



    



    // $email = stripslashes($_REQUEST['email']);
	// $email = mysqli_real_escape_string($conn, $email);
	// $code = stripslashes($_REQUEST['code']);
	// $code = mysqli_real_escape_string($conn, $code);
	// $query="SELECT * FROM patient WHERE email='" . $email . "' && code = '". $code."'";
    
	// $result = mysqli_query($conn,$query) or die(mysql_error());
	// $rows = mysqli_num_rows($result);
	// if($rows==1){
    //     $_SESSION['email'] = $email;
        
	//     header("Location: nouveaupassword.php");
	// }else{
	// 	$message = "L'email est incorrect.";
	// }



  





?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>vérification</title>
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
                                    <h1 class="text-center font-weight-light my-4">Code de vérification</h1>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                     
                                            
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="code">code de verification:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="int" name="code" id="code"  placeholder="Entrer le code">
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
