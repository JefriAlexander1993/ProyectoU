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

//Limpiar los campos de los usuarios
 function  limpiar(){

  $("#idname").val('');
  $("#idemail").val('');
  $("#idpassword").val('');

}
// limpiar el campo de editar
function  cleanEdit(){

 $("#name").val('');
 $("#email").val('');
 $("#password").val('');

}

// Actualizar usuario

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
                  cleanEdit();
        }

      });

});

// Eliminar usuario
function eliminarUsers(){
  swal({
    title: "¿Estás seguro?",
    text: " Una vez eliminado, no podrá recuperar este archivo imaginario!",
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

        }

      });

    } else {
      swal("Tu archivo imaginario es seguro!");
    }
  });
}

// Registro de rol
$("#RegistroRole").on("click",function(e){
          e.preventDefault();
var name = $("#nameRole").val();
var display_name = $("#display_nameRole").val();
var description = $("#descriptionRole").val();
var route= "roles";
var token=$("#token").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{name:name, display_name:display_name, description:description},
    success:function(){

        swal("¡Buen trabajo, se ha agregado exitosamente!", "Haz clic en el botón!", "success");
        cleanRole();
        $('#roles').DataTable().ajax.reload();
    }

  });

});
//Actualizar role
$('#ActualizarRole').click(function(e){
  e.preventDefault();
      var idrole= $("#idrole").val();
      var name = $("#nameRoleEdit").val();
      var display_name = $("#display_nameRoleEdit").val();
      var description = $("#descriptionRoleEdit").val();
      var routeA= "roles/"+idrole+"";
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'PUT',
        dataType:'json',
        data:{name:name, display_name:display_name,description:description},
        success:function(){
            $('#roles').DataTable().ajax.reload();
                  swal("¡Buen trabajo, se ha actualizado exitosamente!", "Haz clic en el botón!", "success");
                cleanRoleEdit();
        }

      });

});

function  cleanRole(){
 $("#nameRole").val('');
 $("#display_nameRole").val('');
 $("#descriptionRole").val('');

}
// limpiar el campo de editar
function  cleanRoleEdit(){

  $("#nameRoleEdit").val('');
  $("#display_nameRoleEdit").val('');
  $("#descriptionRoleEdit").val('');

}
// Eliminar usuario
function eliminarRole(){
  swal({
    title: "¿Estás seguro?",
    text: " Una vez eliminado, no podrá recuperar este archivo imaginario!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      var id= $("#idrole").val();

      var routeA= "roles/"+id;
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'POST',
        dataType:'json',
        data: {_method: 'DELETE'},
        success:function(){
          $("#roles").dataTable()._fnAjaxUpdate();
          swal("¡Su archivo imaginario ha sido eliminado!", {
            icon: "success",
          });

        }

      });

    } else {
      swal("Tu archivo imaginario es seguro!");
    }
  });
}


// Crear un permisos

$("#Registropermission").on("click",function(e){
          e.preventDefault();
var name = $("#namepermission").val();
var display_name = $("#display_namepermission").val();
var description1= $("#descriptionpermission").val();

var route= "permissions";
var token=$("#token").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{name:name, display_name:display_name,description:description1},
    success:function(){
        swal("¡Buen trabajo, se ha agregado exitosamente!", "Haz clic en el botón!", "success");

        $('#permissions').DataTable().ajax.reload();
    }

  });

});

//Actualizar permiso
$('#ActualizarPermission').click(function(e){
  e.preventDefault();
      var idpermission= $("#idpermisoedit").val();
      var name = $("#namepermissionedit").val();
      var display_name = $("#display_namepermissionedit").val();
      var description = $("#descriptionpermissionedit").val();
      var routeA= "permissions/"+idpermission+"";

      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'PUT',
        dataType:'json',
        data:{name:name, display_name:display_name,description:description},
        success:function(){
            $('#permissions').DataTable().ajax.reload();
                  swal("¡Buen trabajo, se ha actualizado exitosamente!", "Haz clic en el botón!", "success");
                cleanRoleEdit();
        }

      });

});

