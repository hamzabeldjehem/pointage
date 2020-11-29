<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ajout</title>
</head>
<link rel="icon" href="im/Cisco client 3D v2 .ico">
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
<style>
.form{
position:relative;
background:#66FFFF;
width:30%;
height:210px;
font-size:20px;
top:33px;
}
.form2{
position:relative;
background:#CCCCCC;
width:30%;
height:40px;
font-size:170%;
top:33px;
}
.sel{
font-size:17px;
}
.sel2{
font-size:20px;
}
</style>
<style>
#menu{
display: flex;
	justify-content: center;
	align-items: center;
}
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
<div id="menu" >
<ul>
<li><a href='#'>Taches   &nabla;</a>
<ul><li><a href='entree.php'>Enregistrement par nom</a></li>
<li><a href='entreepj.php'>Enregistrement par jour</a></li>
<li><a href='form.php'>Accueil</a></li></ul></li>
<li><a href='#'>Feuilles de pointage  &nabla;</a>
<ul><li><a href='etat.php'>Etat de pointage par mois</a></li>
<li><a href='etat2.php'>Situation pointage</a></li></ul></li>
<li><a href='moden3.php'>Modification</a></ul></li>
</ul></ul></li>
</div>
<br><br><br><br>
<center>
<div class="form2"><em>Ajout des personnes:</em></div>
<div class="form">
<body onLoad="init();">
<form method="post" name="fm" id="myform">
<br><br>

Nom et prenom: <input type="text" name="nom" class="sel" size="20" onkeydown="no(event)" id="nom" autocomplete="off"> <br><br>

Code: <input type="text" name="code" class="sel"  size="5" id="code" onkeydown="cod(event)" autocomplete="off"><br><br>

<input type="submit" name="bb" value="Ajouter">
</form>
</center>
<?php 
if(isset($_POST['bb'])){
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$nom=$_POST['nom'];
$code=$_POST['code'];
$null='';

$k=mysql_query("select * from nom where nom='$nom'");
$rows=mysql_num_rows($k);
if($rows==0 )
{

mysql_query("insert into nom values('".$null."','".$code."','".$nom."')" );
echo"<br><br><br>";
echo"<center><div class='sel2'>La personne <font style='color:blue'>$nom</font> possédant le code <font style='color:blue'>$code</font> est ajouté avec succès</div></center>";}
if ( $nom=$rows){ echo  "<script language=\"javascript\">"; echo"alert ('Ce nom est existe déjà!')"; echo "</script>";}
}
?>
<script>
var nom=document.getElementById("nom");
var code=document.getElementById("code");
myform.addEventListener("submit",f);
function init(){
document.fm.nom.focus();
}
function f(e){
if(nom.value==''){
e.preventDefault();
document.fm.nom.focus();
}
if(code.value==''){
e.preventDefault();
document.fm.code.focus();
}}
function no(event) {
  if (event.keyCode == 40){
  event.preventDefault();
  document.fm.code.focus();
  }}
  function cod(event) {
  if (event.keyCode == 38){
  document.fm.nom.focus();
  }}
</script>

<body>
</body>
</html>
