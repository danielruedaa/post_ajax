$(document).ready(function() {
//  $('#respuesta').hide();
  $('#formulario').submit(function(evento) {
//    $('#respuesta').hide();
    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
    var datos_formulario = $(this).serialize();//creo un array con los datos
    console.log(datos_formulario);
    $.ajax({
      url: 'phpBaseDatos/ingresar.php',//direccion
      data: datos_formulario,//cargo los datos que voy a enviar
      type: 'POST',// medio de envio
      dataType: 'json',//como llega la respuseta
      beforeSend:function() {
        $('#login').val("conectando......");
      },
      error:function (a,b,c) {
       console.log(a);
       console.log(b);
       console.log(c);
     },
      success:function(datos) {// si funciono
        $('#resultados').html(datos);
        $('#respuesta').html(datos.envio);
      }
    });
  });
});
