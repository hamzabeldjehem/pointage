<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
<title>Modification</title>
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
}
td,th{
padding:5px;
}

</style>

<br><br>
<center>

<br>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$result=mysql_query("SELECT * FROM point   WHERE jour='18' and id='".$_GET["id"]."'");
		if($result){
		$pp2=mysql_fetch_array($result);
	echo"<form action='etat.php' method='post' name='fm'>"; 	
echo"<center><h4>Modification</h4></center>";
echo "<table  >";
echo"<tr>";
echo "<th>Nom et prenom</th>";
echo "<th>18</th>";

echo"</tr>";		
	echo"<tr>";
	echo "<td>$pp2[nom]</td>";
echo "<td><input type='text' size='25'  name='pre' autocomplete='off' onkeyup='this.value=this.value.toUpperCase()' autofocus value='".$pp2['pre']."'> </td>";

echo "<input type='text' name='s' style='display:none;'  value='".$pp2['mois']."'>";
	echo"</tr>";
		
		echo"</table>";
		echo "<input type='hidden' name='idOrigine' value='".$_GET["id"]."'>  <br>";
echo "<input type='submit' style='float: right' name='modifier' value='modifier'>";
echo "</form>";
}


?>
</center>
</html>