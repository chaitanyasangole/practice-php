<?php 
/*
  coding challenge find multiples of 12 which is less than or equal to 240 using while loop
*/
  $i=1;
  $j=0;
  $arr=[];

  do 
  {
  	if($i%12==0)
  	{
  		$arr[$j]=$i;
  		$j++;
  	}
  	$i++;
  }
  while($i<=240);
  var_dump($arr);
?>