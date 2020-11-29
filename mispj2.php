<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");

$fsearch =mysql_query("SELECT* FROM jour ");
       
            $result =mysql_fetch_array($fsearch);
			
			$rr=$result['jour'];
			
		 echo"$rr";
?>

