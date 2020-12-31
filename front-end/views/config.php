<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("107390648836-cvm8g05fgeorrmlvt258kss8okc10051.apps.googleusercontent.com");
	$gClient->setClientSecret("LtZQXJb-8FX_sInUpYRpYjwt");
	$gClient->setApplicationName("yana2020");
	$gClient->setRedirectUri("http://localhost/google/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
