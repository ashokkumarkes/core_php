<?php 
	// 	$f1 = 0;
	// 	$f2 = 1;

	// for ($i=1; $i<=7 ; $i++) { 

	// 	$f3 = $f1+$f2;
	// 	$f1 = $f2;
	// 	$f2 = $f3;

	//  	print_r($f3);
	// }
		function fibonacci($num){
			
			if ($num==0) {
				return 1;
			}else{
				$f1 = 0;
			$f2 = 1;
			$f3 = $f1+$f2;
			$fi=$f2;
			$f2=$f3;
			}
					
		}
		fibonacci(7);
?>