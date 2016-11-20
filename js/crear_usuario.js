
$(document).ready(function() {
  $('#crear-c').click(function(evento) {
    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
      console.log($('#formulario-crear').serialize());
    $.ajax({
      url: 'phpBaseDatos/reg.php',//direccion
      data: $('#formulario-crear').serialize(),//cargo los datos que voy a enviar
      type: 'POST',// medio de envio
      dataType: 'json',//como llega la respuseta
      beforeSend:function() {
        $('#crear-c').val("conectando......");
      },
      error:function (a,b,c) {
       console.log(a);
       console.log(b);
       console.log(c);
     },
      success:function(datos) {// si funciono
        $('#resultados').html(datos);
        //$('#respuesta').html(datos.envio);
      }
    });
  });
});
