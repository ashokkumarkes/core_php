<?php 
include('database.php');
	$query 	= new Query();
	$result = $query->getData("questions",'');
	//$arr = ['question'=>'testing question','status'=>1];
	// $insertResult = $query->insertData("questions",$arr);
	foreach ($result as $key => $value) {
		echo"<pre>";
		print_r($value['question']);
	}
	
	