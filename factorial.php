<?php 
	 $array1 = array("Ram", "Akash", "Rishav"); 
     $array2 = array('24', '30', '45');   
	 $data = array_combine( $array1,$array2 );
	 echo"<pre>";
	 print_r($data);
?>