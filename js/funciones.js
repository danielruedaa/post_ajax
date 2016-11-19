function msgb() {
    var b = confirm("Deseas borrar este registro?");
    if (b == true) {
        document.location.href = "phpBaseDatos/borrar.php?id=<?php  echo $value['id']?>";
        alert(" registro Borrado  ");
    } else {
        // document.location.href="Pp.php";
    }
}

function msge() {
    var e = confirm("Deseas editar este registro?");
    if (e == true) {
        //document.location.href="phpBaseDatos/editar.php?id=<?php // echo $value['id']?>";
        document.location.href = "Ppeditar.php?id=<?php  echo $value['id']?>";

    } else {
        //document.location.href="Pp.php";
    }
}
//ejemplo jesus conde selector css

$(document).ready(function() {
    $('#obras-seleccionadas > li').addClass('horizontal');
    $('#obras-seleccionadas li:not(.horizontal)').addClass('sub-level');


});
$(document).ready(function() {
    $('a[@href^="mailto:"]').addClass('mailto');
    $('a[@href$=".pdf"]').addClass('pdflink');


});
//poner colores en las lineas de una tabla
$(document).ready(function() {
    $('tr:odd').addClass('odd');
    $('tr:odd').addClass('even');
    $('td:contains ("camila")').addClass('destacado');
});
