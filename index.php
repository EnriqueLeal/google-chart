<html>
<?php include 'conexion.php';
 ?>
  <head>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Generar reportes con Google Charts, PHP, jQuery y MySQL</title>
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

// var $texto =intval(['cbo_cantidad']);
    $resultado = $_POST["monto"];

    var texto=$("cbo_cantidad").val();

	function errorHandler(errorMessage) {
            //curisosity, check out the error in the console
            console.log(errorMessage);
            //simply remove the error, the user never see it
            google.visualization.errors.removeError(errorMessage.id);
        }
		
      function drawVisualization() {
        // Some raw data (not necessarily accurate)
		var periodo=$("#periodo").val();
    var jsonData= $.ajax({
                        url: 'periodo.php',
            data: {'periodo':periodo,'action':'ajax'},
                        dataType: 'json',
                        async: false
                    }).responseText;
    var ganancia=$("#ganancia").val();
		var jsonData= $.ajax({
                        url: 'ganancia.php',
						data: {'ganancia':ganancia,'action':'ajax'},
                        dataType: 'json',
                        async: false
                    }).responseText;
   
		var obj = jQuery.parseJSON(jsonData);
		var data = google.visualization.arrayToDataTable(obj);
		
		

    var options = {
      title : 'REPORTE DE INGRESOS VS EGRESOS '+ periodo,
      hAxis: {title: 'Meses'+ ' ' + periodo },
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };
	
    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
	google.visualization.events.addListener(chart, 'error', errorHandler);
    chart.draw(data, options);
  }
  
  // Haciendo los graficos responsivos
      jQuery(document).ready(function(){
        jQuery(window).resize(function(){
         drawVisualization();
        });
      });
	  
    </script>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);


  function errorHandler(errorMessage) {
            //curisosity, check out the error in the console
            console.log(errorMessage);
            //simply remove the error, the user never see it
            google.visualization.errors.removeError(errorMessage.id);
        }
    
      function drawVisualization2() {
        // Some raw data (not necessarily accurate)
    var ganancia=$("#ganancia").val();
  //Datos que enviaremos para generar una consulta en la base de datos
    var jsonData= $.ajax({
                        url: 'ganancia.php',
            data: {'ganancia':ganancia,'action':'ajax'},
                        dataType: 'json',
                        async: false
                    }).responseText;
    var periodo=$("#periodo").val();
    var jsonData= $.ajax({
                        url: 'periodo.php',
            data: {'periodo':periodo,'action':'ajax'},
                        dataType: 'json',
                        async: false
                    }).responseText;
   
    var obj = jQuery.parseJSON(jsonData);
    var data = google.visualization.arrayToDataTable(obj);
    
    

    var options = {
      title : 'REPORTE DE INGRESOS VS EGRESOS'+" "+"Periodo"+" "+ $resultado,
      hAxis: {title: 'Cantidad'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };
  
    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  google.visualization.events.addListener(chart, 'error', errorHandler);
    chart.draw(data, options);
  }
  
  // Haciendo los graficos responsivos
      jQuery(document).ready(function(){
        jQuery(window).resize(function(){
         drawVisualization();
        });
      });
    
    </script>


  </head>
  <body>



    <div class="container" style="margin-top:10px">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
	  <div class='row'>	
		<div class='col-md-4'>
			<label>Selecciona período</label>

<!--       <input onchange="drawVisualization();" type="text" name="periodo" id="periodo">
 -->			<select id="periodo" onchange="drawVisualization();"class="form-control">
				<option value='2019'>Período 2019</option>
				<option value='2016' selected>Período 2016</option>
				<option value='2015' >Período 2015</option>
			</select>
		</div>	
    <div class='col-md-4'>
      <label>Selecciona período mejor ganancia</label>
<!--             <input onchange="drawVisualization2();" type="date" name="ganancia" id="ganancia">
 --> 
      <select id="ganancia" type="date"onchange="drawVisualization2();" class="form-control">
        <option value='2019'>Período 2019</option>
        <option value='2016' selected>Período 2016</option>
        <option value='2015' >Período 2015</option>
      </select>
    </div> 
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                       <div class="form-group">
                                                    <label for="cantidad">Cantidad:</label>
                                         <a href="#" onclick="CargarCantidad();">Cargar Cantidad</a></li>
                                                    <select class="form-control select2" style="width: 100%;" id="cbo_cantidad" name="cbo_cantidad">
                                                         
                                              
                                                    </select>
                                                         

                                                  </div> 
                                            </div>

<hr>
    <!--  <di<v class='col-md-4'>
      <button class="success" value="ganancia">INFO</button>
    </div> -->

        <hr>
        <div id="chart_div" style="width: 100%; height: 450px;"></div>
      </div>

    <!-- /container -->
	
    
  </body>

  <script>
    function CargarCantidad()
    {
      $.ajax({
        type: 'POST',
        url: 'obtenerCantidad.php',
        data: {},
          success: function(response) {
            document.getElementById("cbo_cantidad").innerHTML=response;
          }
      });
    }
  </script>

</html>