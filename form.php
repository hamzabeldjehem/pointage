<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Accueil</title>
<link rel="icon" href="im/Cisco client 3D v2 .ico" >
<script type="text/javascript">
    //<!--
       document.oncontextmenu = new Function("return false");
    //-->
    </script>
<style>
body{
background-color:#333;
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
<li><a href='nom.php'>Ajouter</a></li></ul></li>
<li><a href='#'>Feuilles de pointage  &nabla;</a>
<ul><li><a href='etat.php'>Etat de pointage par mois</a></li>
<li><a href='etat2.php'>Situation pointage </a></li>
<li><a href='etat3.php'>Heures supplementaire</a></li>
<li><a href='etat4.php'>Etat des elements</a></li></ul></li>
<li><a href='#'>Mise a jour  &nabla;</a>

<ul><li><a href='export.php'>Exporter</a></li>
</ul></ul></li>
</div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
mysql_query("delete from jour");
?>
<br><br><br><br><br><br><br><br><br>
<center>
  <marquee behavior="alternate" width="100%"  bgcolor="#EEEEEE"> <h2><em><font style="color:#000;">Office algerien interprofessionnel des cereales (O.A.I.C)</font></em></h2></center></marquee><br>
<marquee direction="up" height="350" >
  <center> <font style="color:#fff;"><h2>Union des cooperatives agricoles de skikda (UCA de skikda)<br><br>structeure d'exploitation<br><br><br><font style="color:#0066FF;">page d'acceil</font></h2></font></center>
</marquee>
<center> <font style="color:#fff;"><h2>Développé par: beldjehem hamza</h2></font></center>
</html>
