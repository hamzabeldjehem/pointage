<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ajout</title>
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
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
font-size:16px;}
</style>
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
<br><br><br>
<center><p><em><h2>Ajouter les champs manquants</h2></em></p></center>
<br><br><br><br>
<?php
$link=mysql_connect('localhost','root','');
mysql_select_db('exploi',$link);
$result=mysql_query("select* from point WHERE id='".$_GET["id"]."'");
if($result){
$rec=mysql_fetch_array($result);
echo"<form action='etat4.php' method='post' name='fm'>"; 
echo"<h3>";
echo "<table border='1' width=50% align=center>";
echo "<tr>";
echo "<th width=10% align=center ><center>Nom et prenom</center> </th>";
echo "<th width=10% align=center ><center>Absence</center> </th>";
echo "<th width=10% align=center ><center>PRI</center></th>";
echo "<th width=10% align=center ><center>ITP</center></th>";
echo "<th width=10% align=center ><center>Deplacement</center></th>";
echo "<th width=10% align=center ><center>Rappel</center></th>";
echo "<th width=10% align=center ><center>Observation</center></th>";
echo"</h3>";
echo "</tr>";

echo "<tr>";
echo "<td><input type='text' readonly  class='sel'  size='10'  value='".$rec['nom']."'></td>";
echo "<td><input type='text' name='ab'  onkeydown='un(event)'  class='sel' autocomplete='off'  size='10'   value='".$rec['ab']."' autofocus></td>";
echo "<td><input type='text' name='pri' onkeydown='deux(event)'  class='sel' autocomplete='off' size='10'  value='".$rec['pri']."'></td>";
echo "<td><input type='text' name='itp' onkeydown='trois(event)'  class='sel' autocomplete='off' size='10'  value='".$rec['itp']."'></td>";
echo "<td><input type='text' name='deb' onkeydown='quatre(event)'  class='sel' autocomplete='off' size='10' onkeyup='this.value=this.value.toUpperCase()'  value='".$rec['deb']."'></td>";
echo "<td><input type='text' name='rap' onkeydown='cinq(event)'  class='sel' autocomplete='off' size='10'  value='".$rec['rap']."'></td>";
echo "<td><input type='text' name='ob' onkeydown='six(event)'  class='sel' autocomplete='off' size='15'  value='".$rec['ob']."'></td>";
echo "<input type='text' name='s' style='display:none;' size='15' value='".$rec['mois']."'>";

echo "</h3>";
echo "</tr>";
echo "</table>";
echo "</br>";
echo "<input type='hidden' name='idOrigine' value='".$_GET["id"]."'>  <br>";
echo "<input type='submit' style='float: right' name='modifier' value='Ajouter'>";
echo "</form>";
}

?>
<script>
function un(event){
if(event.keyCode==39){
document.fm.pri.focus();}}
function deux(event){
if(event.keyCode==37){
document.fm.ab.focus();}
if(event.keyCode==39){
document.fm.itp.focus();}}

function trois(event){
if(event.keyCode==39){
document.fm.deb.focus();}
if(event.keyCode==37){
document.fm.pri.focus();}}
function quatre(event){
if(event.keyCode==37){
document.fm.itp.focus();}
if(event.keyCode==39){
document.fm.rap.focus();}}

function cinq(event){
if(event.keyCode==39){
document.fm.ob.focus();}
if(event.keyCode==37){
document.fm.deb.focus();}}
function six(event){
if(event.keyCode==37){
document.fm.rap.focus();}}


</script>
</html>
