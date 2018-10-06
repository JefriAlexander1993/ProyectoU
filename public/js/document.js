// Crear un usuario
$("#Registro").on("click",function(e){
          e.preventDefault();
var name = $("#idname").val();
var email = $("#idemail").val();
var password = $("#idpassword").val();
var route= "users";
var token=$("#token").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{name:name, email:email, password:password},
    success:function(){
        swal("¡Buen trabajo, se ha agregado exitosamente!", "Haz clic en el botón!", "success");
        limpiar();
        $('#users').DataTable().ajax.reload();
    }

  });

});

var data_editar =  function(tbody , table){

$(tbody).on("click", "button.editar", function(){
  var data= table.row($(this).parents("tr")).data();
    var iduser =$("#iduser").val(data.id);
          console.log(iduser);
});
}
// Actualizar los campos de los usuarios
var cargar =function(users){
}
//Limpiar los campos de los usuarios
var limpiar = function(){

  $("#idname").val('');
  $("#idemail").val('');
  $("#idpassword").val('');

}
var limpiara = function(){

  $("#name").val('');
  $("#email").val('');
  $("#password").val('');

}

$('#Actualizar').click(function(e){
      e.preventDefault();
      var id= $("#idusuarioedit").val();
      var name = $("#name").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var routeA= "users/"+id+"";
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'PUT',
        dataType:'json',
        data:{name:name, email:email, password:password},
        success:function(){
            $('#users').DataTable().ajax.reload();
                  swal("¡Buen trabajo, se ha actualizado exitosamente!", "Haz clic en el botón!", "success");
        }

      });

});


function eliminarUsers(){
  swal({
    title: "¿Estás seguro?",
    text: "Una vez eliminado, no podrá recuperar este archivo imaginario!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      var id= $("#idusuarioedit").val();
      var routeA= "users/"+id;
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'POST',
        dataType:'json',
        data: {_method: 'DELETE'},
        success:function(){
          $("#users").dataTable()._fnAjaxUpdate();
          swal("¡Su archivo imaginario ha sido eliminado!", {
            icon: "success",
          });
            limpiara();
        }

      });

    } else {
      swal("Your imaginary file is safe!");
    }
  });
}
