<?php

if(!isset($_REQUEST['optradio'])){
     $_REQUEST['optradio'] = 'home';
}	 
$action = $_REQUEST['optradio'];
if (!isset($_SESSION['serie']))
	$_SESSION['serie'] = 'triee';
if (!isset($_SESSION['nb']))
	$_SESSION['nb'] = 10;
switch ($action) {
	case 'home':
		$_SESSION['serie'] = "aa";
		$_SESSION['nb'] = 1;
		$vue = "vue/v_home.php";
		break;
	case 'test':
		$array = random(10, 9);
		$array = tri_peigne($array);
		$vue = "vue/v_test.php";
		break;
	case 'triee':
		$array = random($_REQUEST['nb'], $_REQUEST['nb']);
		$array = serie_tri($array);
		$tri_bulle = tri_bulle($array); 
		$tri_selection = tri_selection($array);
		$tri_insertion = tri_insertion($array);
		$tri_peigne = tri_peigne($array);
		$tri_shell = trie_shell($array);
		$tri_fusion = triFusion($array, 0, $_REQUEST['nb'] - 1);
		//$tri_rapide = tri_rapide($array, 0, $_REQUEST['nb'] - 1);
		$_SESSION['bulle'] = $tri_bulle['time'];
		$_SESSION['selection'] = $tri_selection['time'];
		$_SESSION['insertion'] = $tri_insertion['time'];
		$_SESSION['peigne'] = $tri_peigne['time'];
		$_SESSION['shell'] = $tri_shell['time'];
		$_SESSION['fusion'] = $tri_fusion['time'];
		//$_SESSION['rapide'] = $tri_rapide['time'];
		$_SESSION['serie'] = $action;
		$_SESSION['nb'] = $_REQUEST['nb'];
		$vue = "vue/v_graph.php";
		break;
	case 'inverse':
		$array = random($_REQUEST['nb'], $_REQUEST['nb']);
		$array = serie_tri_inverse($array);
		$tri_bulle = tri_bulle($array); 
		$tri_selection = tri_selection($array);
		$tri_insertion = tri_insertion($array);
		$tri_peigne = tri_peigne($array);
		$tri_shell = trie_shell($array);
		$tri_fusion = triFusion($array, 0, $_REQUEST['nb'] - 1);
		//$tri_rapide = tri_rapide($array, 0, $_REQUEST['nb'] - 1);
		$_SESSION['bulle'] = $tri_bulle['time'];
		$_SESSION['selection'] = $tri_selection['time'];
		$_SESSION['insertion'] = $tri_insertion['time'];
		$_SESSION['peigne'] = $tri_peigne['time'];
		$_SESSION['shell'] = $tri_shell['time'];
		$_SESSION['fusion'] = $tri_fusion['time'];
		//$_SESSION['rapide'] = $tri_rapide['time'];
		$_SESSION['serie'] = $action;
		$_SESSION['nb'] = $_REQUEST['nb'];
		$vue = "vue/v_graph.php";
		break;
	case 'random':
		$array = random($_REQUEST['nb'], $_REQUEST['nb']);
		$tri_bulle = tri_bulle($array); 
		$tri_selection = tri_selection($array);
		$tri_insertion = tri_insertion($array);
		$tri_peigne = tri_peigne($array);
		$tri_shell = trie_shell($array);
		$tri_fusion = triFusion($array, 0, $_REQUEST['nb'] - 1);
		//$tri_rapide = tri_rapide($array, 0, $_REQUEST['nb'] - 1);
		$_SESSION['bulle'] = $tri_bulle['time'];
		$_SESSION['selection'] = $tri_selection['time'];
		$_SESSION['insertion'] = $tri_insertion['time'];
		$_SESSION['peigne'] = $tri_peigne['time'];
		$_SESSION['shell'] = $tri_shell['time'];
		$_SESSION['fusion'] = $tri_fusion['time'];
		//$_SESSION['rapide'] = $tri_rapide['time'];
		$_SESSION['serie'] = $action;
		$_SESSION['nb'] = $_REQUEST['nb'];
		$vue = "vue/v_graph.php";
		break;
	case 'quasi':
		$array = random($_REQUEST['nb'], $_REQUEST['nb']);
		$array = serie_quasi_tri($array);
		$tri_bulle = tri_bulle($array); 
		$tri_selection = tri_selection($array);
		$tri_insertion = tri_insertion($array);
		$tri_peigne = tri_peigne($array);
		$tri_shell = trie_shell($array);
		$tri_fusion = triFusion($array, 0, $_REQUEST['nb'] - 1);
		//$tri_rapide = tri_rapide($array, 0, $_REQUEST['nb'] - 1);
		$_SESSION['bulle'] = $tri_bulle['time'];
		$_SESSION['selection'] = $tri_selection['time'];
		$_SESSION['insertion'] = $tri_insertion['time'];
		$_SESSION['peigne'] = $tri_peigne['time'];
		$_SESSION['shell'] = $tri_shell['time'];
		$_SESSION['fusion'] = $tri_fusion['time'];
		//$_SESSION['rapide'] = $tri_rapide['time'];
		$_SESSION['serie'] = $action;
		$_SESSION['nb'] = $_REQUEST['nb'];
		$vue = "vue/v_graph.php";
		break;
	case 'double':
		$array = serie_doublon($_REQUEST['nb']);
		$tri_bulle = tri_bulle($array); 
		$tri_selection = tri_selection($array);
		$tri_insertion = tri_insertion($array);
		$tri_peigne = tri_peigne($array);
		$tri_shell = trie_shell($array);
		$tri_fusion = triFusion($array, 0, $_REQUEST['nb'] - 1);
		//$tri_rapide = tri_rapide($array, 0, $_REQUEST['nb'] - 1);
		$_SESSION['bulle'] = $tri_bulle['time'];
		$_SESSION['selection'] = $tri_selection['time'];
		$_SESSION['insertion'] = $tri_insertion['time'];
		$_SESSION['peigne'] = $tri_peigne['time'];
		$_SESSION['shell'] = $tri_shell['time'];
		$_SESSION['fusion'] = $tri_fusion['time'];
		//$_SESSION['rapide'] = $tri_rapide['time'];
		$_SESSION['serie'] = $action;
		$_SESSION['nb'] = $_REQUEST['nb'];
		$vue = "vue/v_graph.php";
		break;
	case 'moy':
		$array_rdm = random($_REQUEST['nb'], $_REQUEST['nb']);
		$array_triee = serie_tri($array_rdm);
		$array_inverse = serie_tri_inverse($array_rdm);
		$array_quasi = serie_quasi_tri($array_rdm);
		$array_double = serie_doublon($_REQUEST['nb']);

		$average = moyenne_time($array_rdm, $array_triee, $array_inverse, $array_quasi, $array_double);
		$_SESSION['bulle'] = $average['bulle'];
		$_SESSION['selection'] = $average['selection'];
		$_SESSION['insertion'] = $average['insertion'];
		$_SESSION['peigne'] = $average['peigne'];
		$_SESSION['shell'] = $average['shell'];
		$_SESSION['serie'] = $action;
		$_SESSION['nb'] = $_REQUEST['nb'];
		$vue = "vue/v_graph.php";
		break;
	default:
		# code...
		break;
}
require $vue;
?>