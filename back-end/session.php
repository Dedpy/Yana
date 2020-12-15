<?php
session_start(); 
if (!isset($_SESSION['id_admin']))
    {
       echo "<meta http-equiv='refresh' content='0;url=login-admin.php'>";
    	die();
    }
?>