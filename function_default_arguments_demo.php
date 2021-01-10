<?php 
/*
We have to give the default arguments from right side.
Default arguments helps to call the function with less arguments. 
*/
 function defaultArgumentsDemo($roll,$name='chaitany')
 {
 	echo "name = {$name} , roll = {$roll}<br>";
 }
 defaultArgumentsDemo(23);

 function defaultArgumentsDemo1($num1,$num2=7,$num3=20)
 {
 	echo "num1 = {$num1} , num2 = {$num2} , num3 = {$num3}<br>";
 }
 defaultArgumentsDemo1(10,6);
?>