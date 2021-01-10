<?php 
// fizbuzz program
$msg1="FIZZ";
$msg2="BUZZ";

$arrm3=[];
$j=$k=$l=0;
$arrm5=[];
$arrm35=[];

for($i=1;$i<=100;$i++)
{
	if($i%3==0 && $i%5==0)
	{
		echo ' '.$msg1.$msg2;	
		$arrm35[$j]=$i;
		$j++;
	}
	else
	{
		if($i%3==0)
		{
			echo ' '.$msg1;
			$arrm3[$k]=$i;
			$k++;
		}
		else if($i%5==0)
		{
			echo ' '. $msg2;
			$arrm5[$l]=$i;
			$l++;
		}
		else
		{
			echo ' '.$i;	
		}
	}
}
var_dump($arrm5);
var_dump($arrm3);
var_dump($arrm35);
?>