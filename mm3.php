<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modification</title>
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
</head>
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
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>

<br>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$result=mysql_query("SELECT * FROM nom  WHERE  id='".$_GET["id"]."'");
		if($result){
$pp2=mysql_fetch_array($result);

	echo"<form action='moden3.php' method='post' name='fm'>"; 	
echo"<center><h2>Modification</h2></center>";
echo"<br><br><br>";
echo "<table  >";
echo"<tr>";
echo "<th>Nom et prenom</th>";
echo "<th>Code</th>";
echo"</tr>";		
	echo"<tr>";
echo "<td><input type='text' name='nom' onkeydown='un(event)' class='sel' autocomplete='off' value='".$pp2['nom']."' autofocus></td>";
echo "<td><input type='text' name='code' onkeydown='deux(event)' class='sel' autocomplete='off'  value='".$pp2['code']."'></td>";
	echo"</tr>";
		
		echo"</table>";
		echo "<input type='hidden' name='idOrigine'  value='".$_GET["id"]."'>  <br>";
echo "<input type='submit' style='float: right' name='modifier' value='modifier'>";
}
echo "</form>";
?>
<center>
<form name="my" method="post" action=""> 
<input type="submit" name="sup" value="supprimer" />
<input type="text" onkeydown="troi(event)" class="sel" placeholder="Code" autocomplete="off" name="su" size="5" >

</center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
if(isset($_POST['su'])){
$supr=$_POST['su'];
if($supr==$pp2['code']){
$idd=$pp2['id'];
mysql_query("delete from nom where id='$idd' "); 

header ("location:moden3.php");
}}

echo "</form>";
?>
<script>
function un(event){
if(event.keyCode==39){
document.fm.code.focus();}
if(event.keyCode==40){
document.my.su.focus();}}
function deux(event){
if(event.keyCode==37){
document.fm.nom.focus();}
if(event.keyCode==40){
document.my.su.focus();}}
function troi(event){
if(event.keyCode==38){
document.fm.code.focus();}}
</script>
<body>
</body>
</html>

