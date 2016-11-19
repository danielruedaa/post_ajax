<?php

include 'Conexion.php';
// tomo los valores y los almaceno en una vairalbe
$email = trim($_POST['email']);
$Password = trim($_POST['Password']);

$Consulta1 = mysqli_query($con, "SELECT rol,login FROM usuario WHERE  clave='$Password'  and email='$email'") or die(mysql_error());
//$sesion1 = array();
$sesion1 = mysqli_fetch_row($Consulta1);
echo $sesion1[0].'<br>';
echo $sesion1[1];

  $base_url = 'http://localhost/prueba/post/';

    switch ($sesion1[0]) {

    case 'Administrador':
        // code...
         session_start();
         $_SESSION['login'] = $sesion1[1];
         header('Location: '.$base_url.$sesion1[0].'.php');
        break;
    case 'Editor':
        // code...1
        session_start();
        $_SESSION['login'] = $sesion1[1];
        header('Location: '.$base_url.$sesion1[0].'.php');
        break;
    case 'Usuario':
        session_start();
        $_SESSION['login'] = $sesion1[1];
        
        header('Location: '.$base_url.$sesion1[0].'.php');
        // code...
        break;

    default:
        // code...
    header('Location: '.$base_url.'Inicio.html');

        break;
            }
/*
echo '<pre>';
print_r($sesion1);
echo '</pre>';
*/
    mysqli_close($con);
