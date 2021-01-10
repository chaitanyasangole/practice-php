<?php 
/*

array_shift(arrayname) :- it removes the first element of array.
array_unshift(arrayname,value) :- it adds element to first.

Q. How to add associative array in array_unshift method ?
*/

$arr1=array("name"=>'chaitany','dob'=>'1994-10-02','pincode'=>431122,'status'=>true);
$arr2=array('chaitany','2020-10-02',true,'sangole');
echo "before call<br>";

printA($arr1,$arr2);

echo "after call<br>";
array_shift($arr1);
array_shift($arr2);

printA($arr1,$arr2);

//array_unshift_assoc($arr1,'status',true);
$new=array('status'=>true);
array_unshift($arr1,$new);
array_unshift($arr2,"Dolas");

echo "after call<br>";
printA($arr1,$arr2);

function printA($arr1,$arr2)
{
	echo '<pre>';
	print_r($arr1);
	echo '</pre>';

	echo '<pre>';
	print_r($arr2);
	echo '</pre>';
}

?>