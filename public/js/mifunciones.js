$(document).on('ready',function(){

    $('#btn-ingresar').click(function(){
        var url = "datos_login.php";
        $.ajax({
           type: "POST",
           url: url,
           data: $("#formulario").serialize(),
           success: function(data)
           {
             $('#resp').html(data);
           }
       });
    });

});


$(document).on('ready',function(){

  $('#btn-ingresar').click(function(){
  var url = "datos_login.php";

  $.ajax({
     type: "POST",
     url: url,
     data: $("#formulario").serialize(),
     success: function(data)
     {
     $('#resp').html(data);
     }
   });
  });

});


$(document).ready(function() {
    $(document).on('submit', '#mi_formulario', function() {
        //Obtenemos datos.
        var data = $(this).serialize();

        $.ajax({
            type : 'POST',
            url  : 'archivoPHP.php',
            data : data,
            success :  function(data) {
                $("#resultado-mi-formulario").html(data).fadeIn();
            },
            complete: function(){
               setTimeout(function() {
                    $("#resultado-mi-formulario").fadeOut();
               }, 15000);
            }
        });
        return false;
    });
});//End document



$("#Grabar").click(function(event){
    var nombre       = $("#nombre").val();
    //var name = $("input[name=name]").val();
    var apellido     = $("#apellido").val();


    var token = $("input[name=_token]").val();
    var route = "http://localhost:8000/public/empleadosajax/agregarajax.blade.php";
    //var route = "{{ route('guardarajax') }}";
    //var route = "{{ route('empleados.storeajax') }}";
   // var dataString = "nombre="+nombre + "&apellido=" +apellido;

    $.ajax({
        type: 'post',
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        dataType: 'json',
        //data:dataString,
        data:{nombre:nombre, apellido:apellido},

        success: function(data){
          console.log('bien');
      },
      error: function(data){
          alert("Error de envio");
      }
});
});

/*para hacer cargar un lista multi select**/
$("#paisx").change(function(){
    $.ajax({
        url: "{{ route('capital') }}?pais_id=" + $(this).val(),
        method: 'GET',
        success: function(data) {
            $('#carga').html(data.html);
        }
    });
});



$("#registro").click(function(){
    var nombre       = $("#nombre").val();
    var apellido     = $("#apellido").val();
    var cedula       = $("#cedula").val();
    var profesion    = $("#profesion").val();
    var departamento = $("#departamento").val();
    var estado       = $("#estado").val();
    var cargo        = $("#cargo").val();

    var token = $("#token").val();
    var route = "/empleadosajax/agregarajax.blade.php";
    var botonenviar = $("#registro");

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: "POST",
        dataType: 'json',
        //data:{nombre:nombre,apellido:apellido,cedula:cedula,profesion:profesion,departamento:departamento,estado:estado,cargo},
        data: $("#formulario").serialize(),

        success: function(data){
          $("#msg").html(data); // Mostrar la respuestas del script PHP.
      },
      error: function(data){
        $("#msg").html(data);
        //  alert("Problemas al tratar de enviar el formulario");
      }
});
});




/*

  $.ajax({
      url: "municipio/"+idestado,
      type: "GET",
      dataType: "json",
      error: function(element){
      //console.log(element);
      },
      success: function(respuesta){
        $("#municipio").html('<option value="" selected="true"> Seleccione una opción </option>');
        respuesta.forEach(element => {
          $('#municipio').append('<option value='+element.idmunicipio+'> '+element.nombre+' </option>')
        });
      }
    });
  */




$('#municipio').on('change', function() { var idmunicipio = $('#municipio').val();

    $.ajax({
      url: "parroquia/"+idmunicipio,
      type: "GET",
      dataType: "json",
      error: function(){

      },
      success: function(respuesta){
        $('#parroquia').html('<option value="" selected="true"> Seleccione una opción </option>');
        respuesta.forEach(element => {
          $("#parroquia").append('<option value='+element.idparroquia+'> '+element.nombre+' </option>')
        });
      }
    });
});




  $(document).ready(function(){
    $("#categorias").change(function(){
      var categoria = $(this).val();
      $.get('productByCategory/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          var producto_select = '<option value="">Seleccione Porducto</option>'
            for (var i=0; i<data.length;i++)
              producto_select+='<option value="'+data[i].id+'">'+data[i].nombre_producto+'</option>';

            $("#campanas").html(producto_select);

      });
    });
  });
//Route::Get('productByCategory/{id}', 'ProductosController@byCategory');
/*public function byFoundation($id){
    return Productos::where('categoria','=',$id)->get();
}*/



$("#country").change(function(){
            $.ajax({
                url: "{{ route('admin.cities.get_by_country') }}?country_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#city').html(data.html);
                }
            });
        });


