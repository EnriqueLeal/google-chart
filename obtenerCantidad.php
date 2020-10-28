<?php 
include 'conexion.php';

	$cantidad = $_POST['monto'];
	    $con=@mysqli_connect('localhost', 'root', 'enriquepro123', 'test_chart');
 if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$query=mysqli_query($con,"select sum(monto) as monto from egresos");
	while($row=mysqli_fetch_array($query))
		{
 		echo  "<option value='$row[0]>'>$row[0]</option>";
		}
		
                  
 //  while ($row=mysql_fetch_row($consulta)){  
		
 //           echo  "<option value='$row[0]>'>$row[1]</option>";
		
 //      } 
 mysqli_connect_errno($conexion);
 
 	echo $cantidad;
 	exit;
 ?>