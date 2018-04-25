<?php
function tri_peigne($array)
{
	$timeD = microtime(true);
	$count = 0;
	$size = sizeof($array);
	$inter = $size;
	$permut = "true";
	while ($permut == "true")
	{
		$inter = $inter  / 1.3;
		if ($inter < 1)
			$inter = 1;
		$permut = "false";
		$i = 0;
		while ($i < ($size - $inter))
		{
			$count++;
			if ($array[$i] > $array[$i + $inter])
			{
				$stock = $array[$i];
				$array[$i] = $array[$i + $inter];
				$array[$i + $inter] = $stock;
				$permut = "true";
			}
			$i++;
		}
	}
	$timeF = microtime(true);
	$time = $timeF - $timeD;
	$array = array(
    "array" => $array,
    "cout" => $count,
    "time" => $time,
	);
	return ($array);
}
?>