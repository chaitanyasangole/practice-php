<?php 
$i=1;
$arr=[1,2,3,4,5,6,7,8,9,10];
echo '<table border="2" style="width:90%;height:500px;text-align:center;margin:10px;"  padding="1">';
while($i<=10){

	$j=0;
	echo '<tr>';
 	while($j<10)
 	{
 		echo '<td>'.$arr[$j]*$i.'</td>';
 		$j++;
 	}
	echo '</tr>';
	$i++;
}
echo '</table>';
?>