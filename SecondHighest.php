<?php 
	/**
	 * 
	 */
	class SecondHighest
	{
		public function highestNumber()
		{
			$arr = [1,2,5,6,8,9];
			$h=$a = 0;
			for ($i=0; $i <6 ; $i++){ 
				if ($arr[$i]>$a) {
					$h = $arr[$i];
					echo $h;
				}
			}
		}
	}
	$obj = new SecondHighest();
	$obj->highestNumber();
?>