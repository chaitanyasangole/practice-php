<?php 
/* Indexed array is an array in which elements are accessed with numeric index. 
$arr=array("chaitany",12,"Beed",76.80);
$arr[0]="chaitany";
$arr[1]=12;
$arr[2]=Beed;
$arr[3]=76.80;
*/

$arr=array("chaitany",12,76.80);

echo "<ol>";

for($i=0;$i<count($arr);$i++)
{
	echo "<li>".$arr[$i]."</li>";
}

echo "</ol>";

$arr2[0]="Babasaheb";
$arr2[1]="Ambedkar";
$arr2[2]="Marathwada";
$arr2[3]="University";
$arr2[4]=431122;
$arr2[5]=76.80;

echo "<ul>";
foreach($arr2 as $arr)
{
	echo '<li>'.$arr .'</li>';
}	
echo "</ul>";

echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
print_r($arr2);
echo '</pre>';
?>