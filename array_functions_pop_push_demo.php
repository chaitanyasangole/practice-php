<?php 
/*
array_pop(arrayname) :- it removes the last element of array.
array_push(arrayname,value) :- it adds element to last.

Q. How to add associative array in array_push method ?
*/
$arr1=array("name"=>'chaitany','dob'=>'1994-10-02','pincode'=>431122,'status'=>true);
$arr2=array('chaitany','2020-10-02',true,'sangole');

echo "before call<br>";

printA($arr1,$arr2);

echo "after call<br>";
array_pop($arr1);
array_pop($arr2);

printA($arr1,$arr2);

//array_push_assoc($arr1,'status',true);
$new=array('status'=>false);
array_push($arr1,$new);
array_push($arr2,"Dolas");

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