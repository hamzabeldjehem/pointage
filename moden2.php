<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Modification</title>
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
table ,td,th{
border:0.5px solid #000;
border-collapse:collapse;
font-size:20px;
}

.form{
background:#66FFFF;
border-radius:50%;
width:53%;
height:65px;
font-size:17px;
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
#menu ul{
margin:0;
padding:0;
line-height:20px;
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
width:220px;
height:20px;
display:block;
text-align:center;
border:1px solid #000;
font-size:20px;
}
#menu ul ul{
position:absolute;
top:22px;
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
<li><a href='etat3.php'>Heures supplementaire</a></li>
<li><a href='etat4.php'>Etat des elements</a></li></ul></li>
<li><a href='moden.php'>Modification &nabla;</a>
<ul><li><a href='moden.php'>Modifier par nom</a></li>
</ul></li>
</div>
<body>
<body onLoad="init();">
<script src="jquery.min.js"></script>
<div style="float: right">
<h4>Modification par jour</h4>
</div>
<br>
<h1>
<center>
<div class="form">
<form method="POST" name="fm" id="myform">
<br>
Mois: <select name="s" class="sel" id="s" onchange="this.form.jour.focus()">
<option></option><option >Janvier 2020</option><option >février 2020</option><option >mars 2020</option><option >avril 2020</option><option >mai 2020</option><option >juin 2020</option><option >juillet 2020</option><option >aout 2020</option><option >septembre 2020</option><option >octobre 2020</option><option >novembre 2020</option><option >décembre 2020</option>
</select>
 
Jour: <input type="text" name="jour" class="sel"  onkeydown="un(event)" size="5" id="jour" autocomplete="off">

<input type="submit" name="bb" id="re" value="Valider"></div>
</form>
</center>
</h1>
<link rel="stylesheet" href="dataTables.bootstrap.min.css" /> 
			<link rel="stylesheet" href="dataTables.min.css" /> 
<script type="text/javascript" src="datatables.min.js"></script> 
<center><span id='abc'></span></center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
if(isset($_POST['s'],$_POST['jour'])){
$moi=$_POST['s'];
$jour=$_POST['jour'];
$kkk=mysql_query("SELECT * FROM point   WHERE mois='$moi' and jour='$jour' order by nom");
$k=mysql_fetch_array($kkk);
$id=$k['jour'];

if (isset($_POST["modifier"])){
$requete="UPDATE point SET pre='".$_POST["pre"]."',etat='".$_POST["etat"]."',heur='".$_POST["heur"]."',shift='".$_POST["shift"]."'  where  id='".$_POST["idOrigine"]."' ";
$result=mysql_query($requete);
}
$result=mysql_query("SELECT * FROM point   WHERE mois='$moi' and jour='$jour' order by nom  ");
if($id!=''){
echo"<center>";	
echo"<h3>Le $jour $moi</h3>";	
echo "<table id='example' class='table table-striped table-bordered' >";
echo"<thead>";
echo"<tr>";
echo "<th bgcolor=#999>Nom et prenom</th>";
echo "<th bgcolor=#999>Présence</th>";
echo "<th bgcolor=#999>Etat</th>";
echo "<th bgcolor=#999>Heure</th>";
echo "<th bgcolor=#999>Shift</th>";
echo "<th bgcolor=#999>Modification</th>";
echo"</tr>";
echo"</thead>";		
while ($pp2=mysql_fetch_array($result)){
echo"<tr>";
echo "<td align=center width=30%>$pp2[nom]</th>";
echo "<td align=center width=30%>$pp2[pre]</td>";
echo "<td align=center width=30%>$pp2[etat]</td>";
echo "<td align=center width=30%>$pp2[heur]</td>";
echo "<td align=center width=30%>$pp2[shift]</td>";
echo "<td align=center width=30%><a href='mm2.php?id=".$pp2['id']."'>Modifier</a></td>";
echo"</tr>";	
}}
else{echo"<br><br><br><center><h3>Aucun resultat</h3></center>";}
echo"</table></center>";
}
?>
</h1>
<script  src="en.js"></script>
<script  src="en2.js"></script>
<script>
var s=document.getElementById('s');
var nom=document.getElementById('nom');
var abc=document.getElementById('abc');
myform.addEventListener("submit",f);
function init(){
document.fm.jour.focus();
}
function f(e){
if(s.value==''){
e.preventDefault();
document.fm.s.focus();
e.style.color='red';
}

if(nom.value=='' ){
e.preventDefault();
document.fm.jour.focus();
e.style.color='red';}}
function un(event){
if (event.keyCode == 32){
  location.href = 'moden.php';}

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

});			
</script>

<script>
  $(document).ready(function (){
    var table = $('#example').DataTable({
       
        select: {
            style: 'single'
        },
        keys: {
           keys: [ 13 /* ENTER */, 38 /* UP */, 40 /* DOWN */ ]
        }
    });
    
    // Handle event when cell gains focus
    $('#example').on('key-focus.dt', function(e, datatable, cell){
        // Select highlighted row
        table.row(cell.index().row).select();
    });
    
    // Handle click on table cell
    $('#example').on('click', 'tbody td', function(e){
        e.stopPropagation();
        
        // Get index of the clicked row
        var rowIdx = table.cell(this).index().row;
        
        // Select row
        table.row(rowIdx).select();
    });
    
    // Handle key event that hasn't been handled by KeyTable
    $('#example').on('key.dt', function(e, datatable, key, cell, originalEvent){
        // If ENTER key is pressed
        if(key === 13){
            // Get highlighted row data
            var data = table.row(cell.index().row).data();
            
            // FOR DEMONSTRATION ONLY
            $("#example-console").html(data.join(', '));
        }
    });    
});
</script>
 
<style>
table.dataTable th.focus,
table.dataTable td.focus {
  outline: none;
}
</style>
</body>
</html>


