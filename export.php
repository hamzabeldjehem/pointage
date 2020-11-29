 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Exporter</title>
<link rel="icon" href="im/adoba.ico" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<p align="center"> <h3 align="center"><a href="form.php">Retour</a></h3></p>	
		<?php
    $connection = mysqli_connect('localhost','root','','exploi');
    $tables = array();
    $result = mysqli_query($connection,"SHOW TABLES");
    while($row = mysqli_fetch_row($result)){
      $tables[] = $row[0];
    }
    $return = '';
    foreach($tables as $table){
      $result = mysqli_query($connection,"SELECT * FROM ".$table);
      $num_fields = mysqli_num_fields($result);
      
      $return .= 'DROP TABLE '.$table.';';
      $row2 = mysqli_fetch_row(mysqli_query($connection,"SHOW CREATE TABLE ".$table));
      $return .= "\n\n".$row2[1].";\n\n";
      
      for($i=0;$i<$num_fields;$i++){
        while($row = mysqli_fetch_row($result)){
          $return .= "INSERT INTO ".$table." VALUES(";
          for($j=0;$j<$num_fields;$j++){
            $row[$j] = addslashes($row[$j]);
            if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
            else{ $return .= '""';}
            if($j<$num_fields-1){ $return .= ',';}
          }
          $return .= ");\n";
        }
      }
      $return .= "\n\n\n";
    }
    //save file
    $handle = fopen("../sql3/backup.sql","w+");
    fwrite($handle,$return);
    fclose($handle);
    echo "<br><br><br><br><br><br><br><center><h2>Exporté avec succés</h2></center>";
	?>
	
	 <script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script>
  </html> 