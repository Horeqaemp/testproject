<?php 
echo "Mukesh Prasad" ;
$i='';
$j='';
	for($i=0;$i<5;$i++)
	{
		for($j=0;$j<5-$i;$j++)
		{
			echo "*";
		}
		echo "<br>";

	}
echo "///////////////////////////////////<br>";

for($i=0;$i<5;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		echo "*";
	}
	echo "<br>";
}
echo "///////////////////////////////////<br>";

for($i=0;$i<11;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		echo "*";
		if($i>=6)
		{
			$j=11-$j;
			$i=$j;
		}
	}
	echo "<br>";
}
?>