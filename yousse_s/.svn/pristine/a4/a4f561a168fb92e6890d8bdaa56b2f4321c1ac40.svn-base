<?php 

function tri_insertion($array)
{
	$timeD = microtime(true);
    $i;
    $j;
    $k;
 	$taille = count($array);
 	$count = 0;
    for($i = 1; $i < $taille; $i++) 
    {
        $k = $array[$i];
        $count++;
        for ($j = $i; $j > 0 && $array[$j - 1] > $k; $j--) 
        {
            $array[$j] = $array[$j - 1];
            $count++;
        }
        $array[$j] = $k;
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