<?php
include'Conexion.php';

// tomo los valores y los almaceno en una vairalbe
$id=$_POST['id'];//no lo uso ´para actualizar
$nombre =$_POST['Nombre'];
$pos=$_POST['pos'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];


//tomar los valores enviados del formulario
//tomamos los valores y los visualisamos

echo "id " .$id  . "<br>";
echo "nombre ingresado es " .$nombre  . "<br>";
echo "pos".$pos."<br>";
echo "fecha ".$fecha ."<br>";
echo "hora ".$hora ."<br>";

//"UPDATE cliente SET(NombreApellido,Cuenta,Telefono,Direccion,Clave) VALUES('$id','$NombreApellidos','$Cuenta','$NoCuenta','$Telefono','$Direccion','$Password')")){

if(mysqli_query($con,"UPDATE comentarios SET nombre='$nombre', pos='$pos', fecha='$fecha', hora='$hora' WHERE id='$id'"  )){
echo '<script language="javascript">alert("Actualizo");</script>'; 
header('Location: http://localhost/post/leer.php');
}else{
echo '<script language="javascript">alert("No Actualizo");</script>'; 
	}
	mysqli_close($con);	
	//header('Location: http://localhost/banco/Pp.php');
			
?>
