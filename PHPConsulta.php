<?php
include'Conexion.php';
$id=1;
// hago consulta para guardar los datos
$Consulta1=mysqli_query($con,"SELECT deposito,fecha FROM cu200 WHERE id=id")or die(mysql_error());
while($datosConsulta=mysqli_fetch_array($Consulta1)){
	$ejes[$datosConsulta['fecha']]=array(
										'deposito'=>$datosConsulta['deposito'],	
										'fecha'=>$datosConsulta['fecha']	
																		);}
/*
$Consulta2=mysqli_query($con,"SELECT fecha FROM cu200 WHERE id=id")or die(mysql_error());
while($fecha=mysqli_fetch_array($Consulta2)){
	$ejex[$fecha['fecha']]=array('fecha'=>$fecha['fecha']);
	}
*/
echo "<pre>";
print_r($ejes);
echo "</pre>";

?>

		<?php
include'Conexion.php';//conexion con el servidor
$id=1;
// hago consulta para guardar los datos
$Consulta1=mysqli_query($con,"SELECT fecha FROM cu200 WHERE id=id")or die(mysql_error());
while($datosConsulta=mysqli_fetch_array($Consulta1)){
	$ejex[$datosConsulta['fecha']]=array(	
	'fecha'=>$datosConsulta['fecha']);	
	}//fin consulta para guardar los datos
$Consulta2=mysqli_query($con,"SELECT deposito FROM cu200 WHERE id=id")or die(mysql_error());
while($deposito=mysqli_fetch_array($Consulta2)){
	$ejey[$deposito['deposito']]=array(
	'deposito'=>$deposito['deposito']);
	}	
echo "<pre>";
print_r($ejex);
print_r($ejey);
echo "</pre>";

?>

['1/1/2016',123123],
		['1/5/2016',2322222],
		
		<?php
	for($i=0;$i<=6;$i++){		
?>
['<?php echo $ejex[$i]['fecha'];?>',<?php echo $ejey[$i][deposito]; ?>]

	<?php }?>

/// para ir acomodando la consulta con las key de los objetos json
$Consulta1=mysqli_query($con,"SELECT deposito,id FROM cu200 WHERE id=id")or die(mysql_error());
while($datosConsulta=mysqli_fetch_array($Consulta1)){	
	$datox[$datosConsulta['id']]=array('id'=>$datosConsulta['id']);	
//	$datoy[]=array('deposito'=>$datosConsulta['deposito']);
	$datoy[]=array($datosConsulta['deposito']);
	

	}	


// crear el dato php con un key o lo mas parecido a crear con 1 key