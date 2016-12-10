<?php

include 'Conexion.php';
// tomo los valores y los almaceno en una vairalbe
session_start();
$login = trim($_POST['login']);
$Password = trim($_POST['Password']);

$Consulta1 = mysqli_query($con, "SELECT rol,login,nombre FROM usuario WHERE  clave='$Password'  and login='$login'") or die(mysql_error());
$result_usuario = array();
$result_usuario = mysqli_fetch_row($Consulta1);
//echo $sesion1[0]." ".$sesion1[1];
$datos = array('rol' =>$result_usuario[0] ,
'login' => $result_usuario[1],
'nombre' => $result_usuario[2]);
echo json_encode($datos);

$_SESSION['login'] = $result_usuario[1];
  $base_url = 'http://localhost/post_ajax/';
/*
      switch ($result_usuario[0]) {

    case 'Administrador':
        // code...
         header('Location: '.$base_url.$result_usuario[0].'.php');
        break;
    case 'Editor':
        // code...
        header('Location: '.$base_url.$result_usuario[0].'.html');
        break;
    case 'Usuario':
        header('Location: '.$base_url.$result_usuario[0].'.php');
        // code...
        break;
    default:
        // code...
    header('Location: '.$base_url.'Inicio.html');
        break;
            }
*/
    mysqli_close($con);
