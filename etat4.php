<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
<title>Etat des elements variables du mois</title>
</head>
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
 <script>
function generateReportA(){
   document.forms['fm'].action = 'pdf4.php';
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
left:30%;
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
<li><a href='etat3.php'>Heures supplementaire</a></li></ul></li>
<li><a href='#'>Modification  &nabla;</a>
<ul><li><a href='moden.php'>Modifier par nom</a></li>
<li><a href='moden2.php'>Modifier par jour</a></li>
</ul></ul></li>
</div>

<br><br>
<center>
<div class="form">
<form  action="" method="post" name="fm" >

Mois: <select name="s" class="sel"   onchange="this.form.bb.focus()" autofocus>

<?php
 if(isset($_POST['s']) and !empty($_POST['s'])) echo '<option value="'.$_POST['s'].'">'.$_POST['s'].'</option>';
 if(empty($_POST['s']) or $_POST['s']!='') echo '<option value=""></option>';
        if(empty($_POST['s']) or $_POST['s']!='Janvier 2020') echo '<option value="Janvier 2020">Janvier 2020</option>';
        if(empty($_POST['s']) or $_POST['s']!='février 2020') echo '<option value="février 2020">février 2020</option>';
		if(empty($_POST['s']) or $_POST['s']!='mars 2020') echo '<option value="mars 2020">mars 2020</option>';
		if(empty($_POST['s']) or $_POST['s']!='avril 2020') echo '<option value="avril 2020">avril 2020</option>';if(empty($_POST['s']) or $_POST['s']!='mai 2020') echo '<option value="mai 2020">mai 2020</option>';if(empty($_POST['s']) or $_POST['s']!='juin 2020') echo '<option value="juin 2020">juin 2020</option>';if(empty($_POST['s']) or $_POST['s']!='juillet 2020') echo '<option value="juillet 2020">juillet 2020</option>';if(empty($_POST['s']) or $_POST['s']!='aout 2020') echo '<option value="aout 2020">aout 2020</option>';if(empty($_POST['s']) or $_POST['s']!='septembre 2020') echo '<option value="septembre 2020">septembre 2020</option>';if(empty($_POST['s']) or $_POST['s']!='octobre 2020') echo '<option value="octobre 2020">octobre 2020</option>';if(empty($_POST['s']) or $_POST['s']!='novembre 2020') echo '<option value="novembre 2020">novembre 2020</option>';if(empty($_POST['s']) or $_POST['s']!='décembre 2020') echo '<option value="décembre 2020">décembre 2020</option>';
        
        
        ?>
		</select>
<input type="submit" name="bb" value="Valider">

</div>
</div>
<?php echo'<div style="float: right">
<input type="button"  class="taht" name="imprimer" onclick="generateReportA();" value="Imprimer" />
</div>'; ?>

<div class="p"><p><em><h2>Etat des elements variables du mois</h2></em></p></div>
<body>
<?php

$link=mysql_connect('localhost','root','');
mysql_select_db('exploi',$link);
if (isset($_POST["modifier"])){
$requete="UPDATE point SET  ab='".$_POST["ab"]."',pri='".$_POST["pri"]."',itp='".$_POST["itp"]."',deb='".$_POST["deb"]."',rap='".$_POST["rap"]."',ob='".$_POST["ob"]."'  WHERE id='".$_POST["idOrigine"]."'";
$result=mysql_query($requete);
}

if(isset($_POST['s'])){
$s=$_POST['s'];
$ss=mysql_query("select * from point where mois='$s'");
$ss1=mysql_fetch_array($ss);
$s1=$ss1['mois'];

if($s1!='' and $s!='' ){
?>
<style>.p{display:none;}</style>
<?php
echo"<center><h4>OFFICE ALGERIEN INTERPROFESSIONNEL DES CEREALES (O.A.I.C)</h4></center>";
echo"<center><div class='sel'>ETAT DES ELEMENTS VARIABLES DU MOI</div></center>";
if($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){
		echo"<center><h4>Mois d'$s</h4></center>";}
		else{echo"<center><h4>Mois de $s</h4></center>";}
		$i=1;
$ppp=mysql_query("select *,sum(case when pre='P' then $i else 0 end) as p,sum(case when etat='50%' then heur else 0 end) as c,sum(case when etat='65%' then heur else 0 end) as s,sum(case when etat='100%' then heur else 0 end) as ce from point where mois='$s'   group by nom");	
echo"<div style=float:right>";
echo'Search <input type="text" placeholder="Search..." class="chercher">';
echo"</div>";
echo"<br><br>";	
echo "<table>";
echo"<thead>";
echo"<tr>";
echo "<th  align=center width=30%>Nom et prenom </th>";
echo "<th  align=center>Absence</th>";
echo "<th  align=center>Panier</th>";
echo "<th  align=center>PRI</th>";
echo "<th  align=center>HS 50%</th>";
echo "<th  align=center>HS 65%</th>";
echo "<th  align=center>HS 100%</th>";
echo "<th  align=center>ITP</th>";
echo "<th  align=center>Deplacement</th>";
echo "<th  align=center>Rappel</th>";
echo "<th  align=center>Observation</th>";
echo "<th  align=center>Ajouter</th>";
echo"</tr></thead>";

		while($pp2=mysql_fetch_array($ppp)){
	echo"<tbody id='tab'>";	
	echo"<tr>";
echo "<td  align=center width=30%>$pp2[nom] </td>";
echo "<td  align=center width=30%>$pp2[ab]</td>";
echo "<td  align=center width=30%>$pp2[p]</td>";
echo "<td  align=center width=30%>$pp2[pri]</td>";
echo "<td  align=center width=30%>$pp2[c]</td>";
echo "<td  align=center width=30%>$pp2[s]</td>";
echo "<td  align=center width=30%>$pp2[ce]</td>";
echo "<td  align=center width=30%>$pp2[itp]</td>";
echo "<td  align=center width=30%>$pp2[deb]</td>";
echo "<td  align=center width=30%>$pp2[rap]</td>";
echo "<td  align=center width=30%>$pp2[ob]</td>";
echo "<td  align=center width=30%><a href='ajout.php?id=".$pp2['id']."''>Ajouter</a></td>";
	echo"</tr>";
}
        echo"</tbody>";
		echo"</table>";
}
elseif($s=='avril 2020' or $s=='aout 2020' or $s=='octobre 2020'){ echo"<div class=''><p><em><h2>Le mois d'$s est invalide!</h2></em></p></div>";}
elseif($s!='' ){ echo"<div class=''><p><em><h2>Le mois de $s est invalide!</h2></em></p></div>";}
}
//http://www.informatix.fr/tutoriels/base-de-donnees/mysql-une-table-pivot-dynamique-178
?>
</form>
<script src="jquery.min.js"></script>
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