<?php 

// Define two array
	$array1 = array('a','1','2','3','4');
	$array2 = array('a','3');

// intersect/matched values should be equal to first array
	if (array_intersect($array2, $array1) === $array2) {
	  echo "<pre>";
	  print_r(array_intersect($array2, $array1));
	} else {
	   echo "Not a subset";
	}

//Compare the values of two arrays, and return the differences:

	$a1=array('a','1','2','3','4');
	$a2=array('a','3');

	$result=array_diff($a1,$a2);
	print_r($result);
?>