<?PHP
require '../core/clientfideleC.php';


 $client = new clientfideleC();
 $client->supprimerClientfidele($_POST['clientfidele']);
header('Location: Clienfidele.php');

?>