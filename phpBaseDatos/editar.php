
<?php
include'Conexion.php';

// tomo los valores y los almaceno en una vairalbe

$id=$_GET['id'];
$prueba="salz";
//echo "id  ".$id."<br>";
$rows = array();
//$login
$consulta=mysqli_query($con,"SELECT id,nombre,login,telefono,rol,email,clave FROM usuario WHERE id='$id'")or die(mysql_error());

while($row = mysqli_fetch_array($consulta)){	
   $rows[] = array(
   	   'id' 		=> $row['id'],
   	   'name' 		=> $row['nombre'],
   	   'login' 		=> $row['login'],
   	   'telefono' 	=> $row['telefono'],
   	   'rol' 		=> $row['rol'],
   	   'email' 		=> $row['email'],
   	   'clave' 		=> $row['clave'],
   	);		
}
	mysqli_close($con);	
	//header('Location: http://localhost/post/Ppeditar.php');

/*echo "<pre>";
print_r($rows);
echo "</pre>";
*/	
?>
