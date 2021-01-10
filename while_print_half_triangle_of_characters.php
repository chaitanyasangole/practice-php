<?php

/*

A
AB
ABC
ABCD
ABCDE

*/

$i=1;

while($i<=5)
{
	$c=65;
	$j=1;
	while($j<=$i)
	{
		printf('%c',$c);
		$j++;
		$c++;
	}
	echo '<br>';
	$i++;
}

?>