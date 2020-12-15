<?php

require_once '../core/produitC.php';

require_once '../core/imageC.php';

$im=new ImagesManage();
$im->supprimerImage();
$em=new ProduitManage();
$em->supprimerProduit();


?>