<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="estiloCss/hojaEstilo.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="estiloCss/bootstrap-responsive.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="estiloCss/bootstrap-bootstrap.css"/>
<style type="text/css">
/*escritorio*/
  @media(min-width: 1200px){body{color:green;}}
  /*table escritorio pequeño*/
  @media(min-width: 768px)and(max-width: 979px){body{color:green;}}
  /*tablet o smartphone*/
  @media(max-width: 767px){body{color:blue;}}
  /*smartphone*/
  @media(max-width: 480px){body{color:yellow;}}


</style>
<title>Banco</title>
</head>
<body>
	<div class="container" >

<div class="text-center">
<h1>Bienvenido al sistema </h1> 
</div>
</div>
<?php

include ('phpBaseDatos/editarcom.php');
?>




<!-- -->
<?php if(!empty($rows)): ?>
<?php foreach ($rows as $key => $value) : ?>
<FORM name="usuario" action = "phpBaseDatos/updateComen.php" method = "POST"> <!--  poner un campo para ingresar datos -->
    <div class="container" >
 <div class="text-center"> 
<h2 class="text-center" >Editar</h2>

<table id="prueba" class="table">
<tr>
<td class="text-left">id : </td>
<td class="text-left">    
<input type="text" name= "id" value= "<?php echo $value['id'] ?>" placeholder="5" readonly="readonly"> </td><!--   -->
</tr>
<tr>
<td class="text-left">nombre : </td>
<td class="text-left">    
<input type="text" name= "Nombre" value= "<?php echo $value['name'] ?>" placeholder="Daniel Rueda" required="required">           </td><!--   -->
</tr>
<td class="text-left">post : </td>
<td class="text-left">    
<input type="text" name= "pos" value= "<?php echo $value['pos'] ?>" placeholder="shofry" required="required">              </td><!--   -->
</tr>
<tr>
<td class="text-left">fecha: </td>
<td class="text-left"><input type="text" name= "fecha" value= "<?php echo $value['fecha'] ?>" placeholder="3193789277" required="required"> </td>  <!--   -->
</tr>
<td class="text-left">hora: </td>
<td class="text-left"><input type="text" name= "hora" value= "<?php echo $value['hora'] ?>" placeholder="carlos@hotmail.com" required="required"> </td>  <!--   -->
</tr>
<td class="text-left"> <a href = "Inicio.html">inicio</a>     </td>  <!-- poner un boton de enviar   -->
<td class="text-left">  <input type="submit" value="Editar" onclick="msge()">  <td>


<?php endforeach; ?>
<?php else : ?>
<?php endif; ?>             
</td>
</tr>
</div>
</div>

</table>

</form>
<script language="javascript">

function msgb(){

var b=confirm("Deseas borrar este registro?");

function msge(){
var e=confirm("Deseas editar este registro?");
if (e == true) {     
} else {
 document.location.href="Pp.php"; 
   

}
}


</script>






</body>




</html>
