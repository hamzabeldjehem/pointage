<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" href="im/Cisco client 3D v2 .ico">
<title>Situation pointage</title>
</head>
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
<style>
table ,td,th{
border:1px solid #000;
border-collapse:collapse;
font-size:18px;
}
td,th{
padding:5px;
}
.form{
font-size:20px;
}
.sel{
font-size:16px;
}
.s{
background:#FF0033;
}
</style>
<style>
#menu ul{
margin:0;
padding:0;
line-height:50px;
}
#menu li{
list-style:none;
float:left;
position:relative;
background-color:#0033FF;
}
#menu ul li a {
color:#fff;
text-decoration:none;
width:250px;
height:50px;
display:block;
text-align:center;
border:1px solid #000;
font-size:20px;
}
#menu ul ul{
position:absolute;
top:52px;
visibility:hidden;
}
#menu ul li:hover ul{
visibility:visible;
}
#menu li:hover  {
background-color:#fff;
}
#menu li a:hover{
background-color:#fff;
color:#000;
}
#menu ul li ul a:hover{
color:#fff;
background-color:#000;
}
#menu ul li:hover a {
color:#000000;
}
</style>
<style>
.p{
position:absolute;
top:35%;
left:39%;
font-size:25px;
animation: p 1s infinite;
}
@keyframes p{
    0%{opacity: 1;}
    20%{opacity: 0;}
    100%{opacity: 1;}
}
</style>
<div id="menu" >
<ul>
<li><a href='#'>Taches   &nabla;</a>
<ul><li><a href='form.php'>Accueil</a></li>
<li><a href='entree.php'>Enregistrement par nom</a></li>
<li><a href='entreepj.php'>Enregistrement par jour</a></li>
<li><a href='nom.php'>Ajouter</a></li></ul></li>
<li><a href='#'>Feuilles de pointage  &nabla;</a>
<ul><li><a href='etat.php'>Etat de pointage par mois</a></li>
<li><a href='etat3.php'>Heures supplementaire</a></li>
<li><a href='etat4.php'>Etat des elements</a></li></ul></li>
<li><a href='#'>Modification  &nabla;</a>
<ul><li><a href='moden.php'>Modifier par nom</a></li>
<li><a href='moden2.php'>Modifier par jour</a></li>

</ul></ul></li>
</div>
<script src="jquery.min.js"></script>
<br>
<center>
<div class="form">
<form method="GET" name="fm" >
Mois: <select name="s" class="sel" autofocus onchange="this.form.bb.focus()">
<?php
 if(isset($_GET['s']) and !empty($_GET['s'])) echo '<option value="'.$_GET['s'].'">'.$_GET['s'].'</option>';
 if(empty($_GET['s']) or $_GET['s']!='') echo '<option value=""></option>';
        if(empty($_GET['s']) or $_GET['s']!='Janvier 2020') echo '<option value="Janvier 2020">Janvier 2020</option>';
        if(empty($_GET['s']) or $_GET['s']!='février 2020') echo '<option value="février 2020">février 2020</option>';
		if(empty($_GET['s']) or $_GET['s']!='mars 2020') echo '<option value="mars 2020">mars 2020</option>';
		if(empty($_GET['s']) or $_GET['s']!='avril 2020') echo '<option value="avril 2020">avril 2020</option>';if(empty($_POST['s']) or $_POST['s']!='mai 2020') echo '<option value="mai 2020">mai 2020</option>';if(empty($_GET['s']) or $_GET['s']!='juin 2020') echo '<option value="juin 2020">juin 2020</option>';if(empty($_GET['s']) or $_GET['s']!='juillet 2020') echo '<option value="juillet 2020">juillet 2020</option>';if(empty($_GET['s']) or $_GET['s']!='aout 2020') echo '<option value="aout 2020">aout 2020</option>';if(empty($_GET['s']) or $_GET['s']!='septembre 2020') echo '<option value="septembre 2020">septembre 2020</option>';if(empty($_GET['s']) or $_GET['s']!='octobre 2020') echo '<option value="octobre 2020">octobre 2020</option>';if(empty($_GET['s']) or $_GET['s']!='novembre 2020') echo '<option value="novembre 2020">novembre 2020</option>';if(empty($_GET['s']) or $_GET['s']!='décembre 2020') echo '<option value="décembre 2020">décembre 2020</option>';
        
        
        ?>
