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
<div class="starter-templeta">
	<div class="container" >
<div class="text-center"> 
<h1>Bienvenido al sistema </h1> 

</div>
<?php

include ('phpBaseDatos/editar.php');
?>


<!-- -->
<?php if(!empty($rows)): ?>
<?php foreach ($rows as $key => $value) : ?>
<FORM name="usuario" action = "phpBaseDatos/update.php" method = "POST"> <!--  poner un campo para ingresar datos -->
    
   
<h2 class="text-center" >Editar</h2>
<div class="container" >
<div class="text-center"> 
<table id="prueba"  class="table">
<tr>
<td class="text-left" >id : </td>
<td class="text-left" >    
<input type="text" name= "id" value= "<?php echo $value['id'] ?>" placeholder="5" readonly="readonly"> </td><!--   -->
</tr>
<tr>
<td class="text-left" >nombre completo : </td>
<td class="text-left" >   
<input type="text" name= "Nombre" value= "<?php echo $value['name'] ?>" placeholder="Daniel Rueda" required="required">           </td><!--   -->
</tr>
<td class="text-left" >login : </td>
<td class="text-left" >
<input type="text" name= "login" value= "<?php echo $value['login'] ?>" placeholder="shofry" required="required">              </td><!--   -->
</tr>
<tr>
<td class="text-left" >telefono: </td>
<td class="text-left" ><input type="text" name= "telefono" value= "<?php echo $value['telefono'] ?>" placeholder="3193789277" required="required"> </td>  <!--   -->
</tr>
<td class="text-left" >email: </td>
<td class="text-left" ><input type="text" name= "email" value= "<?php echo $value['email'] ?>" placeholder="carlos@hotmail.com" required="required"> </td>  <!--   -->
</tr>
<td class="text-left" >cambiar rol: </td>
<td class="text-left" ><select name="rol" >
<option> <?php echo $value['rol'] ?> </option>
<option>Administrador</option>
<option>Editor</option>
<option>Usuario</option>
</select>
</td> <!-- http://html.hazunaweb.com/120.php  -->
</tr>


<td class="text-left" >clave:</td>
<td class="text-left" ><input type="password" name= "Password"  value= "<?php echo $value['clave'] ?>" placeholder="*********"  >  </td> <!--   -->
</tr>
<tr>
<td class="text-left" >
nueva clave:</td>
<td class="text-left" ><input type="password" name= "rPassword" value= "<?php echo $value['clave'] ?>" placeholder="*********" >    </td> <!--   -->
</tr> 
<tr>
            <td class="text-left" ><a href = "Inicio.html">inicio</a>
             <!-- poner un boton de enviar   -->
</td>
<td class="text-left" > <input type="submit" value="Editar" onclick="msge()"> </td>
<!-- <a href = "http://localhost/post/Pp.html">Regresar</a>-->
<?php endforeach; ?>
<?php else : ?>
<?php endif; ?>             

</table>
</div>
</div>
</FORM>
</body>

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