// Eliminar usuario
function eliminarPermission(){
  swal({
    title: "¿Estás seguro?",
    text: " Una vez eliminado, no podrá recuperar este archivo imaginario!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      var id= $("#idpermisoedit").val();
      var routeA= "permissions/"+id;
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'POST',
        dataType:'json',
        data: {_method: 'DELETE'},
        success:function(){
          $("#permissions").dataTable()._fnAjaxUpdate();
          swal("¡Su archivo imaginario ha sido eliminado!", {
            icon: "success",
          });

        }

      });

    } else {
      swal("Tu archivo imaginario es seguro!");
    }
  });
}

// Crear un cliente

$("#Registroclient").on("click",function(e){
          e.preventDefault();
var nuip = $("#nuip").val();
var name= $("#nameclient").val();
var phone = $("#phoneclient").val();
var address = $("#addressclient").val();
var email = $("#emailclient").val();
var route= "clients";
var token=$("#token").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{nuip:nuip,name:name,phone:phone,address:address,email:email},
    success:function(){

        swal("¡Buen trabajo, se ha agregado exitosamente!", "Haz clic en el botón!", "success");
        limpiar();
        $('#clients').DataTable().ajax.reload();
    }

  });

});
// Crear un cliente

$("#Registroproduct").on("click",function(e){

          e.preventDefault();
var code = $("#codeproduct").val();
var name= $("#nameproduct").val();
var date= $("#dateproduct").val();
var description = $("#descriptionproduct").val();

var iva = $("#ivaproduct").val();
var unit_price = $("#unit_price").val();
var sale_price = $("#sale_price").val();
var stockmin = $("#stockmin").val();
var file =$("#file").val();

var route= "products";
var token=$("#token").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{code:code,name:name,date:date,description:description,iva:iva,unit_price:unit_price,sale_price:sale_price,stockmin:stockmin,file:file},
    success:function(){

        swal("¡Buen trabajo, se ha agregado exitosamente!", "Haz clic en el botón!", "success");
        limpiar();
        $('#products').DataTable().ajax.reload();
    }

  });

});


// Crear un comentarios

$("#Registrocomment").on("click",function(e){
          e.preventDefault();
var name = $("#namecomment").val();
var email= $("#emailcomment").val();
var body= $("#bodycomment").val();

var route= "commentaries";
var token=$("#token").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{name:name,email:email,body:body},
    success:function(){
        $('#commentaries').DataTable().ajax.reload();
        swal("¡Buen trabajo, tu comentario fue enviado exitosamente!", "Haz clic en el botón!", "success");
        cleancomment();

    }

  });

});
function cleancomment(){

  var name = $("#namecomment").val(' ');
  var email= $("#emailcomment").val(' ');
  var body= $("#bodycomment").val(' ');

}

// Crear un role_user

$("#Registroroleuser").on("click",function(e){
          e.preventDefault();

var user_id = $("#user_id").val();

var role_id= $("#role_id").val();
if (user_id ==='' && role_id==='') {
  swal({
        title: "Error, no se pueden enviar campos vacios !",
        text: "Recuerda, seleccionar el usuario y el rol.",
        icon: "warning",
        button: "Cerrar!",
        });


} else{
var route= "users_roles";
var token=$("#token").val();

  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{user_id:user_id,role_id:role_id},
    success:function(){

        swal("¡Buen trabajo, su asociación ha si exitosamente!", "Haz clic en el botón!", "success");
          cleanasignación();
        $('#users_roles').DataTable().ajax.reload();
    }

  });
}
});
// Actualizar role_user

