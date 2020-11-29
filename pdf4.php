<?php
require('fpdf.php');
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$s=$_POST['s'];
$i=1;
$ppp=mysql_query("select *,sum(case when pre='P' then $i else 0 end) as p,sum(case when etat='50%' then heur else 0 end) as c,sum(case when etat='65%' then heur else 0 end) as s,sum(case when etat='100%' then heur else 0 end) as ce from point where mois='$s'  group by nom");
class PDF extends FPDF
{

function header(){
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$s=$_POST['s'];

$this->SetFont('Arial','B',12);
	
    //Décalage à droite
    $this->Cell(10);
    //Titre
    $this->Cell(1,1,'                                             OFFICE ALGERIEN INTERPROFESSIONNEL DES CEREALES (O.A.I.C)');
	 $this->Ln(8);
	 $this->SetFont('Arial','',12);
	
    //Décalage à droite
    $this->Cell(8);
    //Titre
    $this->Cell(1,1,'                                                                          COMPLEXE HAMADI KROUMA-SKIKDA ');
	 $this->Ln(8);
	 $this->SetFont('Arial','',14);
    $this->Cell(1,1,'                                                              ETAT DES ELEMENTS VARIABLES DU MOI ');
	$this->Ln(6); 
	$this->SetFont('Arial','',11);
	if($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){
    $this->Cell(1,1,"Mois d'".$s );
	 $this->Ln(6);}
	 else{$this->SetFont('Arial','',11);
    $this->Cell(1,1,"Mois de : ".$s );
	 $this->Ln(6);} 
	 $this->Cell(1,1,"STUCTURE : " );
	 $this->Ln(10); 
$this->SetFont('Arial','B',11);
$this->Cell(53,10,'Nom et prenom',1,0,'C');
$this->Cell(29,10,'Absence',1,0,'C');
$this->Cell(15,10,'Panier',1,0,'C');
$this->Cell(17,10,'PRI',1,0,'C');
$this->Cell(17,10,'HS 50%',1,0,'C');
$this->Cell(17,10,'HS 65%',1,0,'C');
$this->Cell(18,10,'HS 100%',1,0,'C');
$this->Cell(15,10,'ITP',1,0,'C');
$this->Cell(27,10,'Deplacement',1,0,'C');
$this->Cell(25,10,'Rappel',1,0,'C');
$this->Cell(40,10,'Observation',1,0,'C');
$this->Ln();
}
}
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages('{page}');
$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();
$titre = 'Etat des elements variables du mois';
$pdf->SetTitle($titre);

$pdf->SetFont('Arial','',13);
while($pp2=mysql_fetch_array($ppp))
    {
$pdf->Cell(53,8,$pp2['nom'],1,0,'C');$pdf->Cell(29,8,$pp2['ab'],1,0,'C');$pdf->Cell(15,8,$pp2['p'],1,0,'C');$pdf->Cell(17,8,$pp2['pri'],1,0,'C');$pdf->Cell(17,8,$pp2['c'],1,0,'C');$pdf->Cell(17,8,$pp2['s'],1,0,'C');$pdf->Cell(18,8,$pp2['ce'],1,0,'C');$pdf->Cell(15,8,$pp2['itp'],1,0,'C');$pdf->Cell(27,8,$pp2['deb'],1,0,'C');$pdf->Cell(25,8,$pp2['rap'],1,0,'C');$pdf->Cell(40,8,$pp2['ob'],1,0,'C');

$pdf->Ln();
}

$pdf->Output();
?>
