<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modification</title>
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
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
font-size:20px;
}
td,th{
padding:5px;
}
.sel{
font-size:17px;}
</style>
<br><br>
<center>

<br>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$result=mysql_query("SELECT * FROM point  WHERE  id='".$_GET["id"]."'");

		if($result){
$pp2=mysql_fetch_array($result);
	echo"<form action='moden2.php' method='POST'>"; 	
echo"<center><h2>Modification par jour</h2></center>";
echo"<br><br><br>";
echo "<table  >";
echo"<tr>";
echo "<th>Nom et prenom</th>";
echo "<th>Mois</th>";
echo "<th>Jour</th>";
echo "<th>Présence</th>";
echo "<th>Etat</th>";
echo "<th>Heure</th>";
echo "<th>Shift</th>";
echo"</tr>";		
	echo"<tr>";
	echo "<td>$pp2[nom]</td>";
echo "<td><input type='text' readonly class='sel'  value='".$pp2['mois']."'></td>";
echo "<td><input type='text' readonly class='sel' value='".$pp2['jour']."'></td>";
if($pp2['pre']!=''){
echo "<td><input type='text' name='pre' onkeyup='this.value=this.value.toUpperCase()' autocomplete='off' class='sel' value='".$pp2['pre']."'></td>";}
else{
echo "<td><input type='text' name='pre' readonly class='sel' value='".$pp2['pre']."'></td>";}
echo "<td><select  name='etat' class='sel'><option value='".$pp2['etat']."'>".$pp2['etat']."</option><option value='50%'>50%</option><option value='65%'>65%</option><option value='100%'>100%</option><option value='0'>0</option></select></td>";
echo "<td><input type='text' name='heur'  class='sel' value='".$pp2['heur']."'></td>";

echo "<td><select  name='shift' class='sel'><option value='".$pp2['shift']."'>".$pp2['shift']."</option><option value='Matin'>Matin</option><option value='Soir'>Soir</option><option value='Nuit'>Nuit</option><option value='0'>0</option></select></td>";

echo "<input type='text' name='s' style='display:none;'  value='".$pp2['mois']."'>";
echo "<input type='text' name='jour' style='display:none;'  value='".$pp2['jour']."'>";
	echo"</tr>";
		
		echo"</table>";
		echo "<input type='hidden' name='idOrigine'  value='".$_GET["id"]."'>  <br>";
echo "<input type='submit' style='float: right' name='modifier' value='modifier'>";
echo "</form>";
}
?>

<body>
</body>
</html>