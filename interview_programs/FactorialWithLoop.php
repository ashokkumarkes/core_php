<?php 
	// Description:

	// Write a program to calculate factorial of a number using for loop in php.
	
	// logic: 1*2*3*4*5 = 120
	// formula: n! = n*(n-1)*------*1;
	// $num = 5;
	// $fact = 1;
	// for ($i=5; $i>=1 ; $i--) { 
		
	// 	$fact =$i*$fact;
		
	// }
	// print_r($fact);
	// echo"<br>";
	function factorial($num){
		if ($num == 0) {
			return 1;
		}
		else{
			return ($num*factorial($num-1));
		}
	}
	echo factorial(5);
?>