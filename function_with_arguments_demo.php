<?php 
/*
This function returns the addition of numbers
*/
	function FunctionArgumentsDemo($num1,$num2)//function parameters
	{
		echo "<br>Addition of two numbers {$num1} + {$num2} = ";
		 return $num1+$num2;
	}
	
	echo FunctionArgumentsDemo(23,65);//function arguments

	echo FunctionArgumentsDemo(1,45);//function arguments

	echo FunctionArgumentsDemo(5682,25);//function arguments

	echo FunctionArgumentsDemo(23,8);//function arguments
?>