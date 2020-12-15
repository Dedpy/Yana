<?php

//require '../entities/produit.php';
//require '../entities/image.php';
//require 'images/upload_image.php';
require_once '../core/produitC.php';
require '../core/imageC.php';
$categorie=$_POST['categorie'];




date_default_timezone_get('GMT');
$time=date("d-m-Y H:i:s");
$prods=new Produit($_POST['description'],$_POST['prix'],$_POST['quantite'],$time,$time,$_POST['nom'],$categorie,$_POST['marque'],$_POST['forme'],$_POST['couleur']);
$pr=new ProduitManage();
$id_produit=$pr->ajouter_produit($prods);

if(isset($_FILES['image']['tmp_name'])){
$im= new Images($_FILES['image']['type'],$_FILES['image']['name'],$_FILES['image']['size'],$id_produit,'principal');
$M= new ImagesManage();
//$M->transfert();
$val=$M->recupNext();	
$M->upload_image($val);

//
$M->ajouter_image($_FILES['image']['type'],$_FILES['image']['name'],$_FILES['image']['size'],$val,'principal',$id_produit);
}


if($_FILES['image2']['tmp_name']!=""){
$im2= new Images($_FILES['image2']['type'],$_FILES['image2']['name'],$_FILES['image2']['size'],$id_produit,'secondaire');
$M2= new ImagesManage();
$val2=$M2->recupNext();	
$M2->upload_image2($val2);

//if(isset($_FILES['image2']['tmp_name']))
$M2->ajouter_image($_FILES['image2']['type'],$_FILES['image2']['name'],$_FILES['image2']['size'],$val2,'secondaire',$id_produit);}
//else echo "error";


if($_FILES['image3']['tmp_name']!=""){
$im3= new Images($_FILES['image3']['type'],$_FILES['image3']['name'],$_FILES['image3']['size'],$id_produit,'secondaire');
$M3= new ImagesManage();
$val3=$M3->recupNext();	
$M3->upload_image3($val3);

//
$M3->ajouter_image($_FILES['image3']['type'],$_FILES['image3']['name'],$_FILES['image3']['size'],$val3,'secondaire',$id_produit);}
//else echo "error";
//$M->transfert2($_FILES['image']['type'],$_FILES['image']['name'],$_FILES['image']['size']);
//$M->transfert3();1


/*$M->upload_image_url($im);*/
//$M->ajouter_image();

echo "<meta http-equiv='refresh' content='0;url=affichage-produit.php'>";

         




?>