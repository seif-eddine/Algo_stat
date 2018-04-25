<?php
function trie_shell($array)
{
	$timeD = microtime(true);
	$i = 0;
	$count = 0;
	$inc = round(count($array)/2);
	while($inc > 0)
	{
		for($i = $inc; $i < count($array); $i++){
			$temp = $array[$i];
			$j = $i;
			while($j >= $inc && $array[$j-$inc] > $temp)
			{
				$count++;
				$array[$j] = $array[$j - $inc];
				$j -= $inc;
				$i++;
			}
			$array[$j] = $temp;
		}
		$inc = round($inc / 2.2);
	}
	$timeF = microtime(true);
	$time = $timeF - $timeD;
	$array = array(
    "array" => $array,
    "cout" => $count,
    "time" => $time,
	);
	return $array;
}
?>