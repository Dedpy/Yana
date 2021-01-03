<?php
session_start();
if(isset($_SESSION['user'])){

      header("location: body.php");

}
require "../front-end/config.php";
$conn=Config::getConnexion();
if(isset($_POST['MotDePasse'])){
$user = $_POST['pseudo'];
$pass = ($_POST['MotDePasse']);
$messeg = "";

if(empty($user) || empty($pass)) {
    $messeg = "pseudo/MotDePasse con't be empty";
} else {
    $sql = "SELECT * FROM admin WHERE pseudo=? AND 
  MotDePasse=? ";

    $query = $conn->prepare($sql);
    $query->execute(array($user,$pass));
    
    if($query->rowCount() >= 1) {
       foreach ($query as $row) {
           $_SESSION['id_admin'] = $row['id'];
           if ($row['type']==0)
           {
            $_SESSION['type'] = "superuser";
          }
         else
          $_SESSION['type']="user";
       }
        
        $_SESSION['time_start_login'] = time();
        //echo $_SESSION['id_admin'];
        header("location: index.php");
    } else {
        $messeg = "Username/Password is wrong";
       header("location: login-admin.php?connect=error");
}
}
}
?>