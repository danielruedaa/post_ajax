<?php
include'Conexion.php';

// tomo los valores y los almaceno en una vairalbe

$id=$_GET['id'];
//$prueba="10";
echo "id  ".$id."<br>";
if(mysqli_query($con,"DELETE  FROM comentarios WHERE id='$id'")){
	echo '<script language="javascript">alert("Borro La Cuenta");</script>'; 
	header('Location: http://localhost/post/leer.php');			
}else{
	echo '<script language="javascript">alert("No borro la cuenta");</script>'; 
	}
	mysqli_close($con);	
	//header('Location: http://localhost/banco/Inicio.html');	
?>
