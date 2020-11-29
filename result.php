<?php

$link=mysql_connect('localhost','root','');
mysql_select_db('exploi',$link);
    if(isset($_POST['motclef'])){
	
        $motclef = $_POST['motclef'];

        $fsearch =mysql_query("SELECT* FROM nom WHERE nom='$motclef'");
       
            $result =mysql_fetch_array($fsearch);
			
			$r=$result['code'];
		
			echo "$r";
			
			   }
?>