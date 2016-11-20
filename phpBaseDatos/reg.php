<?php
include'Conexion.php';

// tomo los valores y los almaceno en una vairalbe

$Nombre = trim($_POST['Nombre']);
$Telefono=trim($_POST['Telefono']);
$email=trim($_POST['email']);
$rol=trim($_POST['Rol']);
$Password=trim($_POST['Password']);
$rPass=trim($_POST['rPassword']);
$login=trim($_POST['login']);

//tomar los valores enviados del formulario
//tomamos los valores y los visualisamos


//confirmamos la contraseña sino da nos regresa a poner la contraseña
if ($Password != $rPass){die ('la clave es incorrecta <br><br> <a href = "http://localhost/post/Crear.html"> Volver</a>');}
$sql="INSERT INTO usuario (nombre,login,telefono,rol,clave,email)VALUES ('$Nombre','$login','$Telefono','$rol','$Password','$email')";
if(mysqli_query($con,$sql)){

echo '<script language="javascript">alert("Ingreso el usuario");</script>';
//header('Location: http://localhost/post/Crear.html');
}else{
echo '<script language="javascript">alert("No ingreso el usuario");</script>';
	}
	mysqli_close($con);

switch ($rol) {
	case 'Administrador':
		# code...
	header('Location: http://localhost/post/Administrador.php');
		break;
	case 'Editor':
		# code...
	header('Location: http://localhost/post/Editor.html');
		break;
	case 'Usuario':
	header('Location: http://localhost/post/Usuario.php');
		# code...
		break;

	default:
		# code...
	//echo '<script language="javascript">alert("invalido");</script>';
	header('Location: http://localhost/post/Inicio.html');

		break;
}






/*
echo "nombre ingresado es " .$Nombre . "<br>";
echo "Telefono  ".$Telefono. 		"<br>";
echo "Rol  ".$rol. 		"<br>";
echo "Clave ".$Password     ."<br>";
echo "consulta ". $sql;			*/
?>
