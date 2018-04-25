<?php
function tri_selection ($array)
{
    $timeD = microtime(true);
    $count = 0;
    $taille = sizeof($array);
        $i_max = 0;

    while ($taille > 1)
    {
        $i = 0;

        while ($i < $taille)
        {
            $count++;
            if ($array[$i] > $array[$i_max])
                $i_max = $i;
            $i = $i + 1;
        }

        $tmp = $array[$taille - 1];
        $array[$taille - 1] = $array[$i_max];
        $array[$i_max] = $tmp;

        $taille = $taille - 1;
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