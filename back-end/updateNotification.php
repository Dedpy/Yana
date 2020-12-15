<?php
  include_once "../core/notificationC.php";

if(isset($_POST['view']))
{
    $noti=new NotificationC();
    $result=$noti->updateNotification();
}
?>