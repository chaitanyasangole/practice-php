<?php 
// indexed array functions
/*
sort():- sort indexed array alphabets & numbers in ascending order.

rsort():- sort indexed array alphabets & numbers in descending order.
*/
$arr=array("chaitany",12,54.89,true);
$arr1=array('cs','ab','jk','pk','za');
$arr2=array(12,45,23,8769,87,67,305);
echo "original array";

printAll();

asc_array();

echo "<br>original array after call sort function";

printAll();

desc_array();
echo "<br>original array after call rsort function";

printAll();

function printAll()
{
	echo '<br>';
	print_r($GLOBALS['arr']);
	echo '<br>';
	print_r($GLOBALS['arr1']);
	echo '<br>';
	print_r($GLOBALS['arr2']);
	echo '<br>';
}
function asc_array()
{	
sort($GLOBALS['arr']);

sort($GLOBALS['arr1']);

sort($GLOBALS['arr2']);
}

function desc_array()
{	
rsort($GLOBALS['arr']);

rsort($GLOBALS['arr1']);

rsort($GLOBALS['arr2']);
}
?>