<?php 
$array=array("This","is","the","string","by","chaitany!");
var_dump($array);
$string=implode(" ",$array);
$string2=implode(",",$array);
$string3=implode(".",$array);
var_dump($string);
var_dump($string2);
var_dump($string3);
?>