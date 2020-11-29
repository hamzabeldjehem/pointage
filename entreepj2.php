<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Pointage</title>
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
<style>
body{
background-color:#999999;


}
.form{
background:#66FFFF;
border-radius:50%;
width:50%;
height:378px;
font-size:20px;
}
.f{
font-size:20px;}
.sel{
font-size:17px;
}
.sel:focus{
background:#FFFF99;
}
#sp{
color:#FF0000;
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
<ul><li><a href='form.php'>Accueil</a></li>
<li><a href='entree2.php'>Enregistrement par nom</a></li>
<li><a href='nom.php'>Ajouter</a></li></ul></li>
<li><a href='#'>Feuilles de pointage  &nabla;</a>
<ul><li><a href='etat.php'>Etat de pointage par mois</a></li>
<li><a href='etat2.php'>Situation pointage</a></li>
<li><a href='etat3.php'>Heures supplementaire</a></li>
<li><a href='etat4.php'>Etat des elements</a></li></ul></li>
<li><a href='moden2.php'>Modification</a></ul></li>
</ul></ul></li>
</div>
<body>
<body onLoad="init();">
<script src="jquery.min.js"></script>
<h3>Enregistrement par jour</h3>
<br>
<h1>
<center>
<div class="form">
<form method="post" name="fm" id="myform">
<br>
Mois: <select name="s" class="sel" id="s" onchange="this.form.jour.focus()">
<option></option><option >Janvier 2020</option><option >février 2020</option><option >mars 2020</option><option >avril 2020</option><option >mai 2020</option><option >juin 2020</option><option >juillet 2020</option><option >aout 2020</option><option >septembre 2020</option><option >octobre 2020</option><option >novembre 2020</option><option >décembre 2020</option>
</select><br><br><span id="m"></span>
Jour: <input type="text" name="jour" class="sel" onkeydown="deu(event)" autocomplete="off" size="5" id="jour"> <span id="j"></span><br><br>

