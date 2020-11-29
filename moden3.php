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
<li><a href='nom.php'>Ajouter</a></li></ul></li>
<li><a href='#'>Feuilles de pointage  &nabla;</a>
<ul><li><a href='etat.php'>Etat de pointage par mois</a></li>
<li><a href='etat2.php'>Situation pointage</a></li></ul></li>
<li><a href='moden.php'>Modification &nabla;</a>
<ul><li><a href='moden2.php'>Modifier par jour</a></li>
</ul></li>
</div>
<body>
<body onLoad="init();">
<script src="jquery.min.js"></script>

<center><h3>Modification</h3></center>

<h1>
<center>
<div class="form">
<form method="post" name="fm" id="myform">
</center>
</h1>
<br><br>
<link rel="stylesheet" href="dataTables.bootstrap.min.css" /> 
			<link rel="stylesheet" href="dataTables.min.css" /> 
<script type="text/javascript" src="datatables.min.js"></script> 
<center><span id='abc'></span></center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$i=0;
if (isset($_POST["modifier"])){
$requete="UPDATE nom SET nom='".$_POST["nom"]."',code='".$_POST["code"]."'  where  id='".$_POST["idOrigine"]."' ";
$result=mysql_query($requete);
}
$result=mysql_query("SELECT * FROM nom order by nom");
echo"<center>";	
//echo"<h4>";	
echo "<table id='example' class='table table-striped table-bordered' >";
echo"<thead>";
echo"<tr>";
echo "<th bgcolor=#999>N°</th>";
echo "<th bgcolor=#999>Nom et prenom</th>";
echo "<th bgcolor=#999>Code</th>";
echo "<th bgcolor=#999>Modification</th>";
echo"</tr>";
echo"</thead>";	
while ($pp2=mysql_fetch_array($result)){
echo"<tr>";
$i++;
echo "<td align=center width=30%>$i</td>";
echo "<td align=center width=30%>$pp2[nom]</td>";
echo "<td align=center width=30%>$pp2[code]</td>";
echo "<td align=center width=30%><a href='mm3.php?id=".$pp2['id']."'>Modifier/Supprimer</a></td>";
echo"</tr>";	
}
echo"</table></center>";

?>
</h1>
<script  src="en.js"></script>
<script  src="en2.js"></script>

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
