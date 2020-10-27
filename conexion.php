<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', 'enriquepro123', 'test_chart');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	
	function monto($table,$mes,$periodo){
		global $con;
		$fecha_inicial="$periodo-$mes-1";
		if ($mes==1 or $mes==3 or $mes==5 or $mes==7 or $mes==8 or $mes==10 or $mes==12){
			$dia_fin=31;
		} else if ($mes==2){
			if ($periodo%4==0){
				$dia_fin=29;	
			} else {
				$dia_fin=28;
			}
		} else {
			$dia_fin=30;
		}
		$fecha_final="$periodo-$mes-$dia_fin";
		
		$query=mysqli_query($con,"select sum(monto) as monto from $table where fecha between '$fecha_inicial' and '$fecha_final'");
		$row=mysqli_fetch_array($query);
		$monto=floatval($row['monto']);
		return $monto;
	}
	function monto2($table,$text,$ganancia){
		global $con;
		$fecha_inicial="$periodo-$mes-1";
		if ($text = 'Dinero'){
		} 
		
		$fecha_final="$periodo-$mes-$dia_fin";
		
		$query=mysqli_query($con,"select SUM(monto) as monto from $table where fecha = '%$ganancia%' ");
		$row=mysqli_fetch_array($query);
		$monto2=floatval($row['monto']);
		return $monto2;
	}
?>
