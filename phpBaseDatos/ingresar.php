<?php
include'Conexion.php';
// tomo los valores y los almaceno en una vairalbe

$email=trim($_POST['email']);
$Password=trim($_POST['Password']);


$r="o";
$cmpr="Administrador";

$Consulta1=mysqli_query($con,"SELECT rol FROM usuario WHERE  clave='$Password'  and email='$email'")or die(mysql_error());
while($datosConsulta=mysqli_fetch_array($Consulta1)){		
		$r=$datosConsulta['rol'];
		}
echo $r;		
switch ($r) {
	case 'Administrador':
		# code...
	header('Location: http://localhost/post/Pp.php');
		break;
	case 'Editor':
		# code...
	header('Location: http://localhost/post/Post1.html');
		break;
	case 'Usuario':
	header('Location: http://localhost/post/leer.php');
		# code...
		break;
	
	default:
		# code...
	//echo '<script language="javascript">alert("invalido");</script>'; 
	header('Location: http://localhost/post/Inicio.html');

		break;
}
/*
if ($r == $cmpr  ){
header('Location: http://localhost/post/Pp.php');

}else{
header('Location: http://localhost/post/Post1.html');

	}
//echo '<script language="javascript">alert("invalido");</script>'; 
*/
	mysqli_close($con);	
?>
