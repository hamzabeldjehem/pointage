<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
<title>Heures supplementaire</title>
</head>
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
 <script>
function generateReportA(){
   document.forms['fm'].action = 'pdf3.php';
   document.forms['fm'].submit('imprimer');
   }
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
left:37%;
font-size:25px;
animation: p 1s infinite;
}
@keyframes p{
    0%{opacity: 1;}
    20%{opacity: 0;}
    100%{opacity: 1;}
}
</style>
<style>
.taht{
position:relative;
top:90px;
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
<li><a href='etat2.php'>Situation pointage</a></li>
<li><a href='etat4.php'>Etat des elements</a></li></ul></li>
<li><a href='#'>Modification  &nabla;</a>
<ul><li><a href='moden.php'>Modifier par nom</a></li>
<li><a href='moden2.php'>Modifier par jour</a></li>
</ul></ul></li>
</div>
<script src="jquery.min.js"></script>
<br><br>
<body onLoad="init();">

<center>
<div class="form">
<form method="post" name="fm" >
Jour: <input type="text" size="5" name="jour" onkeydown="un(event)" id="jour"  class="sel"  value="<?php if(empty($_POST['jour'])){ } else { echo htmlspecialchars($_POST['jour'],ENT_QUOTES);}?>"/>
Mois et année: <select name="s" class="sel" id="s"  onchange="this.form.bb.focus()">
<?php
 if(isset($_POST['s']) and !empty($_POST['s'])) echo '<option value="'.$_POST['s'].'">'.$_POST['s'].'</option>';
 if(empty($_POST['s']) or $_POST['s']!='') echo '<option value=""></option>';
        if(empty($_POST['s']) or $_POST['s']!='Janvier 2020') echo '<option value="Janvier 2020">Janvier 2020</option>';
        if(empty($_POST['s']) or $_POST['s']!='février 2020') echo '<option value="février 2020">février 2020</option>';
		if(empty($_POST['s']) or $_POST['s']!='mars 2020') echo '<option value="mars 2020">mars 2020</option>';
		if(empty($_POST['s']) or $_POST['s']!='avril 2020') echo '<option value="avril 2020">avril 2020</option>';if(empty($_POST['s']) or $_POST['s']!='mai 2020') echo '<option value="mai 2020">mai 2020</option>';if(empty($_POST['s']) or $_POST['s']!='juin 2020') echo '<option value="juin 2020">juin 2020</option>';if(empty($_POST['s']) or $_POST['s']!='juillet 2020') echo '<option value="juillet 2020">juillet 2020</option>';if(empty($_POST['s']) or $_POST['s']!='aout 2020') echo '<option value="aout 2020">aout 2020</option>';if(empty($_POST['s']) or $_POST['s']!='septembre 2020') echo '<option value="septembre 2020">septembre 2020</option>';if(empty($_POST['s']) or $_POST['s']!='octobre 2020') echo '<option value="octobre 2020">octobre 2020</option>';if(empty($_POST['s']) or $_POST['s']!='novembre 2020') echo '<option value="novembre 2020">novembre 2020</option>';if(empty($_POST['s']) or $_POST['s']!='décembre 2020') echo '<option value="décembre 2020">décembre 2020</option>';
        
        
        ?>
		</select>
		Shift: <select name="shift" class="sel"  id="shift" onchange="this.form.jour.focus()">
<?php
 if(isset($_POST['shift']) and !empty($_POST['shift'])) echo '<option value="'.$_POST['shift'].'">'.$_POST['shift'].'</option>';
 if(empty($_POST['shift']) or $_POST['shift']!='') echo '<option value=""></option>';
        if(empty($_POST['shift']) or $_POST['shift']!='Matin') echo '<option value="Matin">Matin</option>';
        if(empty($_POST['shift']) or $_POST['shift']!='Soir') echo '<option value="Soir">Soir</option>';
		if(empty($_POST['shift']) or $_POST['shift']!='Nuit') echo '<option value="Nuit">Nuit</option>';
        ?>
		</select>
<input type="submit" name="bb" id="b" value="Valider">
</form>
</div>
</div>

<?php echo'<div style="float: right">
<input type="button"  class="taht" name="imprimer" onclick="generateReportA();" value="Imprimer" />
</div>'; ?>

<div class="p"><p><em><h2>Heures supplementaire</h2></em></p></div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
if(isset($_POST['s'],$_POST['jour'],$_POST['shift'])){
$jour=$_POST['jour'];
$s=$_POST['s'];
$shift=$_POST['shift'];
$ss=mysql_query("select * from point where mois='$s' and jour='$jour' and shift='$shift'");
$ss1=mysql_fetch_array($ss);
$s1=$ss1['mois'];
if($s1!='' and $jour!='' and $shift!=''){
?>
<style>.p{display:none;}</style>
<?php
echo"<center><h4>OFFICE ALGERIEN INTERPROFESSIONNEL DES CEREALES (O.A.I.C)</h4></center>";
echo"<center><div class='sel'>UNION DES COOPERATIVES AGRICOLES DE SKIKDA</div></center>";
echo"<center><div class='sel'>DEMANDE DE TRAVAUX EN HEURES SUPPLEMENTAIRE</div></center>";
echo"<center><h4>Le $jour $s :</h4></center>";
echo"<div style=float:right>";
echo'Search <input type="text" placeholder="Search..." class="chercher">';
echo"</div>";
echo"<br><br>";
echo "<table>";
echo"<thead>";
echo"<tr>";
echo "<th  align=center width=30%>Nom et prenom </th>";
echo "<th  align=center>Fonctions</th>";
echo "<th  align=center>NBR heures</th>";
echo "<th  align=center>50%</th>";
echo "<th  align=center>65%</th>";
echo "<th  align=center>100%</th>";
echo "<th  align=center>Panier</th>";
echo "<th  align=center>Observation</th>";
echo"</tr></thead>";
$i=1;
$ppp=mysql_query("
SELECT  
        t.nom,t.pre,t.heur,t.jour,t.shift,t.mois,
        GROUP_CONCAT(IF(t.etat = '50%', t.heur, 0)) AS '16',GROUP_CONCAT(IF(t.etat = '65%', t.heur, 0)) AS '17',GROUP_CONCAT(IF(t.etat = '100%', t.heur, 0)) AS '18'
		
		 FROM point t where mois='$s' and jour='$jour' and shift='$shift' group by nom");
		
		while ($pp2=mysql_fetch_array($ppp)){
	echo"<tbody id='tab'>";	
	echo"<tr>";
echo "<td  align=center width=30%>$pp2[nom] </td>";
echo "<td  align=center width=30%></td>";
echo "<td  align=center width=30%>$pp2[heur]</td>";
echo "<td  align=center width=30%>$pp2[16] </td>";echo "<td  align=center width=30%>$pp2[17]</td>"; echo "<td  align=center width=30%>$pp2[18]</td>";
echo "<td  align=center width=30%></td>";
echo "<td  align=center width=30%></td>";
	echo"</tr>";
		}
		echo"</tbody>";
		echo"</table>";
}
elseif($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){ echo"<div class=''><p><em><h2>Le jour ou le mois d'$s est invalide!</h2></em></p></div>";}
elseif($s!='' and $jour!='' and $shift!=''){ echo"<div class=''><p><em><h2>Le jour ou le mois de $s est invalide!</h2></em></p></div>";}
}
//http://www.informatix.fr/tutoriels/base-de-donnees/mysql-une-table-pivot-dynamique-178
?>
<script>
var jour=document.getElementById('jour');
var s=document.getElementById('s');
var shif=document.getElementById('shift');
fm.addEventListener("submit",f);
function init(){
document.fm.shift.focus();
}
function f(e){
if(jour.value==''){
e.preventDefault();
document.fm.jour.focus();
e.style.color='red';
}
if(s.value==''){
e.preventDefault();
document.fm.s.focus();
e.style.color='red';
}
if(shif.value==''){
e.preventDefault();
document.fm.shift.focus();
e.style.color='red';}
//else document.fm.bb.focus();
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