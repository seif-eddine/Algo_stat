<?php 
function tri_bulle($array)
{
	$timeD = microtime(true);
	$count = 0;
	$size = sizeof($array);
	$permut = "true";
	while ($permut == "true")
	{
		$permut = "false";
		$i = 0;
		while ($i <= ($size - 2))
		{
			$count = $count + 1;
			if (isset($array[$i + 1]) && isset($array[$i]))
			{
				if ($array[$i] > $array[$i + 1])
				{
					$stock = $array[$i];
					$array[$i] = $array[$i + 1];
					$array[$i + 1] = $stock;
					$permut = "true";
				}
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