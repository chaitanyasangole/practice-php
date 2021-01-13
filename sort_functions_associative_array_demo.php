<?php 
$asarray=array("as"=>12,"za"=>345,"lk"=>100,"cr"=>35,"pq"=>98);
echo 'original array<br>';
print_r($asarray);
echo '<br><br>original array after sort in ascending order according to value<br>';
asort($asarray);
print_r($asarray);

echo '<br><br>original array after sort in descending order according to value<br>';
arsort($asarray);
print_r($asarray);
//ECHO json_encode($asarray);

echo '<br><br>original array after sort in ascending order according to key<br>';
ksort($asarray);
print_r($asarray);

echo '<br><br>original array after sort in descending order according to key<br>';
krsort($asarray);
print_r($asarray);
?>