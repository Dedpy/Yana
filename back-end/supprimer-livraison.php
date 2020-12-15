<?php
require_once '../core/livraisonC.php';
$l=new LivraisonManage();
$l->supprimerLivraison($_GET['id_commande']);
header("Location: afficher-livraison.php")
?>