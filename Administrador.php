<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<link rel="stylesheet" type="text/css" href="estiloCss/hojaEstilo.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/funciones.js" ></script>
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

<table  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<div class="text-center">

<thead >
  <tr>
     <th class="active"><label> </label></th>
      <th class="active"><label> Nombre</label></th>
      <th class="succes"><label> Login</label></th>
      <th class="warning"><label> Rol</label></th>
      <th class="info" ><label> Correo</label></th>
      <th class="danger"><label> Opciones</label></th>
  </tr>
  <tfoot>
    <tr>
          <th class="active"><label></label></th>
        <th class="active"><label> Nombre</label></th>
        <th class="succes"><label> Login</label></th>
        <th class="warning"><label> Rol</label></th>
        <th class="info" ><label> Correo</label></th>
        <th class="danger"><label> Opciones</label></th>
    </tr>
  </tfoot>
</thead>
<?php if (!empty($rows)): ?>

<?php

if ($control == true) {
    foreach ($rows as $key => $value) : ?>

<tbody>
  <tr>
    <td id="_id"><?php  $value['id'] ?></td>
    <td><?php echo $value['name'] ?></td>
    <td><?php echo $value['login'] ?></td>
    <td><?php echo $value['rol'] ?></td>
    <td><?php echo $value['email'] ?></td>
   <td><input type="button" id="editar"value="editar" class="btn btn-info"/>
   <input type="button" id="delete"value="borrar" class="btn btn-danger"/></td>
  </tr>
  </tbody>
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

<div class="container">
  <div class="row">
  <div class="dropdown">
      <div class="col-md-12">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" aria-extended="true">
      Opciones
          <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
        <li class="dropdown-header"> Opciones</li>
        <li class="divider"> </li>
        <li><a href = "Inicio.html">Inicio</a></li>
        <li><a href = "post1.html">Crear post</a></li>
        <li><a href = "leer.php">Ver el post</a></li>
              <li class="divider"> </li>
              <li><a href = "salir.php">Salir</article></a></li>
    </ul>
  </div>
</div>
</div>





</div>
</body>
</html>
