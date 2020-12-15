<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events 
 (title, start_event, end_event,heure_debut,heure_fin) 
 VALUES (:title, :start_event, :end_event,:heure_debut,:heure_fin)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':heure_debut' => $_POST['hstart'],
   ':heure_fin' => $_POST['hend']
  )
 );
}


?>
