$(document).ready(function () {
  $('#editar').click(function () {
    var e = confirm('desea editar este registro');
    if(e==true){
      // pasamos por ulr el id
      $.ajax({
        url: 'phpBaseDatos/editar.php',//direccion
        data: $('#_id').serialize(),
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
          //$('#resultados').html(datos);
          //$('#completar').html(datos.rol); //no funciono de esta forma
           //$('#ingresar').val("success");
           $(location).attr('href',base_url+'Ppeditar'+'.php');
}

      });
    }
  });
});


$(document).ready(function () {
  $('#delete').click(function () {
    var b = confirm('desea borrar este registro');
    if(b==true){
      // pasamos por ulr el id
        console.log($('#_id').serialize());
      $.ajax({
        url: 'phpBaseDatos/borrar.php',//direccion
        data: $('#_id').serialize(),
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
          //$('#resultados').html(datos);
          //$('#completar').html(datos.rol); //no funciono de esta forma
          $(location).attr('href',base_url+'Ppeditar'+'.php');

}

      });
    }
  });
});
