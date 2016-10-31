<?php

session_start();
if (isset($_SESSION['login'])) {
    echo 'Gracias por usar la Aplicacion '.$_SESSION['login'];
} else {
    echo 'no existe ningun usuario';
}
unset($_SESSION['login']); // borramos las variables

session_destroy(); // destruimos las secion

?>
<li><a href = "Inicio.html">inicio</article></a></li>
