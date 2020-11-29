<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Importer</title>
<link rel="icon" href="im/adoba.ico" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<p align="center"> <h3 align="center"><a href="form.php">Retour</a></h3></p>	
	
	
	<?php
    $connection = mysqli_connect('localhost','root','','exploi');
    $filename = '../sql3/backup.sql';
    $handle = fopen($filename,"r+");
    $contents = fread($handle,filesize($filename));
    $sql = explode(';',$contents);
    foreach($sql as $query){
      $result = mysqli_query($connection,$query);
      if($result){
       
      }
    }
    fclose($handle);
    echo "<br><br><br><br><br><br><br><center><h2>Importé avec succés</h2></center>";
	?>
	
	<script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
