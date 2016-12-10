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
      error:function ( jqXHR,textStatus,errorThrown) {
       console.log( jqXHR);
       console.log(textStatus);
       console.log(errorThrown);
     },

      success:function(datos) {// si funciono
        var base_url = 'http://localhost/post_ajax/';
        $('#resultados').html(datos);
        $('#completar').html(datos.rol); //no funciono de esta forma

         //$(location).attr('href',base_url+'Editor.html');
        // $(location).attr('href',base_url+datos[0].rol+'.html');

      }
    });
  });
});
