<?php 

/*
1
2 9
16 25 36
49 64 81 100
*/
$i=1;
$num=1;
while($i<=4)
{
	$j=1;
	while($j<=$i)
	{
		echo $num * $num."  ";
		$num++;
		$j++;
	}
	echo '<br>';
	$i++;
}

?>