
<?php
require('fpdf.php');
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$s=$_GET['s'];
$i=1;
$ppp=mysql_query("
SELECT  
        t.nom,pre,
        GROUP_CONCAT(IF(t.jour = '16', t.pre, NULL)) AS '16',GROUP_CONCAT(IF(t.jour = '17', t.pre, NULL)) AS '17',GROUP_CONCAT(IF(t.jour = '18', t.pre, NULL)) AS '18',GROUP_CONCAT(IF(t.jour = '19', t.pre, NULL)) AS '19',GROUP_CONCAT(IF(t.jour = '20', t.pre, NULL)) AS '20',GROUP_CONCAT(IF(t.jour = '21', t.pre, NULL)) AS '21',GROUP_CONCAT(IF(t.jour = '22', t.pre, NULL)) AS '22',GROUP_CONCAT(IF(t.jour = '23', t.pre, NULL)) AS '23',GROUP_CONCAT(IF(t.jour = '24', t.pre, NULL)) AS '24',GROUP_CONCAT(IF(t.jour = '25', t.pre, NULL)) AS '25',GROUP_CONCAT(IF(t.jour = '26', t.pre, NULL)) AS '26',GROUP_CONCAT(IF(t.jour = '27', t.pre, NULL)) AS '27',GROUP_CONCAT(IF(t.jour = '28', t.pre, NULL)) AS '28',GROUP_CONCAT(IF(t.jour = '29', t.pre, NULL)) AS '29',GROUP_CONCAT(IF(t.jour = '30', t.pre, NULL)) AS '30',GROUP_CONCAT(IF(t.jour = '31', t.pre, NULL)) AS '31',GROUP_CONCAT(IF(t.jour = '1', t.pre, NULL)) AS '1',GROUP_CONCAT(IF(t.jour = '2', t.pre, NULL)) AS '2',GROUP_CONCAT(IF(t.jour = '3', t.pre, NULL)) AS '3',GROUP_CONCAT(IF(t.jour = '4', t.pre, NULL)) AS '4',GROUP_CONCAT(IF(t.jour = '5', t.pre, NULL)) AS '5',GROUP_CONCAT(IF(t.jour = '6', t.pre, NULL)) AS '6',GROUP_CONCAT(IF(t.jour = '7', t.pre, NULL)) AS '7',GROUP_CONCAT(IF(t.jour = '8', t.pre, NULL)) AS '8',GROUP_CONCAT(IF(t.jour = '9', t.pre, NULL)) AS '9',GROUP_CONCAT(IF(t.jour = '10', t.pre, NULL)) AS '10',GROUP_CONCAT(IF(t.jour = '11', t.pre, NULL)) AS '11',GROUP_CONCAT(IF(t.jour = '12', t.pre, NULL)) AS '12',GROUP_CONCAT(IF(t.jour = '13', t.pre, NULL)) AS '13',GROUP_CONCAT(IF(t.jour = '14', t.pre, NULL)) AS '14',GROUP_CONCAT(IF(t.jour = '15', t.pre, NULL)) AS '15',
		sum(case when pre='P' then $i else 0 end)  as p
		
FROM
        point t where mois='$s'
GROUP BY
        t.nom");	
class PDF extends FPDF
{

function header(){
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$s=$_GET['s'];
$this->SetFont('Arial','B',12);
	
    //Décalage à droite
    $this->Cell(10);
    //Titre
    $this->Cell(1,1,'                                                          UNION DES COOPERATIVES AGRICOLES (O.A.I.C)');
	 $this->Ln(10);
	 $this->SetFont('Arial','',12);
	
    //Décalage à droite
    $this->Cell(10);
    //Titre
    $this->Cell(1,1,'                                                                      COMPLEX HAMADI KROUMA-SKIKDA ');
	 $this->Ln(15);
$this->SetFont('Arial','',12);
	
    //Décalage à droite
    $this->Cell(10);
	if($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){
    //Titre
    $this->Cell(1,1,"                                                                  Etat de pointage journalier mois d' " .$s );}
	else{
	$this->Cell(1,1,"                                                                  Etat de pointage journalier mois de " .$s );}
	 $this->Ln(5);

    $this->Ln(5);
$this->SetFont('Arial','B',11);
if($s=='avril 2020' or $s=='juin 2020' or $s=='septembre 2020' or $s=='novembre 2020'){
$this->Cell(45,10,'Nom et prenom',1,0,'C');
$this->Cell(7,10,'16',1,0,'C');$this->Cell(7,10,'17',1,0,'C');$this->Cell(7,10,'18',1,0,'C');$this->Cell(7,10,'19',1,0,'C');$this->Cell(7,10,'20',1,0,'C');$this->Cell(7,10,'21',1,0,'C');$this->Cell(7,10,'22',1,0,'C');$this->Cell(7,10,'23',1,0,'C');$this->Cell(7,10,'24',1,0,'C');$this->Cell(7,10,'25',1,0,'C');$this->Cell(7,10,'26',1,0,'C');$this->Cell(7,10,'27',1,0,'C');$this->Cell(7,10,'28',1,0,'C');$this->Cell(7,10,'29',1,0,'C');$this->Cell(7,10,'30',1,0,'C');$this->Cell(7,10,'1',1,0,'C');$this->Cell(7,10,'2',1,0,'C');$this->Cell(7,10,'3',1,0,'C');$this->Cell(7,10,'4',1,0,'C');$this->Cell(7,10,'5',1,0,'C');$this->Cell(7,10,'6',1,0,'C');$this->Cell(7,10,'7',1,0,'C');$this->Cell(7,10,'8',1,0,'C');$this->Cell(7,10,'9',1,0,'C');$this->Cell(7,10,'10',1,0,'C');$this->Cell(7,10,'11',1,0,'C');$this->Cell(7,10,'12',1,0,'C');$this->Cell(7,10,'13',1,0,'C');$this->Cell(7,10,'14',1,0,'C');$this->Cell(7,10,'15',1,0,'C');$this->Cell(13,10,'Total',1,0,'C');}
else{
$this->Cell(45,10,'Nom et prenom',1,0,'C');
$this->Cell(7,10,'16',1,0,'C');$this->Cell(7,10,'17',1,0,'C');$this->Cell(7,10,'18',1,0,'C');$this->Cell(7,10,'19',1,0,'C');$this->Cell(7,10,'20',1,0,'C');$this->Cell(7,10,'21',1,0,'C');$this->Cell(7,10,'22',1,0,'C');$this->Cell(7,10,'23',1,0,'C');$this->Cell(7,10,'24',1,0,'C');$this->Cell(7,10,'25',1,0,'C');$this->Cell(7,10,'26',1,0,'C');$this->Cell(7,10,'27',1,0,'C');$this->Cell(7,10,'28',1,0,'C');$this->Cell(7,10,'29',1,0,'C');$this->Cell(7,10,'30',1,0,'C');$this->Cell(7,10,'31',1,0,'C');$this->Cell(7,10,'1',1,0,'C');$this->Cell(7,10,'2',1,0,'C');$this->Cell(7,10,'3',1,0,'C');$this->Cell(7,10,'4',1,0,'C');$this->Cell(7,10,'5',1,0,'C');$this->Cell(7,10,'6',1,0,'C');$this->Cell(7,10,'7',1,0,'C');$this->Cell(7,10,'8',1,0,'C');$this->Cell(7,10,'9',1,0,'C');$this->Cell(7,10,'10',1,0,'C');$this->Cell(7,10,'11',1,0,'C');$this->Cell(7,10,'12',1,0,'C');$this->Cell(7,10,'13',1,0,'C');$this->Cell(7,10,'14',1,0,'C');$this->Cell(7,10,'15',1,0,'C');$this->Cell(13,10,'Total',1,0,'C');}
$this->Ln();
}
}
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages('{page}');
$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();
$titre = 'Etat de pointage';
$pdf->SetTitle($titre);

$pdf->SetFont('Arial','',13);
while($pp2=mysql_fetch_array($ppp))
    {
if($s=='avril 2020' or $s=='juin 2020' or $s=='septembre 2020' or $s=='novembre 2020'){
$pdf->Cell(45,10,$pp2['nom'],1,0,'C');$pdf->Cell(8,10,$pp2['16'],1,0,'C');$pdf->Cell(8,10,$pp2['17'],1,0,'C');$pdf->Cell(8,10,$pp2['18'],1,0,'C');$pdf->Cell(8,10,$pp2['19'],1,0,'C');$pdf->Cell(8,10,$pp2['20'],1,0,'C');$pdf->Cell(8,10,$pp2['21'],1,0,'C');$pdf->Cell(8,10,$pp2['22'],1,0,'C');$pdf->Cell(8,10,$pp2['23'],1,0,'C');$pdf->Cell(8,10,$pp2['24'],1,0,'C');$pdf->Cell(8,10,$pp2['25'],1,0,'C');$pdf->Cell(8,10,$pp2['26'],1,0,'C');$pdf->Cell(7,10,$pp2['27'],1,0,'C');$pdf->Cell(7,10,$pp2['28'],1,0,'C');$pdf->Cell(7,10,$pp2['29'],1,0,'C');$pdf->Cell(7,10,$pp2['30'],1,0,'C');$pdf->Cell(7,10,$pp2['1'],1,0,'C');$pdf->Cell(7,10,$pp2['2'],1,0,'C');$pdf->Cell(7,10,$pp2['3'],1,0,'C');$pdf->Cell(7,10,$pp2['4'],1,0,'C');$pdf->Cell(7,10,$pp2['5'],1,0,'C');$pdf->Cell(7,10,$pp2['6'],1,0,'C');$pdf->Cell(7,10,$pp2['7'],1,0,'C');$pdf->Cell(7,10,$pp2['8'],1,0,'C');$pdf->Cell(7,10,$pp2['9'],1,0,'C');$pdf->Cell(7,10,$pp2['10'],1,0,'C');$pdf->Cell(7,10,$pp2['11'],1,0,'C');$pdf->Cell(7,10,$pp2['12'],1,0,'C');$pdf->Cell(7,10,$pp2['13'],1,0,'C');$pdf->Cell(7,10,$pp2['14'],1,0,'C');$pdf->Cell(7,10,$pp2['15'],1,0,'C');$pdf->Cell(10,10,$pp2['p'],1,0,'C');}
else {

$pdf->Cell(45,10,$pp2['nom'],1,0,'C');$pdf->Cell(8,10,$pp2['16'],1,0,'C');$pdf->Cell(8,10,$pp2['17'],1,0,'C');$pdf->Cell(8,10,$pp2['18'],1,0,'C');$pdf->Cell(8,10,$pp2['19'],1,0,'C');$pdf->Cell(8,10,$pp2['20'],1,0,'C');$pdf->Cell(8,10,$pp2['21'],1,0,'C');$pdf->Cell(8,10,$pp2['22'],1,0,'C');$pdf->Cell(8,10,$pp2['23'],1,0,'C');$pdf->Cell(8,10,$pp2['24'],1,0,'C');$pdf->Cell(8,10,$pp2['25'],1,0,'C');$pdf->Cell(8,10,$pp2['26'],1,0,'C');$pdf->Cell(7,10,$pp2['27'],1,0,'C');$pdf->Cell(7,10,$pp2['28'],1,0,'C');$pdf->Cell(7,10,$pp2['29'],1,0,'C');$pdf->Cell(7,10,$pp2['30'],1,0,'C');$pdf->Cell(7,10,$pp2['31'],1,0,'C');$pdf->Cell(7,10,$pp2['1'],1,0,'C');$pdf->Cell(7,10,$pp2['2'],1,0,'C');$pdf->Cell(7,10,$pp2['3'],1,0,'C');$pdf->Cell(7,10,$pp2['4'],1,0,'C');$pdf->Cell(7,10,$pp2['5'],1,0,'C');$pdf->Cell(7,10,$pp2['6'],1,0,'C');$pdf->Cell(7,10,$pp2['7'],1,0,'C');$pdf->Cell(7,10,$pp2['8'],1,0,'C');$pdf->Cell(7,10,$pp2['9'],1,0,'C');$pdf->Cell(7,10,$pp2['10'],1,0,'C');$pdf->Cell(7,10,$pp2['11'],1,0,'C');$pdf->Cell(7,10,$pp2['12'],1,0,'C');$pdf->Cell(7,10,$pp2['13'],1,0,'C');$pdf->Cell(7,10,$pp2['14'],1,0,'C');$pdf->Cell(7,10,$pp2['15'],1,0,'C');$pdf->Cell(10,10,$pp2['p'],1,0,'C');}

$pdf->Ln();
}
$pdf->Output();
?>
