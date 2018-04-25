
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['type de série', 'Tri à insertion', 'Tri à sélection', 'Tri à bulles', 'Tri à peigne', 'Tri de Shell', 'Tri Fusion'],
    ['Nombre de coûts', <?php echo $_SESSION['insertion'] ?>, <?php echo $_SESSION['selection'] ?>, <?php echo $_SESSION['bulle'] ?>, <?php echo $_SESSION['peigne'] ?>, <?php echo $_SESSION['shell'] ?>, <?php echo $_SESSION['fusion'] ?>]
    ]);

  var options = {
    chart: {
      title: 'Histogramme des différents',
      subtitle: 'en terme de coûts',
      width: 900,
      height: 800,
    }
  };

  var chart = new google.charts.Bar(document.getElementById('graph'));

  chart.draw(data, options);
}
</script>
<div id="graph" width="500" height="700">
</div>

<div>
    <p>
      Les résultats : 
      <ul>
        <li>
          Tri à insertion : <?php echo $_SESSION['insertion'] ?>
        </li>
        <li>
          Tri à sélection : <?php echo $_SESSION['selection'] ?>
        </li>
        <li>
          Tri à bulle : <?php echo $_SESSION['bulle'] ?>
        </li>
        <li>
          Tri à peigne : <?php echo $_SESSION['peigne'] ?>
        </li>
        <li>
          Tri de Shell : <?php echo $_SESSION['shell'] ?>
        </li>
        <li>
          Tri fusion : <?php echo $_SESSION['fusion'] ?>
        </li>
      </ul>
    </p>

</div>