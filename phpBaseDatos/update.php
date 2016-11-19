<?php
include'Conexion.php';

// tomo los valores y los almaceno en una vairalbe
$id=$_POST['id'];//no lo uso ´para actualizar
$nombre =$_POST['Nombre'];
$login=$_POST['login'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$rol=$_POST['rol'];
$Password=$_POST['Password'];
$rPass=$_POST['rPassword'];

//tomar los valores enviados del formulario
//tomamos los valores y los visualisamos

echo "id " .$id  . "<br>";
echo "nombre ingresado es " .$nombre  . "<br>";
echo "login".$login."<br>";
echo "telefono ".$telefono ."<br>";
echo "email ".$email ."<br>";
echo "rol ".$rol ."<br>";
echo "Clave ".$Password     ."<br>";
echo "nueva clave ".$rPass."<br>";

//"UPDATE cliente SET(NombreApellido,Cuenta,Telefono,Direccion,Clave) VALUES('$id','$NombreApellidos','$Cuenta','$NoCuenta','$Telefono','$Direccion','$Password')")){

if ($Password != $rPass){die ('la clave es incorrecta <br><br> <a href = "Pp.php.html"> Volver</a>');}
if(mysqli_query($con,"UPDATE usuario SET nombre='$nombre', login='$login', telefono='$telefono', rol='$rol',clave='$rPass',email='$email'  WHERE id='$id'"  )){

echo '<script language="javascript">alert("Actualizo");</script>'; 
header('Location: http://localhost/post/Pp.php');
}else{
echo '<script language="javascript">alert("No Actualizo");</script>'; 
	}
	mysqli_close($con);	
	//header('Location: http://localhost/banco/Pp.php');
			
?>
