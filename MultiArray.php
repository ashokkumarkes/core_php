<?php 
	class MultiArray{
		public function arrayData(){
			$arr = [
						[1,2,3,4,5],
						[1,2,3,4,5],
						[1,2,3,4,5],
						[1,2,3,4,5],
			];

			for ($row=0; $row <4 ; $row++) {
					echo "<pre>"; 
				for ($col=0; $col <=4; $col++) { 
					echo " ".$arr[$row][$col];
				}	
			}
		}
	}
	$obj = new MultiArray();
	$obj->arrayData()
?>