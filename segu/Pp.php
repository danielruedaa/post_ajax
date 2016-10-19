<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="estiloCss/hojaEstilo.css"/>
<title>Banco</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" id="general">

<h1>Bienvenido al sistema </h1> 
</div>


<?php
include ('codPaginarZ.php');
?>

<table class="table">

<?php if(!empty($rows)): ?>

<?php foreach ($rows as $key => $value) : ?>
  <tr>
    <td><?php echo $value['id'] ?></td>
    <td><?php echo $value['name'] ?></td>
    <td><?php echo $value['login'] ?></td>
    <td><?php echo $value['rol'] ?></td>
    <td><?php echo $value['email'] ?></td>
   <td>
<!--<a href="phpBaseDatos/editar.php?id=<?php echo $value['id'] ?>"onclick="msge()">editar</a>-->
<!--<a href="phpBaseDatos/borrar.php?id=<?php echo $value['id'] ?>"onclick="msgb()">borrar</a>--> 
<input type="button" value="borrar" onclick="msgb()" />
<input type="button" value="editar" onclick="msge()" />
    </td>

  </tr>

<script language="javascript">
function msgb(){

var b=confirm("Deseas borrar este registro?");
if (b == true) {
   document.location.href="phpBaseDatos/borrar.php?id=<?php echo $value['id'] ?>";
   alert(" ok");
} else {
   document.location.href="Pp.php";
   alert(" no");
}
}
function msge(){
var e=confirm("Deseas editar este registro?");
if (e == true) {
    document.location.href="Ppeditar.php?id=<?php echo $value['id'] ?>";
     alert(" ok"); 
} else {
 document.location.href="Pp.php"; 
   alert(" no"); 

}
}


</script>


<?php endforeach; ?>


<!--   -->

<?php else : ?>

<?php endif; ?>	

</tr>
</table>
</div>

<article id="p1"><a href = "Index0.html">Inicio</article>
</body>




</html>
