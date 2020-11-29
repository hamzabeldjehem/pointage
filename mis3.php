<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$fsearch =mysql_query("SELECT* FROM name ");
       
            $result =mysql_fetch_array($fsearch);
			
			$rr=$result['name'];
		
			   echo "$rr";
	
	if(isset($_POST['re'])){
	mysql_connect("localhost","root","");
mysql_select_db("exploi");
	$a = $_POST['m'];
	if($a!=''){
	mysql_query("delete from name");	
	mysql_query("insert into name values('".$a."')");
	}}
?>