<?php 
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
include("conexion.php");//Contiene los datos de conexion a la base de datos
$periodo=intval($_REQUEST['periodo']);
$ganancia=intval($_REQUEST['ganancia']);
$txt_mes=array( "1"=>"Ene","2"=>"Feb","3"=>"Mar","4"=>"Abr","5"=>"May","6"=>"Jun",
				"7"=>"Jul",	"8"=>"Ago","9"=>"Sep","10"=>"Oct","11"=>"Nov",	"12"=>"Dic"
			 );//Arreglo que contiene las abreviaturas de los meses del año

	

$categorias []= array('Mes',"Ingresos $periodo", "Egresos $periodo ");//Nombre de la primer fila del grafico

	for ($inicio = 1; $inicio <= 12; $inicio++) {
    $mes=$txt_mes[$inicio];//Obtengo la abreviatura del mes
	$ingresos=monto('ingresos',$inicio,$periodo);//Obtengo el  monto de los ingresos
	$egresos=monto2('egresos',$inicio,$periodo);//Obtengo el monto de los egresos
	
	$categorias []= array($mes,$ingresos,$egresos);//Agrego elementos al arreglo
	
	
}

echo json_encode( ($categorias) );//Convierto el arreglo a formato json
}


?>