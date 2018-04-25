var bulle = "Le tri à bulles ou tri par propagation est un algorithme de tri."
var bulle1 = "Il consiste à comparer répétitivement les éléments consécutifs d'un tableau, et à les permuter lorsqu'ils sont mal triés."
var bulle2 = " Il doit son nom au fait qu'il déplace rapidement les plus grands éléments en fin de tableau, comme des bulles d'air qui remonteraient rapidement à la surface d'un liquide."
var bulle3 = "Le tri à bulles est souvent enseigné en tant qu'exemple algorithmique, car son principe est simple."
var bulle4 = "Mais c'est le plus lent des algorithmes de tri communément enseignés, et il n'est donc guère utilisé en pratique."
var tri_bulle = bulle + bulle1 + bulle2 + bulle3 + bulle4;

var ins1 = "En informatique, le tri par insertion est un algorithme de tri classique, que la plupart des personnes utilisent naturellement pour trier des cartes à jouer : prendre les cartes mélangées une à une sur la table, et former une main en insérant chaque carte à sa place.";
var ins2 = "En général, le tri par insertion est beaucoup plus lent que d'autres algorithmes comme le tri rapide (ou quicksort) et le tri fusion pour traiter de grandes séquences, car sa complexité asymptotique est quadratique.";
var ins3 = "Le tri par insertion est cependant considéré comme le tri le plus efficace";
var insertion = ins1 + ins2 + ins3;


$("#test").hide(1000);
$("#testt").hide(1000);

$("#btn_sel").click(
	function()
	{
		$("#test").hide(1500);
		$("#def").show(1500);
		$("#testt").hide(1500);
		$("#def").empty().append("Le tri par sélection (ou tri par extraction) est un algorithme de tri par comparaison. Cet algorithme est simple, mais considéré comme inefficace, car il s'exécute en temps quadratique en le nombre d'éléments à trier, et non en temps pseudo linéaire.");
	});

$("#btn_b").click(
	function()
	{	
		$("#test").hide(1500);
		$("#def").show(1500);
		$("#testt").hide(1500);
		$("#def").empty().append(tri_bulle);
	});

$("#btn_ins").click(
	function()
	{	
		$("#test").hide(1500);
		$("#testt").hide(1500);
		$("#def").show(1500);
		$("#def").empty().append(insertion);
	});


$("#btn_tab_already").click(
	function()
	{	
		$("#def").hide(1500);
		$("#test").show(1500);
		$("#testt").show(1500);
	});



$("#dix").click(
	function(){	
		$.ajax({
  		method: "POST",
  		url: "test.php",
  		data: {js: 10}
  		})
  		.done(function(msg) {
    		alert( "Data Saved: " + msg );
   		});
});

$("#cent").click(
	function()
	{	
		alert("ok");
	});

$("#mille").click(
	function()
	{	
		alert("ok");
	});