<?php
require('WriteHTML.php');
require '../core/offremanage.php';
 $off= new OffreManage();
 $idoffre=$_POST['idoffre'];
 $liste=$off->recupererOffre($idoffre);

   foreach ($liste as $val) 
   $idproduit=$val['produit_id'];
   $list=$off->recupererProduit($idproduit);
       {
          
          foreach ($list as $row) 

            {

$html=" <br>Offre Spéciale !!! </br>".htmlspecialchars($val['nom'])." !!! </b> Profitez d'une superbe réduction de -".htmlspecialchars($val['pourcentage'])."% sur l'article </br> *** ".htmlspecialchars($row['produit_nom'])." *** </b> " ;




$pdf=new PDF_HTML();
$pdf->AddPage();
$pdf->SetFont('Arial');
$pdf->WriteHTML(utf8_decode($html));
            }
        }
$pdf->Output();
?>