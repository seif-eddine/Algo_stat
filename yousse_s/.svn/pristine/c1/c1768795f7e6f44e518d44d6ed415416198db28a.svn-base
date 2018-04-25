<?php

if(!isset($_REQUEST['optradio'])){
     $_REQUEST['optradio'] = 'home';
}

$_SESSION['count_rapide'] = 0;
$_SESSION['timeD_rapide'] = 0;
$_SESSION['timeF_rapide'] = 0;
$_SESSION['time_rapide'] = 0;
//$_SESSION['time_rapide'] = 0; 
/*$_SESSION['count_fusion'] = 0;
$_SESSION['timeD_fusion'] = 0;
$_SESSION['timeF_fusion'] = 0;
$_SESSION['time_fusion'] = 0;*/

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
		$_SESSION['bulle'] = $tri_bulle['cout'];
		$_SESSION['selection'] = $tri_selection['cout'];
		$_SESSION['insertion'] = $tri_insertion['cout'];
		$_SESSION['peigne'] = $tri_peigne['cout'];
		$_SESSION['shell'] = $tri_shell['cout'];
		$_SESSION['fusion'] = $tri_fusion['cout'];
		//$_SESSION['rapide'] = $tri_rapide['cout'];
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
		$_SESSION['bulle'] = $tri_bulle['cout'];
		$_SESSION['selection'] = $tri_selection['cout'];
		$_SESSION['insertion'] = $tri_insertion['cout'];
		$_SESSION['peigne'] = $tri_peigne['cout'];
		$_SESSION['shell'] = $tri_insertion['cout'];
		$_SESSION['fusion'] = $tri_fusion['cout'];
		//$_SESSION['rapide'] = $tri_rapide['cout'];
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
		$_SESSION['bulle'] = $tri_bulle['cout'];
		$_SESSION['selection'] = $tri_selection['cout'];
		$_SESSION['insertion'] = $tri_insertion['cout'];
		$_SESSION['peigne'] = $tri_peigne['cout'];
		$_SESSION['shell'] = $tri_insertion['cout'];
		$_SESSION['fusion'] = $tri_fusion['cout'];
		//$_SESSION['rapide'] = $tri_rapide['cout'];
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
		$_SESSION['bulle'] = $tri_bulle['cout'];
		$_SESSION['selection'] = $tri_selection['cout'];
		$_SESSION['insertion'] = $tri_insertion['cout'];
		$_SESSION['peigne'] = $tri_peigne['cout'];
		$_SESSION['shell'] = $tri_insertion['cout'];
		$_SESSION['fusion'] = $tri_fusion['cout'];
		//$_SESSION['rapide'] = $tri_rapide['cout'];
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
		$_SESSION['bulle'] = $tri_bulle['cout'];
		$_SESSION['selection'] = $tri_selection['cout'];
		$_SESSION['insertion'] = $tri_insertion['cout'];
		$_SESSION['peigne'] = $tri_peigne['cout'];
		$_SESSION['shell'] = $tri_insertion['cout'];
		$_SESSION['fusion'] = $tri_fusion['cout'];
		//$_SESSION['rapide'] = $tri_rapide['cout'];
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

		$average = moyenne_cout($array_rdm, $array_triee, $array_inverse, $array_quasi, $array_double);
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