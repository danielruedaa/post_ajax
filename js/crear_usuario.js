
$(document).ready(function() {
  $('#crear-c').click(function(evento) {
    evento.preventDefault();//para evitar que el formulario sea enviado de manera tradicional.
    $('#formulario-crear').validate({
      rules:{
        nombre:{
          required:true,
          lettersonly:true
        },
        login:{
          required:true,
        },
        telefono:{
          required: true,
          digits: true,
          minlength: 7,
	        maxlength: 10
        },
        email:{
          required: true,
	         email: true
        },
        rpass:{
          required:true,
          equalTo:'#pass'
        },
      },
      messages:{
          nombre: "Debe introducir su nombre.",
          login:"login para session",
           telefono : "El número de teléfono introducido no es correcto.",
           email : "Debe introducir un email válido.",
           rpass:"no es igual la clave"
      },
      submitHandler:function(form){

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
      }
    });
  });
});
