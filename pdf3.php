
<?php
require('fpdf.php');
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$s=$_POST['s'];
$jour=$_POST['jour'];
$shift=$_POST['shift'];
$ppp=mysql_query("
SELECT  
        t.nom,t.pre,t.heur,t.jour,t.shift,t.mois,
        GROUP_CONCAT(IF(t.etat = '50%', t.heur, 0)) AS '16',GROUP_CONCAT(IF(t.etat = '65%', t.heur, 0)) AS '17',GROUP_CONCAT(IF(t.etat = '100%', t.heur, 0)) AS '18'
		
		 FROM point t where mois='$s' and jour='$jour' and shift='$shift' group by nom");
class PDF extends FPDF
{

function header(){
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$s=$_POST['s'];
$jour=$_POST['jour'];
$shift=$_POST['shift'];
$nnn=mysql_query("SELECT *,count(nom) as n FROM point  where mois='$s' and jour='$jour' and shift='$shift'");
$nn=mysql_fetch_array($nnn);
$n=$nn['n'];
$per=$nn['p'];
$this->SetFont('Arial','B',12);
	
    //Décalage à droite
    $this->Cell(10);
    //Titre
    $this->Cell(1,1,'         OFFICE ALGERIEN INTERPROFESSIONNEL DES CEREALES (O.A.I.C)');
	 $this->Ln(8);
	 $this->SetFont('Arial','',12);
	
    //Décalage à droite
    $this->Cell(8);
    //Titre
    $this->Cell(1,1,'                          UNION DES COOPERATIVES AGRICOLES DE SKIKDA ');
	 $this->Ln(8);
$this->SetFont('Arial','',11);
    $this->Cell(1,1,'SERVICE DU PERSONNEL' );
	 $this->Ln(5);
$this->SetFont('Arial','',11);
    $this->Cell(1,1,'SECTION PAIE' );
	 $this->Ln(7);
	 $this->SetFont('Arial','',14);
    $this->Cell(1,1,'                             Demande de travaux en heures supplementaire ');
	 $this->Ln(12); 
	$this->SetFont('Arial','',11);
    $this->Cell(1,1,'SECTION PAIE :                                                                       EXPL-PORT' );
	$this->Ln(6); 
	$this->SetFont('Arial','',11);
    $this->Cell(1,1,'NATURE DES TRAVAUX A REALISER :                                                                       ' );
	$this->Ln(6); 
	$this->SetFont('Arial','',11);
    $this->Cell(1,1,"DATE :".$jour." ".$s."                    ".$shift."                                 NBR D'AGENTS A RETENIR : ".$n );
	$this->Ln(6); 
	$this->SetFont('Arial','',11);
    $this->Cell(1,1,"TEMPS DE REALISATION : de ".$per."                                      AGENTS RETENUS : ".$n );
	 $this->Ln(10); 
	 
$this->SetFont('Arial','B',11);
$this->Cell(50,10,'Nom et prenom',1,0,'C');
$this->Cell(25,10,'Fonctions',1,0,'C');
$this->Cell(25,10,'NBR heures',1,0,'C');
$this->Cell(51,5,'Majoration',1,0,'C');
$this->Cell (-0.005,5,'',1,1);
$this->Cell (100,5,'',0,0);
$this->Cell(17,5,'50%',1,0,'C');
$this->Cell(17,5,'65%',1,0,'C');
$this->Cell(17,5,'100%',1,0,'C');
$this->SetY(78);
$this->Cell(151);
$this->Cell(15,10,'Panier',1,0,'C');
$this->Cell(25,10,'Observation',1,0,'C');
$this->Ln();
}
}
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages('{page}');
$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();
$titre = 'Heures supplementaire';
$pdf->SetTitle($titre);

$pdf->SetFont('Arial','',13);
while($pp2=mysql_fetch_array($ppp))
    {
$pdf->Cell(50,8,$pp2['nom'],1,0,'C');$pdf->Cell(25,8,'',1,0,'C');$pdf->Cell(25,8,$pp2['heur'],1,0,'C');$pdf->Cell(17,8,$pp2['16'],1,0,'C');$pdf->Cell(17,8,$pp2['17'],1,0,'C');$pdf->Cell(17,8,$pp2['18'],1,0,'C');$pdf->Cell(15,8,'',1,0,'C');$pdf->Cell(25,8,'',1,0,'C');

$pdf->Ln();
}
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(1,1,'LE CHEF SERVICE                           LE RESPONSABLE ACTIVITE PORTUAIRE                      AVIS DU DIRECTEUR ');

$pdf->Output();
?>
