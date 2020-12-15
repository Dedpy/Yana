<?php
require('WriteHTML.php');
require '../core/reclamationM.php';
  $c=new ReclamationManage();
  $val=$c->recupererreclamation_back($_GET['id']);
foreach ($val as $row) {

$html="Nom:<b>".htmlspecialchars($row["nom"])."</b><br>Prenom:<b>".htmlspecialchars($row["prenom"])."</b><br>Age:<b>".htmlspecialchars($row["age"])."</b><br>Email:<b>".htmlspecialchars($row["email"])."</b><br>Telephone:<b>".htmlspecialchars($row["telephone"])."</b><br>Pays:<b>".htmlspecialchars($row["pays"])."</b><br>Address1:<b>".htmlspecialchars($row["adress1"])."</b><br>Address2:<b>".htmlspecialchars($row["adress2"])."</b><br>Ville:<b>".htmlspecialchars($row["ville"])."</b><br>Region:<b>".htmlspecialchars($row["region"])."</b><br>Code postal:<b>".htmlspecialchars($row["code_postal"])."</b><br>Profession:<b>".htmlspecialchars($row["profession"])."</b><br>Nom Produit:<b>".htmlspecialchars($row["nom_produit"])."</b><br>Date Achat:<b>".htmlspecialchars($row["date_achat"])."</b><br>Note:<b>".htmlspecialchars($row["note"])."</b>";
$pdf=new PDF_HTML();
$pdf->AddPage();
$pdf->SetFont('Arial');
$pdf->WriteHTML(utf8_decode($html));
}
$pdf->Output();
?>