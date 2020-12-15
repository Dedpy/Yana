<?php

include "../config.php";



$key = $_GET['key'];



		$sql="DELETE FROM subscribe WHERE hash='$key'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

header('Location: unsub.html');

?>