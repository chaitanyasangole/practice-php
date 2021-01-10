<?php 

include 'useful_functions.php';

echo " Square of 5".Square(5).'<br>';

echo " Cube of 5".Cube(5).'<br>';

$num1=30;$num2=15;

echo " Addition of {$num1} + {$num2}".Add($num1,$num2).'<br>';

echo " Subtraction of {$num1} - {$num2}".Sub($num1,$num2).'<br>';

echo " Multiplication of {$num1} * {$num2}".Mul($num1,$num2).'<br>';

echo " Division of {$num1} / {$num2}".Div($num1,$num2).'<br>';
?>