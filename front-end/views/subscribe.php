<?php
 require "../config.php";
     $subscribe   = $_POST['subscribe'];
     $hash        =md5($subscribe);
        $db = config::getConnexion();
		$req = "INSERT INTO subscribe (email,hash) VALUES('$subscribe','$hash')";
		$sql = $db->prepare($req);
		$sql->execute();
		header('Location: http://localhost/ProjetWeb2A28/front-end/views/sub.html');
?>