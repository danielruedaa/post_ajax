<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--<link rel="stylesheet" type="text/css" href="estiloCss/hojaEstilo.css"/>-->
<script src="js/funciones.js" ></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="estiloCss/bootstrap-responsive.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="estiloCss/bootstrap-bootstrap.css"/>
<style type="text/css">
/*escritorio*/
  @media(min-width: 1200px){body{color:gray;}}
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

<div class="text-center">
<h1>Bienvenido al sistema </h1>
</div>


<?php
include 'codPaginarZ.php';
include 'ingresar.php';
session_start();
/*
    var_dump($rows);
    echo '<pre>';
    echo 'usuarios'.' <br>';
    print_r($rows);

    echo '</pre>';
*/
?>

<div class="container">
  <?php
    $control = false;
    if (isset($_SESSION['login'])) {
        echo 'Esta registrado como '.$_SESSION['login'];
        $control = true;
    } else {
        echo '... ';
    }
   ?>
  <div class="table-responsive">
<table class="table">
<div class="text-center">

<tr >
  <td class="active"><label> Nombre</label></td>
  <td class="succes"><label> Login</label></td>
  <td class="warning"><label> Rol</label></td>
  <td class="info" ><label> Correo</label></td>
  <td class="danger"><label> Opciones</label></td>
</tr>
<?php if (!empty($rows)): ?>

<?php

if ($control == true) {
    foreach ($rows as $key => $value) : ?>
  <tr>
    <td><?php echo $value['name'] ?></td>
    <td><?php echo $value['login'] ?></td>
    <td><?php echo $value['rol'] ?></td>
    <td><?php echo $value['email'] ?></td>
   <td>

<input   type="button" value="editar" onclick="msge()" />
<input   type="button" value="borrar" onclick="msgb()" />
    </td>
  </tr>
<!--
<script language="javascript">
// funcion para ocultar
function msgb(){
var b=confirm("Deseas borrar este registro?");
if (b == true) {
   document.location.href="phpBaseDatos/borrar.php?id=<?php // echo $value['id']?>";
   alert(" registro Borrado  ");
} else {
  // document.location.href="Pp.php";
    }
}
function msge(){
var e=confirm("Deseas editar este registro?");
if (e == true) {
    //document.location.href="phpBaseDatos/editar.php?id=<?php // echo $value['id']?>";
    document.location.href="Ppeditar.php?id=<?php // echo $value['id']?>";

} else {
 //document.location.href="Pp.php";
  }
}
</script>
-->

<?php
 endforeach;
} else {
    echo 'no existe ningun usuario inicie sesion';
}
  ?>
<?php else : ?>
<?php endif; ?>

</tr>
</table>
</div>
<!-- http://localhost/prueba/post/Inicio.html
id="obras-seleccionadas"
-->
<ul  class="obras-seleccionadas">
  <li><a href = "Inicio.html">Inicio</a></li>
  <li><a href = "post1.html">Crear post</a></li>
  <li><a href = "leer.php">Ver el post</a></li>
  <li><a href = "salir.php">Salir</article></a></li>

</ul>
</div>
</div>

</body>




</html>
