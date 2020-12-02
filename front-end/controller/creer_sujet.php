<?php
	require('php/config.php'); /* Contient la connexion à la base de donnée $bdd */
	 
	/* Traitement du formulaire de création de Topic */
	if(isset($_SESSION['id'])) {
	   if(isset($_POST['tsubmit'])) {
	      if(isset($_POST['tsujet'],$_POST['message'])) {
	         $sujet = htmlspecialchars($_POST['sujet']);
	         $contenu = htmlspecialchars($_POST['message']);
	         if(!empty($sujet) AND !empty($contenu)) {
	            if(strlen($sujet) <= 70) {
	               if(isset($_POST['email'])) {
	                  $notif_mail = 1;
	               } else {
	                  $notif_mail = 0;
	               }
	               $ins = $bdd->prepare('INSERT INTO f_topics (id_createur, sujet, contenu, notif_createur, date_heure_creation) VALUES(?,?,?,?,NOW())');
	               $ins->execute(array($_SESSION['id'],$sujet,$contenu,$notif_mail));
	            } else {
	               $terror = "Votre sujet ne peut pas dépasser 70 caractères";
	            }
	         } else {
	            $terror = "Veuillez compléter tous les champs";
	         }
	      }
	   }
	} else {
	   $terror = "Veuillez vous connecter pour poster un nouveau topic";
	}
	 
	require('views/nouveau_topic.view.php'); /* Appel du fichier "vue" de notre page */
?>