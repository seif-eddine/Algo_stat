<?php





















































function random($nb_genere, $max)
{
	$my_array = array();
	$i = 0;

	while ($i < $nb_genere)
	{
		$my_array[$i] = rand(0, $max);
		$i++;
	}
	return ($my_array);
}

function serie_tri($array)
{
	$permut = "true";
	while ($permut == "true")
	{
		$permut = "false";
		$i = 0;
		while (isset($array[$i]))
		{
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
	return ($array);
}

function serie_tri_inverse($array)
{
	$permut = "true";
	while ($permut == "true")
	{
		$permut = "false";
		$i = 0;
		while (isset($array[$i]))
		{
			if (isset($array[$i + 1]) && isset($array[$i]))
			{
				if ($array[$i] < $array[$i + 1])
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
	return ($array);
}

function serie_quasi_tri($array)
{
	$i_max = 0;
	$size = sizeof($array);

    while ($size - 1 > 1)
    {
        $i = 0;
        while ($i < $size) 
        {
            if ($array[$i] > $array[$i_max])
                $i_max = $i;
            $i = $i + 1;
        }

        $tmp = $array[$size - 1];
        $array[$size - 1] = $array[$i_max];
        $array[$i_max] = $tmp;

        $size = $size - 1;
	}
	return ($array);
}
function serie_doublon($nb_genere)
{
	$array = array();
	if($nb_genere == 10)
		$array = random($nb_genere, 3);
	else
	{
		if($nb_genere == 100)
			$array = random($nb_genere, 20);
		else
		{
			if($nb_genere == 1000)
				$array = random($nb_genere, 100);
			else
			{
				if($nb_genere == 10000)
					$array = random($nb_genere, 1000);
			}
		}
	}
	return ($array);
}

function moyenne_cout($array_rdm, $array_triee, $array_inverse, $array_quasi, $array_double)
{
	$arrayy = array($array_rdm, $array_triee, $array_inverse, $array_quasi, $array_double);
	$cout = array();
	$cout_moyen = array();
	$i = 0;
	foreach ($arrayy as $arr) {
		$cout[$i] = tri_bulle($arr);
		$cout_i[$i] = tri_insertion($arr);
		$cout_s[$i] = tri_selection($arr);
		$cout_p[$i] = tri_peigne($arr);
		$cout_sh[$i] = trie_shell($arr);
		$i++;
	}
	$cout_moyen['bulle'] = (int)round(($cout[0]['cout'] + $cout[1]['cout'] + $cout[2]['cout'] + $cout[3]['cout'] + $cout[4]['cout']) / 5);
	$cout_moyen['insertion'] = (int)round(($cout_i[0]['cout'] + $cout_i[1]['cout'] + $cout_i[2]['cout'] + $cout_i[3]['cout'] + $cout_i[4]['cout']) / 5);
	$cout_moyen['selection'] = (int)round(($cout_s[0]['cout'] + $cout_s[1]['cout'] + $cout_s[2]['cout'] + $cout_s[3]['cout'] + $cout_s[4]['cout']) / 5);
	$cout_moyen['peigne'] = (int)round(($cout_p[0]['cout'] + $cout_p[1]['cout'] + $cout_p[2]['cout'] + $cout_p[3]['cout'] + $cout_p[4]['cout']) / 5);
	$cout_moyen['shell'] = (int)round(($cout_sh[0]['cout'] + $cout_sh[1]['cout'] + $cout_sh[2]['cout'] + $cout_sh[3]['cout'] + $cout_sh[4]['cout']) / 5);
	echo "*********";
	echo var_dump($cout_moyen);
	return ($cout_moyen);
}

function moyenne_time($array_rdm, $array_triee, $array_inverse, $array_quasi, $array_double)
{
	$arrayy = array($array_rdm, $array_triee, $array_inverse, $array_quasi, $array_double);
	$cout = array();
	$cout_moyen = array();
	$i = 0;
	foreach ($arrayy as $arr) {
		$cout[$i] = tri_bulle($arr);
		$cout_i[$i] = tri_insertion($arr);
		$cout_s[$i] = tri_selection($arr);
		$cout_p[$i] = tri_peigne($arr);
		$cout_sh[$i] = trie_shell($arr);
		$i++;
	}
	$cout_moyen['bulle'] = ($cout[0]['time'] + $cout[1]['time'] + $cout[2]['time'] + $cout[3]['time'] + $cout[4]['time']) / 5;
	$cout_moyen['insertion'] = ($cout_i[0]['time'] + $cout_i[1]['time'] + $cout_i[2]['time'] + $cout_i[3]['time'] + $cout_i[4]['time']) / 5;
	$cout_moyen['selection'] = ($cout_s[0]['time'] + $cout_s[1]['time'] + $cout_s[2]['time'] + $cout_s[3]['time'] + $cout_s[4]['time']) / 5;
	$cout_moyen['peigne'] = ($cout_p[0]['time'] + $cout_p[1]['time'] + $cout_p[2]['time'] + $cout_p[3]['time'] + $cout_p[4]['time']) / 5;
	$cout_moyen['shell'] = ($cout_sh[0]['time'] + $cout_sh[1]['time'] + $cout_sh[2]['time'] + $cout_sh[3]['time'] + $cout_sh[4]['time']) / 5;
	echo "*********";
	echo var_dump($cout_moyen);
	return ($cout_moyen);
}
?>