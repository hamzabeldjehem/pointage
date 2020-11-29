 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
<title>Etat de pointage</title>
</head>
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
 <script>
function generateReportA(){
   document.forms['fm'].action = 'pdf.php';
   document.forms['fm'].submit('imprimer');
   }
</script>
<style>
table ,td,th{
border:1px solid #000;
border-collapse:collapse;
font-size:17px;
}
td,th{
padding:5px;
}
.s{
background-color:#FF0033;
}
.sel{
font-size:16px;
}
.form{
font-size:20px;
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
left:40%;
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
<ul><li><a href='etat2.php'>Situation pointage</a></li>
<li><a href='etat3.php'>Heures supplementaire</a></li>
<li><a href='etat4.php'>Etat des elements</a></li></ul></li>
<li><a href='#'>Modification  &nabla;</a>
<ul><li><a href='moden.php'>Modifier par nom</a></li>
<li><a href='moden2.php'>Modifier par jour</a></li>

</ul></ul></li>
</div>

<br><br>

<center>

<div class="form">
<form method="GET" name="fm" id="myform" >
Mois: <select name="s" id="ss" class="sel" autofocus onkeydown="un(event)"  onchange="this.form.bb.focus()">
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
<input type="button"   name="imprimer" onclick="generateReportA();" value="Imprimer" />
</div>'; ?>
<br>
<div class="p"><p><em><h2>Etat de pointage</h2></em></p></div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
if(isset($_GET['s'])){
$s=$_GET['s'];
$ss=mysql_query("select * from point where mois='$s'");
$ss1=mysql_fetch_array($ss);

$s1=$ss1['mois'];
$s2=$ss1['id'];
if($s1!=''){
?>
<style>.p{display:none;}</style>
<?php
echo"<center><h4>UNION DES COOPERATIVES AGRICOLES (O.A.I.C)</h4></center>";
echo"<center><div class='sel'>COMPLEX HAMADI KROUMA-SKIKDA</div></center>";
if($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){
echo"<center><h4>Etat de pointage journalier mois d'$s :</h4></center>";}
else{echo"<center><h4>Etat de pointage journalier mois de $s :</h4></center></center>";}

echo"Nom et prenom: <input type='text' list='a' name='no' onkeydown='deu(event)' id='nn' size='20'>";
$listtt=mysql_query("SELECT * FROM nom");echo'<datalist id="a"  >';
while($mttt=mysql_fetch_array($listtt)){
echo'<option  value="'.$mttt['nom'].'">'.$mttt['code'].'</option>';}
echo'</datalist>';
echo" Jour: <input type='text' name='jo' id='jj' size='10'>";

if (isset($_GET["modifier"])){
$requete="UPDATE point SET pre='".$_GET["pre"]."'  where  id='".$_GET["idOrigine"]."' ";
$result=mysql_query($requete);
}
if(isset($_GET['no'],$_GET['jo'])){
$no=$_GET['no'];
$jo=$_GET['jo'];
$res=mysql_query("SELECT * FROM point   WHERE jour='$jo' and nom='$no' and mois='$s' order by id ASC ");
	
		$pp3=mysql_fetch_array($res);
		$a=$pp3['id'];
		if($jo!='' and $no!='' and $a!=''){
	
	header("location:mod1.php?id=".$pp3['id']."");
}}
echo"<center>";
echo"<div style=float:right>";
echo'Search <input type="text" placeholder="Search..." class="chercher">';
echo"</div>";
echo"<br><br>";
echo "<table  >";
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
echo "<th  align=center>22</th>";echo "<th  align=center>23</th>";echo "<th  align=center>24</th>";echo "<th  align=center>25</th>";echo "<th  align=center>26</th>";echo "<th  align=center>27</th>";echo "<th  align=center>28</th>";echo "<th  align=center>29</th>";echo "<th  align=center>30</th>";echo "<th  align=center>1</th>";echo "<th  align=center>2</th>";echo "<th  align=center>3</th>";echo "<th  align=center>4</th>";echo "<th  align=center>5</th>";echo "<th  align=center>6</th>";echo "<th  align=center>7</th>";echo "<th  align=center>8</th>";echo "<th  align=center>9</th>";echo "<th  align=center>10</th>";echo "<th  align=center>11</th>";echo "<th  align=center>12</th>";echo "<th  align=center>13</th>";echo "<th  align=center>14</th>";echo "<th  align=center>15</th>";echo "<th  align=center>Total</th>";}
else{
echo "<th  align=center width=30%>Nom et prenom </th>";
echo "<th  align=center>16</th>";
echo "<th  align=center>17</th>";
echo "<th  align=center>18</th>";
echo "<th  align=center>19</th>";
echo "<th  align=center>20</th>";
echo "<th  align=center>21</th>";
echo "<th  align=center>22</th>";echo "<th  align=center>23</th>";echo "<th  align=center>24</th>";echo "<th  align=center>25</th>";echo "<th  align=center>26</th>";echo "<th  align=center>27</th>";echo "<th  align=center>28</th>";echo "<th  align=center>29</th>";echo "<th  align=center>30</th>";echo "<th  align=center>31</th>";echo "<th  align=center>1</th>";echo "<th  align=center>2</th>";echo "<th  align=center>3</th>";echo "<th  align=center>4</th>";echo "<th  align=center>5</th>";echo "<th  align=center>6</th>";echo "<th  align=center>7</th>";echo "<th  align=center>8</th>";echo "<th  align=center>9</th>";echo "<th  align=center>10</th>";echo "<th  align=center>11</th>";echo "<th  align=center>12</th>";echo "<th  align=center>13</th>";echo "<th  align=center>14</th>";echo "<th  align=center>15</th>";echo "<th  align=center>Total</th>";}

echo"</tr></thead>";
$i=1;
$ppp=mysql_query("
SELECT  
        t.nom,pre,id,jour,
        GROUP_CONCAT(IF(t.jour = '16',t.pre , NULL)) AS '16' ,GROUP_CONCAT(IF(t.jour = '17', t.pre, NULL)) AS '17',GROUP_CONCAT(IF(t.jour = '18', t.pre, NULL)) AS '18',GROUP_CONCAT(IF(t.jour = '19', t.pre, NULL)) AS '19',GROUP_CONCAT(IF(t.jour = '20', t.pre, NULL)) AS '20',GROUP_CONCAT(IF(t.jour = '21', t.pre, NULL)) AS '21',GROUP_CONCAT(IF(t.jour = '22', t.pre, NULL)) AS '22',GROUP_CONCAT(IF(t.jour = '23', t.pre, NULL)) AS '23',GROUP_CONCAT(IF(t.jour = '24', t.pre, NULL)) AS '24',GROUP_CONCAT(IF(t.jour = '25', t.pre, NULL)) AS '25',GROUP_CONCAT(IF(t.jour = '26', t.pre, NULL)) AS '26',GROUP_CONCAT(IF(t.jour = '27', t.pre, NULL)) AS '27',GROUP_CONCAT(IF(t.jour = '28', t.pre, NULL)) AS '28',GROUP_CONCAT(IF(t.jour = '29', t.pre, NULL)) AS '29',GROUP_CONCAT(IF(t.jour = '30', t.pre, NULL)) AS '30',GROUP_CONCAT(IF(t.jour = '31', t.pre, NULL)) AS '31',GROUP_CONCAT(IF(t.jour = '1', t.pre, NULL)) AS '1',GROUP_CONCAT(IF(t.jour = '2', t.pre, NULL)) AS '2',GROUP_CONCAT(IF(t.jour = '3', t.pre, NULL)) AS '3',GROUP_CONCAT(IF(t.jour = '4', t.pre, NULL)) AS '4',GROUP_CONCAT(IF(t.jour = '5', t.pre, NULL)) AS '5',GROUP_CONCAT(IF(t.jour = '6', t.pre, NULL)) AS '6',GROUP_CONCAT(IF(t.jour = '7', t.pre, NULL)) AS '7',GROUP_CONCAT(IF(t.jour = '8', t.pre, NULL)) AS '8',GROUP_CONCAT(IF(t.jour = '9', t.pre, NULL)) AS '9',GROUP_CONCAT(IF(t.jour = '10', t.pre, NULL)) AS '10',GROUP_CONCAT(IF(t.jour = '11', t.pre, NULL)) AS '11',GROUP_CONCAT(IF(t.jour = '12', t.pre, NULL)) AS '12',GROUP_CONCAT(IF(t.jour = '13', t.pre, NULL)) AS '13',GROUP_CONCAT(IF(t.jour = '14', t.pre, NULL)) AS '14',GROUP_CONCAT(IF(t.jour = '15', t.pre, NULL)) AS '15',
		sum(case when pre='P' then $i else 0 end)  as p
		
FROM
        point t where mois='$s'
GROUP BY
        t.nom");
		
		while ($pp2=mysql_fetch_array($ppp)){
		$mmmm=$pp2['16'];
		$mmm2=$pp2['17'];
	echo"<tbody id='tab'>";	
	echo"<tr>";
	if($s=='avril 2020' or $s=='juin 2020' or $s=='septembre 2020' or $s=='novembre 2020'){
echo "<td  align=center width=30%>$pp2[nom]</td>";
echo "<td  align=center width=30%>$mmmm</td>";echo "<td  align=center width=30%>$mmm2 </td>"; echo "<td  align=center width=30%>$pp2[18]</td>";echo "<td  align=center width=30%>$pp2[19]</td>";echo "<td  align=center width=30%>$pp2[20]</td>";echo "<td  align=center width=30%>$pp2[21]</td>";echo "<td  align=center width=30%>$pp2[22]</td>";echo "<td  align=center width=30%>$pp2[23]</td>";echo "<td  align=center width=30%>$pp2[24]</td>";echo "<td  align=center width=30%>$pp2[25]</td>";echo "<td  align=center width=30%>$pp2[26]</td>";echo "<td  align=center width=30%>$pp2[27]</td>";echo "<td  align=center width=30%>$pp2[28]</td>";echo "<td  align=center width=30%>$pp2[29]</td>";echo "<td  align=center width=30%>$pp2[30]</td>";echo "<td  align=center width=30%>$pp2[1]</td>";echo "<td  align=center width=30%>$pp2[2]</td>";echo "<td  align=center width=30%>$pp2[3]</td>";echo "<td  align=center width=30%>$pp2[4]</td>";echo "<td  align=center width=30%>$pp2[5]</td>";echo "<td  align=center width=30%>$pp2[6]</td>";echo "<td  align=center width=30%>$pp2[7]</td>";echo "<td  align=center width=30%>$pp2[8]</td>";echo "<td  align=center width=30%>$pp2[9]</td>";echo "<td  align=center width=30%>$pp2[10]</td>";echo "<td  align=center width=30%>$pp2[11]</td>";echo "<td  align=center width=30%>$pp2[12]</td>";echo "<td  align=center width=30%>$pp2[13]</td>";echo "<td  align=center width=30%>$pp2[14]</td>";echo "<td  align=center width=30%>$pp2[15]</td>";echo "<td  align=center width=30%>$pp2[p]</td>";}
else{
echo "<td  align=center width=30%>$pp2[nom]</td>";
echo "<td  align=center width=30%>$mmmm</td>";echo "<td  align=center width=30%>$mmm2 </td>"; echo "<td  align=center width=30%>$pp2[18]</td>";echo "<td  align=center width=30%>$pp2[19]</td>";echo "<td  align=center width=30%>$pp2[20]</td>";echo "<td  align=center width=30%>$pp2[21]</td>";echo "<td  align=center width=30%>$pp2[22]</td>";echo "<td  align=center width=30%>$pp2[23]</td>";echo "<td  align=center width=30%>$pp2[24]</td>";echo "<td  align=center width=30%>$pp2[25]</td>";echo "<td  align=center width=30%>$pp2[26]</td>";echo "<td  align=center width=30%>$pp2[27]</td>";echo "<td  align=center width=30%>$pp2[28]</td>";echo "<td  align=center width=30%>$pp2[29]</td>";echo "<td  align=center width=30%>$pp2[30]</td>";echo "<td  align=center width=30%>$pp2[31]</td>";echo "<td  align=center width=30%>$pp2[1]</td>";echo "<td  align=center width=30%>$pp2[2]</td>";echo "<td  align=center width=30%>$pp2[3]</td>";echo "<td  align=center width=30%>$pp2[4]</td>";echo "<td  align=center width=30%>$pp2[5]</td>";echo "<td  align=center width=30%>$pp2[6]</td>";echo "<td  align=center width=30%>$pp2[7]</td>";echo "<td  align=center width=30%>$pp2[8]</td>";echo "<td  align=center width=30%>$pp2[9]</td>";echo "<td  align=center width=30%>$pp2[10]</td>";echo "<td  align=center width=30%>$pp2[11]</td>";echo "<td  align=center width=30%>$pp2[12]</td>";echo "<td  align=center width=30%>$pp2[13]</td>";echo "<td  align=center width=30%>$pp2[14]</td>";echo "<td  align=center width=30%>$pp2[15]</td>";echo "<td  align=center width=30%>$pp2[p]</td>";}

	echo"</tr>";
		}
		echo"</tbody>";
		echo"</table>";
}
elseif($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){ echo"<div class=''><p><em><h2>Le mois d'$s est invalide!</h2></em></p></div>";}
elseif($s!=''){ echo"<div class=''><p><em><h2>Le mois de $s est invalide!</h2></em></p></div>";}

}
//http://www.informatix.fr/tutoriels/base-de-donnees/mysql-une-table-pivot-dynamique-178
?>
<script src="jquery.min.js"></script>
<script>
var n=document.getElementById('nn');
var j=document.getElementById('jj');
var ss=document.getElementById('ss');
myform.addEventListener("submit",f);
//function init(){
//document.fm.no.focus();
//}
//function f(e){
//if(n.value!=''){
//e.preventDefault();
//document.fm.jo.focus();
//e.style.color='red';
//}}
//if(j.value==''){
//e.preventDefault();
//document.fm.jo.focus();
//e.style.color='red';
//}}

function deu(event){
if(event.keyCode==13)
document.fm.jo.focus();
}
function un(event){
if(event.keyCode==32)
document.fm.no.focus();
}
function tro(event){
if(event.keyCode==13)
document.fm.jo.focus();
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
