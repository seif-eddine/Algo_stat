<?php
require_once("modele/m_function.php");
require_once("modele/tri_fusion.php");
require_once("modele/tri_rapide.php");
require_once("modele/Tri_selection.php");
require_once("modele/tri_bulle.php");
require_once("modele/tri_insertion.php");
require_once("modele/tri_peigne.php");
require_once("modele/tri_shell.php");

session_start();
if (!isset($_REQUEST['uc']))
    $_REQUEST['uc'] = 'home';
$uc = $_REQUEST['uc'];
if ($uc == "home")
	require("vue/v_template_home.php");
else 
{
	ob_start();
	require "controleur/c_" . $uc . ".php";
	$content = ob_get_contents();
	ob_end_clean();
	if ($uc == "cout")
		require("vue/v_template_cout.php");
	else
		require("vue/v_template_time.php");
}
?>