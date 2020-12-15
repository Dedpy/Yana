<?php
include '../entities/produit.php';
include '../core/produitC.php';
include '../core/imageC.php';
$categorie=$_POST['categorieM'];
$forme=$_POST['formeM'];
 date_default_timezone_get('GMT');
$time=date("d-m-Y H:i:s");
 $pr=new ProduitManage();
$prod=new Produit($_POST['descriptionM'],$_POST['prixM'],$_POST['quantiteM'],$time,$time,$_POST['nomM'],$categorie,$_POST['marqueM'],$forme ,$_POST['couleurM']);
$pr->modifierProduit($prod,$_POST['idproduitM']);
$M= new ImagesManage();
//$M->transfert();
var_dump($_POST['idproduitM']);
echo "string";
$result=$M->getIdUpload($_POST['idproduitM']);

foreach ($result as $row) {
	$id[]=$row['id_image'];
}
if($_FILES['imageM']['tmp_name']!=""){

$val2=$M->recupNext();
if(isset($id[0]))
{$M->supprimer_image($id[0]);
			
$M->upload_imageM($val2);
$M->ajouter_image($_FILES['imageM']['type'],$_FILES['imageM']['name'],$_FILES['imageM']['size'],$val2,'principal',$_POST['idproduitM']);}
else {$M->upload_imageM($val2);
$M->ajouter_image($_FILES['imageM']['type'],$_FILES['imageM']['name'],$_FILES['imageM']['size'],$val2,'principal',$_POST['idproduitM']);}

/*var_dump($_POST['idproduitM']);
$M->upload_imageM($id[0]);*/

}
if($_FILES['image2M']['tmp_name']!=""){
	$val3=$M->recupNext();
	if(isset($id[1]))
{$M->supprimer_image($id[1]);
			
$M->upload_image2M($val3);
$M->ajouter_image($_FILES['image2M']['type'],$_FILES['image2M']['name'],$_FILES['image2M']['size'],$val3,'secondaire',$_POST['idproduitM']);
}
else {$M->upload_image2M($val3);
$M->ajouter_image($_FILES['image2M']['type'],$_FILES['image2M']['name'],$_FILES['image2M']['size'],$val3,'secondaire',$_POST['idproduitM']);}
/*var_dump($_POST['idproduitM']);
$M->upload_image2M($id[1]);*/

}

if($_FILES['image3M']['tmp_name']!=""){
	$val4=$M->recupNext();
	if(isset($id[2]))
{$M->supprimer_image($id[2]);
			
$M->upload_image3M($val4);
$M->ajouter_image($_FILES['image3M']['type'],$_FILES['image3M']['name'],$_FILES['image3M']['size'],$val4,'secondaire',$_POST['idproduitM']);}
else {$M->upload_image3M($val4);
$M->ajouter_image($_FILES['image3M']['type'],$_FILES['image3M']['name'],$_FILES['image3M']['size'],$val4,'secondaire',$_POST['idproduitM']);}

/*var_dump($_POST['idproduitM']);
$M->upload_image3M($id[2]);*/

}



/*if($_FILES['image']['tmp_name']!=""){
$ph->modifier_image($_FILES['image']['type'],$_FILES['image']['name'],$_FILES['image']['size'],$val,$type,$id);
}*/ 
header("Refresh:0;url=affichage-produit.php");
exit;                                             
?>