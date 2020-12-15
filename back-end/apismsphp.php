<?php

                                     
                                        
     require '../core/offremanage.php';
     $off= new OffreManage();
     $idoffre=$_POST['idoffre'];
     $liste=$off->recupererOffre($idoffre);

            foreach ($liste as $val) 
            $idproduit=$val['produit_id'];
            $list=$off->recupererProduit($idproduit);

                 {
                    foreach ($list as $row) 

                         {
                         	$nomOffre=$val['nom'];
                         	$nomProduit= $row['produit_nom'];
                         	$pourcentage=$val['pourcentage'];


        $db = config::getConnexion();
        $req = $db->query("SELECT telephone from client ");
            
                            $donnees = $req->fetch();
                            $numero=$donnees['telephone'];


	// Authorisation details.
	$username = "leehobaby283@gmail.com";
	$hash = "8c5a736b644a8264af46e467539e68fe86fac2fc4d3180e2c1ce21176c817363";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "IDA-OPTIQUE"; // This is who the message appears to be from.
	$numbers = $numero ; // A single number or a comma-seperated list of numbers
	//$message = 'hi';
	$message = ' '.$nomOffre.'!! Profitez d une superbe réduction de -'.$pourcentage.'%  sur l article ** '.$nomProduit.' **' ;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo $result;

header('Location: http://localhost/code/light/ListeDesOffres.php');
}}


?>
