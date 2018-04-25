<?php

function fusionner(&$tab, $debut, $milieu, $fin)
{
    $old_tab = $tab;

    $i1 = $debut;
    $i2 = $milieu + 1;
    $i = $debut;

    while ($i1 <= $milieu && $i2 <= $fin)
    {
        $_SESSION['count_rapide']++;
        if ($old_tab[$i1] <= $old_tab[$i2]) {
            $tab[$i] = $old_tab[$i1];
            $i1++;
        } else {
            $tab[$i] = $old_tab[$i2];
            $i2++;
        }
        $i++;
    }
    if ($i <= $fin) {
        while ($i1 <= $milieu)
        {
            $_SESSION['count_rapide']++;
            $tab[$i] = $old_tab[$i1];
            $i1++;
            $i++;
        }
        while ($i2 <= $fin)
        {
            $_SESSION['count_fusion']++;
            $tab[$i] = $old_tab[$i2];
            $i2++;
            $i++;
        }
    }
    //echo var_dump($_SESSION['count_rapide']);
}

function triFusion(&$tab, $debut, $fin)
{
    if ($_SESSION['count_fusion'] == 0)
        $_SESSION['timeD_fusion'] = microtime(true);
    if($debut < $fin)
    {
        $milieu = ($debut+$fin) / 2;
        triFusion($tab, $debut, $milieu);
        triFusion($tab, $milieu + 1, $fin);
        fusionner($tab, $debut, $milieu, $fin);
    }
    $_SESSION['timeF_fusion'] = microtime(true);
    $_SESSION['time'] = $_SESSION['timeF_fusion'] - $_SESSION['timeD_fusion'];
    $array = array(
    "array" => $tab,
    "cout" => $_SESSION['count_fusion'],
    "time" => $_SESSION['time'],
    );
    return ($array);
}
?>




