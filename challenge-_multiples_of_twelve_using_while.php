<?php 
/*
  coding challenge find multiples of 12 which is less than or equal to 240 using while loop
*/
  $i=1;
  $arr=[];
  $j=0;
  while($i<=240)
  {
  	if($i % 12==0)
  	{
  		$arr[$j]=$i;
  		$j++;
  	}
  	$i++;
  }
  var_dump($arr);
?>