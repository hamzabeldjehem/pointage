<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modification</title>
</head>
<style>
table ,td,th{
border:1px solid #000;
border-collapse:collapse;
font-size:18px;
}
td,th{
padding:5px;
}
.sel{
font-size:15px;}
</style>
<br><br>
<center>

<br>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$result3=mysql_query("SELECT * FROM point  WHERE  id='".$_GET["id"]."'");
		if($result3){
$pp2=mysql_fetch_array($result3);

	echo"<form action='etat2.php' method='GET' name='fm'>"; 	
echo"<center><h4>Modification</h4></center>";
echo "<table  >";
echo"<tr>";
echo "<th>Nom et prenom</th>";
//echo "<th>Shift</th>";
echo "<th>Etat</th>";
echo "<th>Heure</th>";

echo"</tr>";		
	echo"<tr>";
	echo "<td align=center>$pp2[nom]</td>";
echo "<td><select  name='etat'  class='sel'><option value='".$pp2['etat']."'>".$pp2['etat']."</option><option value='50%'>50%</option><option value='65%'>65%</option><option value='100%'>100%</option></select></td>";
echo "<td><input type='text' name='heur'  class='sel'  value='".$pp2['heur']."'></td>";

echo "<input type='text' name='s' style='display:none;'  value='".$pp2['mois']."'>";
	echo"</tr>";
		
		echo"</table>";
		echo "<input type='hidden' name='idOrigin'  value='".$_GET["id"]."'>  <br>";
echo "<input type='submit' style='float: right' name='modifier' value='modifier'>";
echo "</form>";
}
?>
<body>
</body>
</html>
