<?php

$arr=array(
array('Name','Degree','roll'),
array('Chaitany','MCA',36),
array('Shrishti','CA',15),
array('Adaa','BCA',26),
array('Surabhi','MBA',45),
array('Suraj','MCS',82),
);

echo "<table>";
for($i=0;$i<5;$i++)
{
	$j=0;
	if($i==0)
	{
		echo "<thead>";
	}

	if($i==1)
	{
		echo "<tbody>";
	}

	echo "<tr>";
	for($j=0;$j<3;$j++)
	{
		if($i==0)
		echo "<th>{$arr[$i][$j]}</th>";
		else
		echo "<td>{$arr[$i][$j]}</td>";
	}

	if($i==0)
	{
		echo "</thead>";
	}

	if($i==5)
	{
		echo "</tbody>";
	}

	echo "</tr>";
}
echo "</table>";

header("Content-Type:application/xls");
header("Content-Disposition:attachment;filename=report.xls");
 ?>