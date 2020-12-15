<?php
  include_once "../core/notificationC.php";

if(isset($_POST['view']))
{
    $noti=new NotificationC();
    $noti->ajouterRdvNotif();
    $result=$noti->afficherNotifications();
    if ($noti->countUnseen()>0)
    {
        $nbr='<span class="dot"></span>
            <span class="pulse"></span>';
    }
    else
    {
        $nbr='';
    }
    $output = '';
    if($result->rowCount() > 0)
    {foreach ($result as $row){
        if ($row['statut']=="unseen")
            $statut='';
        else
            $statut='active';
        if ($row['type']=="commande")
        {$output .= '<li class="list-group-item '.$statut.'">
                            <a href="'.$row['link'].'" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-cart-outline"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">'.$row['titre'].'</span>
                                    <span class="desc">'.$row['contenu'].'</span>
                                    <span class="time">'.temps_ecoule($row['heure'],"date").'</span>
                                </div>
                            </a>
                        </li>';}
        else if ($row['type']=="rdv")
        {$output .= '<li class="list-group-item '.$statut.'">
                            <a href="'.$row['link'].'" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-timetable"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">'.$row['titre'].'</span>
                                    <span class="desc">'.$row['contenu'].'</span>
                                    <span class="time">'.temps_ecoule($row['heure'],"date").'</span>
                                </div>
                            </a>
                        </li>';}
        else if ($row['type']=="client")
        {$output .= '<li class="list-group-item '.$statut.'">
                            <a href="'.$row['link'].'" class="user-list-item">
                                <div class="icon bg-success">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">'.$row['titre'].'</span>
                                    <span class="desc">'.$row['contenu'].'</span>
                                    <span class="time">'.temps_ecoule($row['heure'],"date").'</span>
                                </div>
                            </a>
                        </li>';}
        else
        {$output .= '<li class="list-group-item '.$statut.'">
                            <a href="'.$row['link'].'" class="user-list-item">
                                <div class="icon bg-info">
                                    
                                </div>
                                <div class="user-desc">
                                    <span class="name">'.$row['titre'].'</span>
                                    <span class="desc">'.$row['contenu'].'</span>
                                    <span class="time">'.temps_ecoule($row['heure'],"date").'</span>
                                </div>
                            </a>
                        </li>';}

        }
    }

    else{
$output .= '<center><li>Pas de notifications</li></center>';
    }

    $data = array(
'notification' => $output,
'nombre' => $nbr);
    echo json_encode($data);
}
function temps_ecoule($date,$type) {
    if($type == "timestamp") {
        $date2 = $date; // depuis cette date
    } elseif($type == "date") {
        $date2 = strtotime($date); // depuis cette date
    } else {
        return "Non reconnu";
    }
    date_default_timezone_set("Africa/Tunis");
    $Ecart = time()-$date2;
    $Annees = date('Y',$Ecart)-1970;
    $Mois = date('m',$Ecart)-1;
    $Jours = date('d',$Ecart)-1;
    $Heures = date('H',$Ecart)-1;
    $Minutes = date('i',$Ecart);
    $Secondes = date('s',$Ecart);
    if($Annees > 0) {
        return "Il y a ".$Annees." an".($Annees>1?"s":"")." et ".$Jours." jour".($Jours>1?"s":""); // on indique les jours avec les année pour être un peu plus précis
    }
    if($Mois > 0) {
        return "Il y a ".$Mois." mois et ".$Jours." jour".($Jours>1?"s":""); // on indique les jours aussi
    }
    if($Jours > 0) {
        return "Il y a ".$Jours." jour".($Jours>1?"s":"");
    }
    if($Heures > 0) {
        return "Il y a ".$Heures." heure".($Heures>1?"s":"");
    }
    if($Minutes > 0) {
        return "Il y a ".$Minutes." minute".($Minutes>1?"s":"");
    }
    if($Secondes > 0) {
        return "Il y a ".$Secondes." seconde".($Secondes>1?"s":"");
    }
}
?>