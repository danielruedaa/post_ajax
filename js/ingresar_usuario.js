$(document).ready(function() {
  $('#ingresar').click(function(evento) {

    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
    console.log($('#formulario-login').serialize());
    $.ajax({
      url: 'phpBaseDatos/ingresar.php',//direccion
      data: $('#formulario-login').serialize(),
      type: 'POST',// medio de envio
      //dataType: 'json',//como llega la respuseta
      beforeSend:function() {
        $('#ingresar').val("conectando...");
      },
      error:function (a,b,c) {
       console.log(a);
       console.log(b);
       console.log(c);
     }
     /*
      success:function(datos) {// si funciono
        $('#resultados').html(datos[0].rol);
        //$('#respuesta').html(datos.envio);
      }*/
    });
  });
});
