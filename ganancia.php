<?php 
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
include("conexion.php");//Contiene los datos de conexion a la base de datos
$ganancia=intval($_REQUEST['ganancia']);
$txt_mes=array( "1"=>"Dinero","2"=>"Fecha"
			 );//Arreglo que contiene las abreviaturas de los meses del año

	

$categorias []= array('Mes',"Ingresos $ganancia");//Nombre de la primer fila del grafico

	for ($inicio = 1; $inicio <= 2; $inicio++) {
    $text=$txt_mes[$inicio];//Obtengo la abreviatura del mes
	$ingresos=monto2('ingresos',$inicio,$ganancia);//Obtengo el  monto de los ingresos
	$egresos=monto2('egresos',$inicio,$ganancia);//Obtengo el monto de los egresos
	$categorias []= array($text,$ingresos);//Agrego elementos al arreglo
	
	
}

echo json_encode( ($categorias) );//Convierto el arreglo a formato json
}


?>