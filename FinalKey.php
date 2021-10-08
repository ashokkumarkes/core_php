<?php 
	/**
	 * 
	 */
	/**
	 * 
	 */
	class Checkout 
	{
		
		final function totalize()
		{
			echo "hello bill";
		}
	}
	class IllegalCheckout extends Checkout
	{
		
		  final function totalize()
		{
			echo "hello2 bill";
		}
	}
	$obj = new IllegalCheckout();
	$obj->totalize();
	
	//Fatal error: Cannot override final method 
?>