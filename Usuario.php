<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--<link rel="stylesheet" type="text/css" href="estiloCss/hojaEstilo.css"/>-->
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

<h1>Bienvenido al sistema </h1> 
</div>


<?php
include ('leerbd.php');

?>
 <div class="container" id="general">
<table class="table">

<?php if(!empty($rows)): ?>

<?php foreach ($rows as $key => $value) : ?>
  <tr>
    
    <td><?php echo $value['name'] ?></td>
    <td><?php echo $value['pos'] ?></td>
    <td><?php echo $value['fecha'] ?></td>
    <td><?php echo $value['hora'] ?></td>

   <td>
<!--<a href="phpBaseDatos/editar.php?id=<?php echo $value['id'] ?>"onclick="msge()">editar</a>-->
<!--<input id="ocultob"  type="button" value="borrar" onclick="msgb()" />--> 
<!-- hago el control para hacer visible los botones--> 

<input   type="button" value="editar" onclick="msge()" />
<input   type="button" value="borrar" onclick="msgb()" />
<!--
<div id="ocultob" style='display:none';> 
<input   type="button" value="borrar" onclick="msgb()" />
</div>
<div id="ocultoe" style='display:none';>
<input type="button" value="editar" onclick="msge()" />
</div> -->
    </td>

<script language="javascript">
// funcion para ocultar

function msgb(){
var b=confirm("Deseas borrar este registro?");
if (b == true) {
  document.location.href="phpBaseDatos/borrarCom.php?id=<?php echo $value['id'] ?>";
} else {
  // document.location.href="Pp.php";   
    }
}
function msge(){
var e=confirm("Deseas editar este registro?");
if (e == true) {
  document.location.href="Ppeditarcom.php?id=<?php echo $value['id'] ?>";
     
} else {
 //document.location.href="Pp.php"; 
  }
}
</script>


<?php endforeach; ?>
<tr>
<ul>
<li><a href = "Inicio.html">inicio</article></a></li>
<li><a href = "post1.html">agregar post</a></li>
</ul>
</tr>

  


<!--   -->

<?php else : ?>

<?php endif; ?> 

</tr>

</div>
</div>


</table>
</div>

</body>




</html>