$('#Actualizarasignacionrole').click(function(e){

      e.preventDefault();
      var id= $("#iduroleasigancionedit").val();
      var user_id = $("#user_idedit").val();
      var role_id= $("#role_idedit").val();


      if(id === ''){
        swal({
              title: "Error en la actualización!",
              text: "Vuelve a intentarlo, recuerda darle click al botón de la tabla que tiene un icono de una mano, para mostrar y poder editar.",
              icon: "warning",
              button: "Cerrar!",
              });


      }else if (user_id ==='' && role_id==='') {
        swal({
              title: "Error, no se pueden enviar campos vacios !",
              text: "Recuerda, seleccionar el usuario y el rol.",
              icon: "warning",
              button: "Cerrar!",
              });


      } else{

        var routeA= "users_roles/"+id+"";
        var token =$("#token").val();

      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'PUT',
        dataType:'json',
        data:{user_id:user_id, role_id:role_id},
        success:function(){
            $('#users_roles').DataTable().ajax.reload();
                  swal("¡Buen trabajo, se ha actualizado exitosamente!", "Haz clic en el botón!", "success");
                  cleanEdit();
        }

      });
}
});
function cleanasignación(){

$("#user_id").val(' ');
 $("#role_id").val(' ');

}
// Eliminar usuario rol_user
function eliminarasignacionroleuser(){
  swal({
    title: "¿Estás seguro?",
    text: " Una vez eliminado, no podrá recuperar este archivo imaginario!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      var id= $("#iduroleasigancionedit").val();

      var routeA= "users_roles/"+id;
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'POST',
        dataType:'json',
        data: {_method: 'DELETE'},
        success:function(){
          $("#users_roles").dataTable()._fnAjaxUpdate();
          swal("¡Su archivo imaginario ha sido eliminado!", {
            icon: "success",
          });

        }

      });

    } else {
      swal("Tu archivo imaginario es seguro!");
    }
  });
}

// Crear un role_permission
$("#Registrorolepermission").on("click",function(e){

          e.preventDefault();

var role_id = $("#role_id1").val();

var permission_id= $("#permission_id").val();

var route= "role_permissions";
var token=$("#token").val();

  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{role_id:role_id,permission_id:permission_id},
    success:function(){

        swal("¡Buen trabajo, su asociación ha si exitosamente!", "Haz clic en el botón!", "success");
          cleanasignación();
        $('#role_permission').DataTable().ajax.reload();
    }

  });

});
function cleanasignación(){

$("#user_id").val(' ');
 $("#role_id").val(' ');


}
// Actualizar role_permission

$('#Actualizarasignacionpermission').click(function(e){

      e.preventDefault();
      var id= $("#idasignacionpermissionedit").val();
      var role_id = $("#role_idedit").val();
      var permission_id= $("#permission_idedit").val();

      if(id === ''){
        swal({
              title: "Error en la actualización!",
              text: "Vuelve a intentarlo, recuerda darle click al botón de la tabla que tiene un icono de una mano, para mostrar y poder editar.",
              icon: "warning",
              button: "Cerrar!",
              });


      }else if (role_id ==='' && permission_id==='') {
        swal({
              title: "Error, no se pueden enviar campos vacios !",
              text: "Recuerda, seleccionar el usuario y el rol.",
              icon: "warning",
              button: "Cerrar!",
              });


      } else{

        var routeA= "role_permissions/"+id+"";
        var token =$("#token").val();

      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'PUT',
        dataType:'json',
        data:{role_id:role_id, permission_id:permission_id},
        success:function(){
            $('#role_permission').DataTable().ajax.reload();
                  swal("¡Buen trabajo, se ha actualizado exitosamente!", "Haz clic en el botón!", "success");
                  cleanEdit();
        }

      });
}
});

// Eliminar usuario
function eliminarasignacionrolepermission(){
  swal({
    title: "¿Estás seguro?",
    text: " Una vez eliminado, no podrá recuperar este archivo imaginario!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      var id= $("#idasignacionpermissionedit").val();
      var routeA= "role_permissions/"+id;
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'POST',
        dataType:'json',
        data: {_method: 'DELETE'},
        success:function(){
          $("#role_permission").dataTable()._fnAjaxUpdate();
          swal("¡Su archivo imaginario ha sido eliminado!", {
            icon: "success",
          });

        }

      });

    } else {
      swal("Tu archivo imaginario es seguro!");
    }
  });
}
