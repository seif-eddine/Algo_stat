<?php

/*
function tri_rapide(&$tableau, $premier, $dernier)
{
	if ($_SESSION['count_rapide'] == 0)
        $_SESSION['timeD_rapide'] = microtime(true);
	if ($premier < $dernier)
	{
		$pivot = $premier + $dernier / 2;
		$pivot = partitionner($tableau, $premier, $dernier, $pivot);
		tri_rapide($tableau, $premier, $pivot - 1);
		tri_rapide($tableau, $pivot + 1, $dernier);
	}
	$_SESSION['timeF_rapide'] = microtime(true);
    $_SESSION['time'] = $_SESSION['timeF_rapide'] - $_SESSION['timeD_rapide'];
    $array = array(
    "array" => $tableau,
    "cout" => $_SESSION['count_rapide'],
    "time" => $_SESSION['time'],
    );
    return ($array);
}

function partitionner(&$tableau, $premier, $dernier, $pivot)
{
	$tmp = $tableau[$pivot];
	$tableau[$pivot] = $tableau[$dernier];
	$tableau[$dernier] = $tmp;

	$j = $premier;
	for ($i = $premier; $i < $dernier - 1 ; $i++)
	{
		$_SESSION['count_rapide']++;
		if ($tableau[$i] <= $tableau[$dernier])
		{
			$tmp = $tableau[$i];
			$tableau[$i] = $tableau[$j];
			$tableau[$j] = $tmp;
			$j = $j + 1;
		}
	}
	$tmp = $tableau[$dernier];
	$tableau[$dernier] = $tableau[$j];
	$tableau[$j] = $tmp;
}
*/

function tri_rapide(&$tableau, $debut, $fin) {
	if ($_SESSION['count_rapide'] == 0)
        $_SESSION['timeD_rapide'] = microtime(true);
    if ($debut < $fin) {
        $indicePivot = partition($tableau, $debut, $fin);
        tri_rapide($tableau, $debut, $indicePivot-1);
        tri_rapide($tableau, $indicePivot+1, $fin);
    }
    $_SESSION['timeF_rapide'] = microtime(true);
    $_SESSION['time'] = $_SESSION['timeF_rapide'] - $_SESSION['timeD_rapide'];
    $array = array(
    "array" => $tableau,
    "cout" => $_SESSION['count_rapide'],
    "time" => $_SESSION['time'],
    );
    return ($array);
}

function partition (&$tableau, $debut, $fin) {
    $valeurPivot = $tableau[$debut];
    $d = $debut+1;
    $f = $fin;
    while ($d < $f) {
        while($d < $f && $tableau[$f] >= $valeurPivot) 
        {
        	$f--;
        	$_SESSION['count_rapide']++;
        }
        while($d < $f && $tableau[$d] <= $valeurPivot) 
        {
        	$d++;
        	$_SESSION['count_rapide']++;
        }
        $temp = $tableau[$d];
        $tableau[$d]= $tableau[$f];
        $tableau[$f] = $temp;
    }
    if ($tableau[$d] > $valeurPivot) $d--;
    	$tableau[$debut] = $tableau[$d];
    $tableau[$d] = $valeurPivot;
}
?>