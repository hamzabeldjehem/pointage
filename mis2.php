<?php
mysql_connect("localhost","root","");
mysql_select_db("exploi");
$cm = $_POST['cm'];
$r=1;
$t=32;
$mois =mysql_query("SELECT* FROM mois");
$mm =mysql_fetch_array($mois);
$m=$mm['mois'];
$fsearch =mysql_query("SELECT* FROM point where nom='$cm' and mois='$m' order by id DESC  ");
       
            $result =mysql_fetch_array($fsearch);
			
			$rr=++$result['jour'];
			if($rr==$t){
		 echo"$r";}
			   //echo "$rr";
			   
			 elseif($rr<$t)  {echo"$rr";}
	
	//}
?>
