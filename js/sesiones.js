$(document).ready(function() {
//  $('#respuesta').hide();
  $('#login').click(function(evento) {
    //  var nombre_r=document.getElementById('nombre').value;
    //  var login_r=document.getElementById('login').value;
    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
    var datos_formulario = $(this).serialize();//creo un array con los datos
    console.log(datos_formulario);
    console.log('entro');
    $.ajax({
      url: 'phpBaseDatos/ingresar.php',//direccion
      data: datos_formulario,//cargo los datos que voy a enviar
      type: 'POST',// medio de envio
      //cache:"false",
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
        //$('#respuesta').html(datos.envio);
      }
    });
  });
});

$(document).ready(function() {
//  $('#respuesta').hide();
  $('#formulario').click(function(evento) {
//    $('#respuesta').hide();
    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
    var datos_formulario = $(this).serialize();//creo un array con los datos
    console.log(datos_formulario);
    $.ajax({
      url: 'phpBaseDatos/reg.php',//direccion
      data: datos_formulario,//cargo los datos que voy a enviar
      type: 'POST',// medio de envio
      cache:"false",
      //dataType: 'json',//como llega la respuseta
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
        //$('#respuesta').html(datos.envio);
      }
    });
  });
});