Nom et prenom: <input type="text" name="nom" class="sel" list="a" size="20" onkeydown="un(event)" id="nom" autocomplete="off"><?php mysql_connect("localhost","root","");mysql_select_db("exploi"); $listtt=mysql_query("SELECT * FROM nom");echo'<datalist id="a"  >';
while($mttt=mysql_fetch_array($listtt)){
echo'<option  value="'.$mttt['nom'].'">'.$mttt['code'].'</option>';}
echo'</datalist>';echo" Code:<input type='text' readonly class='sel' value='???' id='sp'  name='c' size='3'>"; echo" <span id='sss'></span>"; ?><br><br>
Présence: <select name="pre" class="sel" id="pre"  onkeydown="tr(event)" onchange="this.form.bb.focus()" >
<option></option><option >P</option><option >MI</option><option >F</option><option >V</option><option >CR</option><option >AI</option><option >CD</option><option >MAP</option><option >CE</option>
</select><br><br>
<input type="submit" name="bb" id="re" value="Valider">
</form>
</center>
<br>
<center><span id='abc'></span></center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
//mysql_query("delete from point");
if(isset($_POST['bb'])){
$moi=$_POST['s'];
$jou=$_POST['jour'];
$nom=$_POST['nom'];
$pre=$_POST['pre'];
$null='';
$k2=mysql_query("select * from point where jour='$jou' and nom='$nom' and mois='$moi'  ");
$rows2=mysql_num_rows($k2);

$mois =mysql_query("SELECT* FROM mois");
$mm =mysql_fetch_array($mois);
$m=$mm['mois'];
$fsearch =mysql_query("SELECT* FROM point where nom='$nom' and mois='$m' order by id DESC  ");
       
            $result =mysql_fetch_array($fsearch);
			
			
			$rr=$result['jour'];
			$rr2=$result['nom'];
			
			$r=++$rr;
			if($jou!=$rr and $jou>$rr and $rr>1){
			echo"Le jour suivant pour $nom  est : $rr";}
			
			if($rr2==''){
			echo"$nom doit prendre le jour 16";}
			
if($rows2==0 )
{

if($jou==$rr or $jou=='16' or $jou=='1'){

mysql_query('insert into point values("'.$null.'","'.$moi.'","'.$jou.'","'.$nom.'","'.$pre.'","","","","","","","","","","")');


if($moi=='avril 2020' or $moi=='aout 2020' or $moi=='octobre 2020' ){
echo"<center><div class='f'><font color='white'>Le mois d' <font style='color:blue'>$moi</font> jour <font style='color:blue'>$jou</font> le nom <font style='color:blue'>$nom</font> est <font style='color:blue'>$pre</font></div></center>";}
else{
echo"<center><div class='f'><font color='white'>Le mois de <font style='color:blue'>$moi</font> jour <font style='color:blue'>$jou</font> le nom <font style='color:blue'>$nom</font> est <font style='color:blue'>$pre</font></div></center>";}}}
if( $jour=$rows2 ){ echo  "<script language=\"javascript\">"; echo"alert ('Ce nom est existe déjà dans cette date!')"; echo "</script>";
          }

}
?>
</h1>
<script  src="en.js"></script>
<script  src="en2.js"></script>
<script>
var s=document.getElementById('s');
var jour=document.getElementById('jour');
var nom=document.getElementById('nom');
var pre=document.getElementById('pre');
var etat=document.getElementById('etat');
var heur=document.getElementById('heur');
var sp=document.getElementById('sp');
var sss=document.getElementById('sss');
var abc=document.getElementById('abc');
var nb=document.getElementById('nb');
myform.addEventListener("submit",f);
function init(){
document.fm.nom.focus();
}
function f(e){
if(s.value==''){
e.preventDefault();
document.fm.s.focus();
e.style.color='red';
}
if(sp.value==''){
e.preventDefault();
document.fm.nom.focus();
e.style.color='red';
}
if(jour.value==''){
e.preventDefault();
document.fm.jour.focus();
e.style.color='red';}
if(jour.value<=0){
e.preventDefault();
document.fm.jour.focus();
e.style.color='red';}
if(jour.value>31){
e.preventDefault();
document.fm.jour.focus();
e.style.color='red';}

if(s.value=='avril 2020' && jour.value=='31' || s.value=='juin 2020'  && jour.value=='31' ||  s.value=='septembre 2020' && jour.value=='31' || s.value=='novembre 2020' && jour.value=='31'){
e.preventDefault();
abc.textContent = 'Ce mois contient 30 jours maximum!';
document.fm.jour.focus();
abc.style.color='red';
e.style.color='red';}
else abc.textContent = '';

if(nom.value=='' ){
e.preventDefault();
document.fm.nom.focus();
e.style.color='red';}
if(pre.value==''){
e.preventDefault();
document.fm.pre.focus();
e.style.color='red';}
if(nb.value==''){
e.preventDefault();
document.fm.nb.focus();
e.style.color='red';
}
}

</script>
<script>
function un(event) {
  if (event.keyCode == 32){
  location.href = 'entreepj.php';
  }}
function deu(event) {
  if (event.keyCode == 32){
  location.href = 'entreepj.php';
  }}
  function tr(event) {
  if (event.keyCode == 32){
  location.href = 'entreepj.php';
  }}
 function nombre(event) {
  if (event.keyCode == 38){
  nb.value='0';
  document.fm.pre.focus();
  }
  if (event.keyCode == 32){
  location.href = 'entreepj.php';}
  }

</script>
<script>
$(document).ready(function(){
        var recherche = $("#s").val();
        var data = recherche;
            $.ajax({
                type : "POST",
                url : "mispj.php",
                data : data,
                success : function(s){
					$("#s").val(s);				
				}
    });
$("#re").click( function() {					
var m=$("#s").val();
var jo=$("#jour").val();
var re=$("#re").val();
 $.post('mis.php',{m:m,jo:jo,re:re});
});
});			
</script>
<script>
$(document).ready(function(){
//$("#nom").keyup(function(){
//$("#re").click( function() {
//$("#nom").focusout(function(){
var cmm=$("#jour").val();
var data=cmm;
$.ajax({
type:"POST",
url:"mispj2.php",
data:data,
success:function(s){
	$("#jour").val(s);

}
	   });
});

</script>

</body>
</html>


