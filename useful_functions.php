<?php 

function Square($num)
{
	return	$num * $num;
}


function Cube($num)
{
	return	$num * $num * $num;
}

function Add($num1 , $num2)
{
	return $num1 + $num2;
}

function Sub($num1 , $num2)
{
	return $num1 - $num2;
}

function Mul($num1,$num2)
{
	return $num1 * $num2;
}

function Div($num1,$num2)
{
	return $num1 / $num2;
}
/* Area of Circle = pi * r2 */
function areaOfCircle($radius)
{
	return 3.14 * $radius * $radius ;
}

/* Area of Triangle = 1/2 * b * h */
function areaOfTriangle($base,$height)
{
	return 0.5 * $base * $height;
}
/* Area of Square = a * a  */
function areaOfSquare($area)
{
	return $area * $area;
}

/* Area of Rectangle = l * b */
function areaOfRectangle($length,$breadth)
{
	return $length * $breadth;
}

?>