<input type="submit" name="bb" value="Valider">

</div>
<?php echo'<div style="float: right">
<button name="imp" onclick="imprimer()" class="num">Imprimer</button>
</div>'; ?>
<br><br>
<div class="p"><p><em><h2>Situation pointage </h2></em></p></div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
if(isset($_GET['s'])){
$s=$_GET['s'];

$ss=mysql_query("select * from point where mois='$s'");
$ss1=mysql_fetch_array($ss);
$s1=$ss1['mois'];
if($s1!=''){?>
<style>.p{display:none;}</style>
<?php
if (isset($_GET["modifier"])){
$requete3="UPDATE point SET  etat='".$_GET["etat"]."', heur='".$_GET["heur"]."' where  id='".$_GET["idOrigin"]."' ";
$result=mysql_query($requete3);
}
$ppp=mysql_query("
SELECT  
        t.nom,
        GROUP_CONCAT(IF(t.jour = '16',t.etat, NULL)) AS '166',GROUP_CONCAT(IF(t.jour = '16',t.heur, NULL)) AS '266',GROUP_CONCAT(IF(t.jour = '17',t.etat, NULL)) AS '177',GROUP_CONCAT(IF(t.jour = '17',t.heur, NULL)) AS '277',GROUP_CONCAT(IF(t.jour = '18',t.etat, NULL)) AS '188',GROUP_CONCAT(IF(t.jour = '18',t.heur, NULL)) AS '288',GROUP_CONCAT(IF(t.jour = '19',t.etat, NULL)) AS '199',GROUP_CONCAT(IF(t.jour = '19',t.heur, NULL)) AS '299',GROUP_CONCAT(IF(t.jour = '20',t.etat, NULL)) AS '120',GROUP_CONCAT(IF(t.jour = '20',t.heur, NULL)) AS '220',GROUP_CONCAT(IF(t.jour = '21',t.etat, NULL)) AS '121',GROUP_CONCAT(IF(t.jour = '21',t.heur, NULL)) AS '221',GROUP_CONCAT(IF(t.jour = '22',t.etat, NULL)) AS '122',GROUP_CONCAT(IF(t.jour = '22',t.heur, NULL)) AS '222',GROUP_CONCAT(IF(t.jour = '23',t.etat, NULL)) AS '123',GROUP_CONCAT(IF(t.jour = '23',t.heur, NULL)) AS '223',GROUP_CONCAT(IF(t.jour = '24',t.etat, NULL)) AS '124',GROUP_CONCAT(IF(t.jour = '24',t.heur, NULL)) AS '224',GROUP_CONCAT(IF(t.jour = '25',t.etat, NULL)) AS '125',GROUP_CONCAT(IF(t.jour = '25',t.heur, NULL)) AS '225',GROUP_CONCAT(IF(t.jour = '26',t.etat, NULL)) AS '126',GROUP_CONCAT(IF(t.jour = '26',t.heur, NULL)) AS '226',GROUP_CONCAT(IF(t.jour = '27',t.etat, NULL)) AS '127',GROUP_CONCAT(IF(t.jour = '27',t.heur, NULL)) AS '227',GROUP_CONCAT(IF(t.jour = '28',t.etat, NULL)) AS '128',GROUP_CONCAT(IF(t.jour = '28',t.heur, NULL)) AS '228',GROUP_CONCAT(IF(t.jour = '29',t.etat, NULL)) AS '129',GROUP_CONCAT(IF(t.jour = '29',t.heur, NULL)) AS '229',GROUP_CONCAT(IF(t.jour = '30',t.etat, NULL)) AS '130',GROUP_CONCAT(IF(t.jour = '30',t.heur, NULL)) AS '230',GROUP_CONCAT(IF(t.jour = '31',t.etat, NULL)) AS '131',GROUP_CONCAT(IF(t.jour = '31',t.heur, NULL)) AS '231',GROUP_CONCAT(IF(t.jour = '1',t.etat, NULL)) AS '101',GROUP_CONCAT(IF(t.jour = '1',t.heur, NULL)) AS '201',GROUP_CONCAT(IF(t.jour = '2',t.etat, NULL)) AS '102',GROUP_CONCAT(IF(t.jour = '2',t.heur, NULL)) AS '202',GROUP_CONCAT(IF(t.jour = '3',t.etat, NULL)) AS '103',GROUP_CONCAT(IF(t.jour = '3',t.heur, NULL)) AS '203',GROUP_CONCAT(IF(t.jour = '4',t.etat, NULL)) AS '104',GROUP_CONCAT(IF(t.jour = '4',t.heur, NULL)) AS '204',GROUP_CONCAT(IF(t.jour = '5',t.etat, NULL)) AS '105',GROUP_CONCAT(IF(t.jour = '5',t.heur, NULL)) AS '205',GROUP_CONCAT(IF(t.jour = '6',t.etat, NULL)) AS '106',GROUP_CONCAT(IF(t.jour = '6',t.heur, NULL)) AS '206',GROUP_CONCAT(IF(t.jour = '7',t.etat, NULL)) AS '107',GROUP_CONCAT(IF(t.jour = '7',t.heur, NULL)) AS '207',GROUP_CONCAT(IF(t.jour = '8',t.etat, NULL)) AS '108',GROUP_CONCAT(IF(t.jour = '8',t.heur, NULL)) AS '208',GROUP_CONCAT(IF(t.jour = '9',t.etat, NULL)) AS '109',GROUP_CONCAT(IF(t.jour = '9',t.heur, NULL)) AS '209',GROUP_CONCAT(IF(t.jour = '10',t.etat, NULL)) AS '110',GROUP_CONCAT(IF(t.jour = '10',t.heur, NULL)) AS '210',GROUP_CONCAT(IF(t.jour = '11',t.etat, NULL)) AS '111',GROUP_CONCAT(IF(t.jour = '11',t.heur, NULL)) AS '211',GROUP_CONCAT(IF(t.jour = '12',t.etat, NULL)) AS '112',GROUP_CONCAT(IF(t.jour = '12',t.heur, NULL)) AS '212',GROUP_CONCAT(IF(t.jour = '13',t.etat, NULL)) AS '113',GROUP_CONCAT(IF(t.jour = '13',t.heur, NULL)) AS '213',GROUP_CONCAT(IF(t.jour = '14',t.etat, NULL)) AS '114',GROUP_CONCAT(IF(t.jour = '14',t.heur, NULL)) AS '214',GROUP_CONCAT(IF(t.jour = '15',t.etat, NULL)) AS '115',GROUP_CONCAT(IF(t.jour = '15',t.heur, NULL)) AS '215',
		sum(case when etat='50%' then heur else 0 end)  as p,sum(case when etat='65%' then heur else 0 end)  as pp,sum(case when etat='100%' then heur else 0 end)  as ppp
		
FROM
        point t where mois='$s' and heur!='0' and etat!='' 
GROUP BY
        t.nom");
		
	
//<?php
		echo '<div id="Panel1">';
		if($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){
		echo"<center><h4>Mois d'$s</h4></center>";}
		else{echo"<center><h4>Mois de $s</h4></center>";}
		echo"Nom et prenom: <input type='text' list='a' name='no' onkeydown='deu(event)' id='nn' size='20'>";
$listtt=mysql_query("SELECT * FROM nom");echo'<datalist id="a"  >';
while($mttt=mysql_fetch_array($listtt)){
echo'<option  value="'.$mttt['nom'].'">'.$mttt['code'].'</option>';}
echo'</datalist>';
echo" Jour: <input type='text' name='jo' id='jj' size='10'>";

if(isset($_GET['no'],$_GET['jo'])){
$no=$_GET['no'];
$jo=$_GET['jo'];
$res=mysql_query("SELECT * FROM point   WHERE jour='$jo' and nom='$no' and mois='$s' ");
	
		$pp3=mysql_fetch_array($res);
		$a=$pp3['id'];
		if($jo!='' and $no!='' and $a!=''){
	header("location:mod2.php?id=".$pp3['id']."");}}
	echo"<div style=float:right>";

echo'Search <input type="text" placeholder="Search..." class="chercher">';
echo"</div>";
echo"<br><br>";
echo "<table border='1' class='table'>";
echo"<thead>";
echo"<tr>";
if($s=='avril 2020' or $s=='juin 2020' or $s=='septembre 2020' or $s=='novembre 2020'){
echo "<th  align=center width=30%>Nom et prenom </th>";
echo "<th  align=center>16</th>";
echo "<th  align=center>17</th>";
echo "<th  align=center>18</th>";
echo "<th  align=center>19</th>";
echo "<th  align=center>20</th>";
echo "<th  align=center>21</th>";
echo "<th  align=center>22</th>";echo "<th  align=center>23</th>";echo "<th  align=center>24</th>";echo "<th  align=center>25</th>";echo "<th  align=center>26</th>";echo "<th  align=center>27</th>";echo "<th  align=center>28</th>";echo "<th  align=center>29</th>";echo "<th  align=center>30</th>";echo "<th  align=center>1</th>";echo "<th  align=center>2</th>";echo "<th  align=center>3</th>";echo "<th  align=center>4</th>";echo "<th  align=center>5</th>";echo "<th  align=center>6</th>";echo "<th  align=center>7</th>";echo "<th  align=center>8</th>";echo "<th  align=center>9</th>";echo "<th  align=center>10</th>";echo "<th  align=center>11</th>";echo "<th  align=center>12</th>";echo "<th  align=center>13</th>";echo "<th  align=center>14</th>";echo "<th  align=center>15</th>";echo "<th  align=center>50%</th>";echo "<th  align=center>65%</th>";echo "<th  align=center>100%</th>";}
else{
echo "<th  align=center width=30%>Nom et prenom </th>";
echo "<th  align=center>16</th>";
echo "<th  align=center>17</th>";
echo "<th  align=center>18</th>";
echo "<th  align=center>19</th>";
echo "<th  align=center>20</th>";
echo "<th  align=center>21</th>";
echo "<th  align=center>22</th>";echo "<th  align=center>23</th>";echo "<th  align=center>24</th>";echo "<th  align=center>25</th>";echo "<th  align=center>26</th>";echo "<th  align=center>27</th>";echo "<th  align=center>28</th>";echo "<th  align=center>29</th>";echo "<th  align=center>30</th>";echo "<th  align=center>31</th>";echo "<th  align=center>1</th>";echo "<th  align=center>2</th>";echo "<th  align=center>3</th>";echo "<th  align=center>4</th>";echo "<th  align=center>5</th>";echo "<th  align=center>6</th>";echo "<th  align=center>7</th>";echo "<th  align=center>8</th>";echo "<th  align=center>9</th>";echo "<th  align=center>10</th>";echo "<th  align=center>11</th>";echo "<th  align=center>12</th>";echo "<th  align=center>13</th>";echo "<th  align=center>14</th>";echo "<th  align=center>15</th>";echo "<th  align=center>50%</th>";echo "<th  align=center>65%</th>";echo "<th  align=center>100%</th>";}

echo"</tr></thead>";		
		while ($pp2=mysql_fetch_array($ppp)){
		$mmm=$pp2['166'];
		$mmm2=$pp2['266'];
		echo"<tbody id='tab'>";	
	echo"<tr>";
	if($s=='avril 2020' or $s=='juin 2020' or $s=='septembre 2020' or $s=='novembre 2020'){
echo "<td  align=center width=30%>$pp2[nom] </td>";
if($mmm!='' and $mmm2!=''){echo "<td  align=center >$mmm <br><br> $mmm2 h</td>";}else{echo "<td  align=center ></td>";}if($pp2['177']!='' and $pp2['277']!=''){echo "<td  align=center >$pp2[177] <br><br> $pp2[277] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['188']!='' and $pp2['288']!=''){echo "<td  align=center >$pp2[188] <br><br> $pp2[288] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['199']!='' and $pp2['299']!=''){echo "<td  align=center >$pp2[199] <br><br> $pp2[299] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['120']!='' and $pp2['220']!=''){echo "<td  align=center >$pp2[120] <br><br> $pp2[220] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['121']!='' and $pp2['221']!=''){echo "<td  align=center >$pp2[121] <br><br> $pp2[221] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['122']!='' and $pp2['222']!=''){echo "<td  align=center >$pp2[122] <br><br> $pp2[222] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['123']!='' and $pp2['223']!=''){echo "<td  align=center >$pp2[123] <br><br> $pp2[223] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['124']!='' and $pp2['224']!=''){echo "<td  align=center >$pp2[124] <br><br> $pp2[224] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['125']!='' and $pp2['225']!=''){echo "<td  align=center >$pp2[125] <br><br> $pp2[225] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['126']!='' and $pp2['226']!=''){echo "<td  align=center >$pp2[126] <br><br> $pp2[226] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['127']!='' and $pp2['227']!=''){echo "<td  align=center >$pp2[127] <br><br> $pp2[227] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['128']!='' and $pp2['228']!=''){echo "<td  align=center >$pp2[128] <br><br> $pp2[228] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['129']!='' and $pp2['229']!=''){echo "<td  align=center >$pp2[129] <br><br> $pp2[229] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['130']!='' and $pp2['230']!=''){echo "<td  align=center >$pp2[130] <br><br> $pp2[230] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['101']!='' and $pp2['201']!=''){echo "<td  align=center >$pp2[101] <br><br> $pp2[201] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['102']!='' and $pp2['202']!=''){echo "<td  align=center >$pp2[102] <br><br> $pp2[202] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['103']!='' and $pp2['203']!=''){echo "<td  align=center >$pp2[103] <br><br> $pp2[203] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['104']!='' and $pp2['204']!=''){echo "<td  align=center >$pp2[104] <br><br> $pp2[204] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['105']!='' and $pp2['205']!=''){echo "<td  align=center >$pp2[105] <br><br> $pp2[205] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['106']!='' and $pp2['206']!=''){echo "<td  align=center >$pp2[106] <br><br> $pp2[206] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['107']!='' and $pp2['207']!=''){echo "<td  align=center >$pp2[107] <br><br> $pp2[207] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['108']!='' and $pp2['208']!=''){echo "<td  align=center >$pp2[108] <br><br> $pp2[208] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['109']!='' and $pp2['209']!=''){echo "<td  align=center >$pp2[109] <br><br> $pp2[209] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['110']!='' and $pp2['210']!=''){echo "<td  align=center >$pp2[110] <br><br> $pp2[210] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['111']!='' and $pp2['211']!=''){echo "<td  align=center >$pp2[111] <br><br> $pp2[211] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['112']!='' and $pp2['212']!=''){echo "<td  align=center >$pp2[112] <br><br> $pp2[212] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['113']!='' and $pp2['213']!=''){echo "<td  align=center >$pp2[113] <br><br> $pp2[213] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['114']!='' and $pp2['214']!=''){echo "<td  align=center >$pp2[114] <br><br> $pp2[214] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['115']!='' and $pp2['215']!=''){echo "<td  align=center >$pp2[115] <br><br> $pp2[215] h</td>";}else{echo "<td  align=center ></td>";}echo "<td  align=center width=30%>$pp2[p]</td>";echo "<td  align=center width=30%>$pp2[pp]</td>";echo "<td  align=center width=30%>$pp2[ppp]</td>";}
else{
echo "<td  align=center width=30%>$pp2[nom] </td>";
if($mmm!='' and $mmm2!=''){echo "<td  align=center >$mmm <br><br> $mmm2 h</td>";}else{echo "<td  align=center ></td>";}if($pp2['177']!='' and $pp2['277']!=''){echo "<td  align=center >$pp2[177] <br><br> $pp2[277] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['188']!='' and $pp2['288']!=''){echo "<td  align=center >$pp2[188] <br><br> $pp2[288] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['199']!='' and $pp2['299']!=''){echo "<td  align=center >$pp2[199] <br><br> $pp2[299] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['120']!='' and $pp2['220']!=''){echo "<td  align=center >$pp2[120] <br><br> $pp2[220] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['121']!='' and $pp2['221']!=''){echo "<td  align=center >$pp2[121] <br><br> $pp2[221] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['122']!='' and $pp2['222']!=''){echo "<td  align=center >$pp2[122] <br><br> $pp2[222] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['123']!='' and $pp2['223']!=''){echo "<td  align=center >$pp2[123] <br><br> $pp2[223] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['124']!='' and $pp2['224']!=''){echo "<td  align=center >$pp2[124] <br><br> $pp2[224] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['125']!='' and $pp2['225']!=''){echo "<td  align=center >$pp2[125] <br><br> $pp2[225] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['126']!='' and $pp2['226']!=''){echo "<td  align=center >$pp2[126] <br><br> $pp2[226] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['127']!='' and $pp2['227']!=''){echo "<td  align=center >$pp2[127] <br><br> $pp2[227] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['128']!='' and $pp2['228']!=''){echo "<td  align=center >$pp2[128] <br><br> $pp2[228] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['129']!='' and $pp2['229']!=''){echo "<td  align=center >$pp2[129] <br><br> $pp2[229] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['130']!='' and $pp2['230']!=''){echo "<td  align=center >$pp2[130] <br><br> $pp2[230] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['131']!='' and $pp2['231']!=''){echo "<td  align=center >$pp2[131] <br><br> $pp2[231] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['101']!='' and $pp2['201']!=''){echo "<td  align=center >$pp2[101] <br><br> $pp2[201] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['102']!='' and $pp2['202']!=''){echo "<td  align=center >$pp2[102] <br><br> $pp2[202] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['103']!='' and $pp2['203']!=''){echo "<td  align=center >$pp2[103] <br><br> $pp2[203] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['104']!='' and $pp2['204']!=''){echo "<td  align=center >$pp2[104] <br><br> $pp2[204] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['105']!='' and $pp2['205']!=''){echo "<td  align=center >$pp2[105] <br><br> $pp2[205] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['106']!='' and $pp2['206']!=''){echo "<td  align=center >$pp2[106] <br><br> $pp2[206] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['107']!='' and $pp2['207']!=''){echo "<td  align=center >$pp2[107] <br><br> $pp2[207] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['108']!='' and $pp2['208']!=''){echo "<td  align=center >$pp2[108] <br><br> $pp2[208] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['109']!='' and $pp2['209']!=''){echo "<td  align=center >$pp2[109] <br><br> $pp2[209] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['110']!='' and $pp2['210']!=''){echo "<td  align=center >$pp2[110] <br><br> $pp2[210] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['111']!='' and $pp2['211']!=''){echo "<td  align=center >$pp2[111] <br><br> $pp2[211] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['112']!='' and $pp2['212']!=''){echo "<td  align=center >$pp2[112] <br><br> $pp2[212] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['113']!='' and $pp2['213']!=''){echo "<td  align=center >$pp2[113] <br><br> $pp2[213] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['114']!='' and $pp2['214']!=''){echo "<td  align=center >$pp2[114] <br><br> $pp2[214] h</td>";}else{echo "<td  align=center ></td>";}if($pp2['115']!='' and $pp2['215']!=''){echo "<td  align=center >$pp2[115] <br><br> $pp2[215] h</td>";}else{echo "<td  align=center ></td>";}echo "<td  align=center width=30%>$pp2[p]</td>";echo "<td  align=center width=30%>$pp2[pp]</td>";echo "<td  align=center width=30%>$pp2[ppp]</td>";}
	echo"</tr>";
		}
		echo"</tbody>";
		echo"</table>";
		echo "</div>";
}
elseif($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){ echo"<div class=''><p><em><h2>Le mois d'$s est invalide!</h2></em></p></div>";}
else{ echo"<div class=''><p><em><h2>Le mois de $s est invalide!</h2></em></p></div>";}

}
//http://www.informatix.fr/tutoriels/base-de-donnees/mysql-une-table-pivot-dynamique-178
?>
<script type="text/javascript">
function imprimer() {
   var header = '<body onload="window.close()">';
    var body = document.getElementById("Panel1");
	var wme = window.open("","","height=710,width=720");
	
    wme.document.write(body.innerHTML+header);
	wme.print();
    wme.document.close();		
}

</script>
<script>
$(document).ready(function(){
$(".chercher").keyup(function(){
var a=$(this).val().toUpperCase();
$("#tab tr").filter(function(){
$(this).toggle($(this).text().toUpperCase().indexOf(a)>-1)
});
});
});
</script>
</center>
</html>