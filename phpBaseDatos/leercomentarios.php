<?php
include'Conexion.php';

// tomo los valores y los almaceno en una vairalbe


$nombre=trim($_POST['nombre']);
$post=trim($_POST['editor1']);
echo $post." ".$nombre;
$fecha= date("d/m/y ");//pongo la fecha
$hora= date('g:ia');//la hora
echo $fecha." ".$hora;

//tomar los valores enviados del formulario
//tomamos los valores y los visualisamos


//confirmamos la contraseña sino da nos regresa a poner la contraseña

$sql="INSERT INTO comentarios (nombre,pos,fecha,hora)VALUES ('$nombre','$post','$fecha','$hora')";
if(mysqli_query($con,$sql)){

echo '<script language="javascript">alert("Ingreso el post");</script>'; 
//header('Location: http://localhost/post/Crear.html');			
}else{
echo '<script language="javascript">alert("No ingreso el post");</script>'; 
	}
	mysqli_close($con);	
	
/*
echo "nombre ingresado es " .$Nombre . "<br>";
echo "Telefono  ".$Telefono. 		"<br>";
echo "Rol  ".$rol. 		"<br>";
echo "Clave ".$Password     ."<br>";	
echo "consulta ". $sql;			*/
?>
