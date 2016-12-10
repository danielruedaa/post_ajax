$(document).ready(function() {
  $('#guardar').click(function(evento) {

    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
    console.log($('#formulario-post').serialize());
    $.ajax({
      url: 'phpBaseDatos/comentarios.php',//direccion
      data: $('#formulario-post').serialize(),
      type: 'POST',// medio de envio
      //dataType: 'json',//como llega la respuseta
      beforeSend:function() {
        $('#guardar').val("enviando...");
      },
      error:function ( jqXHR,textStatus,errorThrown) {
       console.log( jqXHR);
       console.log(textStatus);
       console.log(errorThrown);
     },

      success:function(datos) {// si funciono

        $('#resultados').html(datos);


         //$(location).attr('href',base_url+'Editor.html');
        // $(location).attr('href',base_url+datos[0].rol+'.html');

      }
    });
  });
});
