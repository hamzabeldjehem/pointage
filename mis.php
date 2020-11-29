<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$fsearch =mysql_query("SELECT* FROM mois ");
       
            $result =mysql_fetch_array($fsearch);
			
			$rr=$result['mois'];
		
			   echo "$rr";
	
	if(isset($_POST['re'])){
	mysql_connect("localhost","root","");
mysql_select_db("exploi");
	$a = $_POST['m'];
	$jo = $_POST['jo'];
	if($a!=''){
	mysql_query("delete from mois");	
	mysql_query("insert into mois values('".$a."')");
	
	mysql_query("delete from jour");	
	mysql_query("insert into jour values('".$jo."')");
	}}
?>