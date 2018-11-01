$(document).ready(function() {
  
    calcularTotal();
   $('#totalcard').innerHTML = sum;


});


$('#btn-purchase').on('click', function() {

        if ($('#code').val() == '') {

            swal({
              title: "Error en el momento de agregar!",
              text: "Vuelve a intentarlo,recuerda llenar el campo de codigo, no puede estar vacio, vuelve a seleccionarlo.",
              icon: "warning",
              button: "Cerrar!",
              });
            return false;
        }

        for (i = 0; i < listcode.length; i++) {
            if (listcode[i] == $('#code').val()) {
   
             swal({
              title: "Error en el momento de agregar!",
              text: "Vuelve a intentarlo, no se puede agregar el mismo codigo.",
              icon: "warning",
              button: "Cerrar!",
              });
                return false;
            }
        }

        addRowBuy();

    });

var listcode = new Array();

/*************    Adicionar filas de compra    ************/

function addRowBuy() {

    $.ajax({
        url: $('#url_product').val() + '/' + $('#code').val(),
        dataType: 'json',
        type: 'GET',
        success: function(data) {
            if (data.code === 200) {
                $(data.datos).each(function(index, el) {
                   // var totaIva = parseFloat(el.sale_price) * parseFloat(el.iva) / 100;
                    
                    var row = '<tr id="fila' + el.id + '">\n\
    <td align="center"><input readonly="readonly" style="border:none;text-align:center" readonly="readonly" type="text" id="codeproduct' + el.id + '" name="codeproduct[]" value="' + el.code + '"></td>\n\
    <td align="center"><input readonly="readonly" style="border:none;text-align:center" readonly="readonly" type="text" id="nameproduct' + el.id + '" name="nameproduct[]" value="' + el.name + '"></td>\n\
    <td align="center"><input style="border:none;text-align:center"  type="number" id="quantity' + el.id + '" min="1" pattern="^[0-9]+"  name="quantity[]" onkeyup="totalizePurchase(' + el.id + ');" value="1"></td>\n\
    <td align="center"><input style="border:none;text-align:center" readonly="readonly" type="text" id="sale_price' + el.id + '" name="sale_price[]" value="' + el.sale_price + '"></td>\n\
    <td align="center"><input  style="border:none;text-align:center" type="text" id="subtotal' + el.id + '" name="subtotal[]" step="0.01" value="' + el.sale_price+ '"></td>\n\
    <td align="center"><a id="btn-borrar' + el.id + '" class="btn btn-danger btn-sm" onclick="deleteRow(' + el.id + ')" ><i class="fa fa-trash" ></i></a></td>\n\
    </tr>';
          

                    $('#tbl-purchases tbody').append(row);

                    var c = parseInt($('#compra').val()) + 1;
                    $('#compra').val(c);
                    //Corregir 
                    $('#totalPurchase').val(parseFloat($('#totalPurchase').val())+parseFloat($('#totalPurchase').val()));


                    var a = listcode.push($('#code').val());
                   return a;

                    swal("¡Buen trabajo, se ha agregado exitosamente el producto, recuerda solo se puede modificar cantidad!", "Haz clic en el botón!", "success");
       
                  //  toastr.success('Se ha agregado un articulo en Compra!.')




                });

            } else {
                if (data.code === 600) {
                    //toastr.error('No se encuentra el codigo digitado');
                } else {
                   // toastr.error('error');

                }

            }
        },
        error: function(jqXHR, textStatus, errorThrown) {

            data = {
                error: jqXHR + ' - ' + textStatus + ' - ' + errorThrown
            }
            $('#modal' + 1).modal('toggle');
            $('body').append('<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="myModalLabel">ERROR EN TRANSACCIÓN</h4></div><div class="modal-body">' + data.error + '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button></div></div></div></div>');
            $('#modalError').modal({ show: true });
        }
    });

}

/************ Totaliza todos los valores de la fila agregada ************/
function  totalizePurchase(id) {

    var cantidad = $('#quantity' + id).val();

    if (cantidad != '') {

        var precio = $('#sale_price' + id).val();
        
        var subtotal = parseFloat(precio).toFixed(2) * parseFloat(cantidad).toFixed(2);

        $('#subtotal' + id).val(subtotal);

        //var totalIva = (subtotal * parseFloat($('#iva' + id).val()).toFixed(2)) / 100;
        //var total = subtotal + totalIva;
        //$('#total' + id).val(total);

        var totalPurchase = 0;
        var fila = $("#tbl-purchases > tbody > tr").each(function(index, element) {
           var idfila = element.id.replace("fila", "#subtotal"); /*Debe ser este*/
   
            totalPurchase += parseInt($(idfila).val());
            
        });
     
        $('#totalPurchase').val(totalPurchase);
    } else {
        $('#subtotal' + id).val(0);
        $('#totalPurchase').val(0);
      
    }


}

/*--------- Eliminar fila por medio del id-------------*/
function deleteRow(id, e) {

    if ($('#fila' + id).remove()) {

        filec = $('#compra').val() - 1;
        $('#compra').val(filec)
        $('#code').val('');
        var totalVenta = 0;
        var fila = $("#tbl-purchases > tbody >tr").each(function(index, element) {
                
            var idfila = element.id.replace("fila", "#subtotal"); /*Debe ser este*/
            totalVenta = parseInt($(idfila).val());
         

        });
        $('#totalPurchase').val(totalVenta);
        listcode.pop();

        }else if (isNaN(totalVenta)) {
            $('#totalPurchase').val(0);
        
        } else{
            $('#totalPurchase').val(e);
            
        $('#totalPurchase').val(totalVenta);

        for (i = 0; i < listcode.length; i++) {
            if (listcode[i] == id) {

                listcode.splice(i);
                return false;

            }
        }

      }}
    




// Actualiza subprecio de cotizacion

$("#update-cotizacion").on('click', function(){
    
    var id = $(this).data('id');
    console.log("id",id);
    var href = $(this).data('href');
    console.log('href'.href);
    var quantity = $("#product_" + id).val();
    console.log('cantidad'.quantity);
    window.location.href = href + "/" + quantity;
       
  });

var sum = 0;
// Total de la otización
function calcularTotal(){


     $('tr').find('#subtotalcot').each(function () {
        var combat = $(this).text();

         if (!isNaN(combat) || combat.length !== 0) {
            sum += parseInt(combat);
         
         }
   
     }

     );
   
  $('#totalcarrito').val(sum);

    
}


//========================================================USUARIO======================================================//


// Crear un usuario

$("#Registro").on("click",function(e){
   e.preventDefault();

var name = $("#idname").val();
var email = $("#idemail").val();
var password = $("#idpassword").val()

if(name==='' || email ==='' || password ===''){

     swal({
              title: "Error en el momento de registro!",
              text: "Vuelve a intentarlo, recuerda llenar todos lo campos.",
              icon: "warning",
              button: "Cerrar!",
              });


}else{

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

}});



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

        if(id === ''){
        swal({
              title: "Error en la actualización!",
              text: "Vuelve a intentarlo, recuerda darle click al botón de la tabla que tiene un icono de una mano, para mostrar y poder editar.",
              icon: "warning",
              button: "Cerrar!",
              });


      }else if (name==='' || email==='' || password ==='' ) {
        swal({
              title: "Error, no se pueden enviar campos vacios !",
              text: "Recuerdalo.",
              icon: "warning",
              button: "Cerrar!",
              });


      } else{

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

}});

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
//===========================================================ROL========================================================//
// Registro de rol
$("#RegistroRole").on("click",function(e){
          e.preventDefault();
var name = $("#nameRole").val();
var display_name = $("#display_nameRole").val();
var description = $("#descriptionRole").val();

if(name==='' || description ===''){

     swal({
              title: "Error en el momento de registro!",
              text: "Vuelve a intentarlo, recuerda llenar todos lo campos.",
              icon: "warning",
              button: "Cerrar!",
              });


}else{
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

}});
//Actualizar role
$('#ActualizarRole').click(function(e){
  e.preventDefault();
      var idrole= $("#idrole").val();
      var name = $("#nameRoleEdit").val();
      var display_name = $("#display_nameRoleEdit").val();
      var description = $("#descriptionRoleEdit").val();
      if (idrole==='') {

        swal({
              title: "Error en la actualización!",
              text: "Vuelve a intentarlo, recuerda darle click al botón de la tabla que tiene un icono de una mano, para mostrar y poder editar.",
              icon: "warning",
              button: "Cerrar!",
              });


      }else if (name==='' || description==='') {
        swal({
              title: "Error, no se pueden enviar campos vacios !",
              text: "Recuerdalo.",
              icon: "warning",
              button: "Cerrar!",
              });


      } else{


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

}});

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
//========================================================PERMISOS======================================================//

// Crear un permisos

$("#Registropermission").on("click",function(e){
          e.preventDefault();
var name = $("#namepermission").val();
var display_name = $("#display_namepermission").val();
var description1= $("#descriptionpermission").val();
if(name==='' || description1 ===''){

     swal({
              title: "Error en el momento de registro!",
              text: "Vuelve a intentarlo, recuerda llenar todos lo campos.",
              icon: "warning",
              button: "Cerrar!",
              });


}else{
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

}});

//Actualizar permiso
$('#ActualizarPermission').click(function(e){
  e.preventDefault();
      var idpermission= $("#idpermisoedit").val();
      var name = $("#namepermissionedit").val();
      var display_name = $("#display_namepermissionedit").val();
      var description = $("#descriptionpermissionedit").val();
      if (idpermission==='') {

        swal({
              title: "Error en la actualización!",
              text: "Vuelve a intentarlo, recuerda darle click al botón de la tabla que tiene un icono de una mano, para mostrar y poder editar.",
              icon: "warning",
              button: "Cerrar!",
              });


      }else if (name==='' || description==='') {
        swal({
              title: "Error, no se pueden enviar campos vacios !",
              text: "Recuerdalo.",
              icon: "warning",
              button: "Cerrar!",
              });


      } else{
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

}});

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

//=========================================================CLIENTES======================================================//

$("#Registroclient").on("click",function(e){
          e.preventDefault();
      var nuip = $("#nuip").val();
      var name= $("#nameclient").val();
      var phone = $("#phoneclient").val();
      var address = $("#addressclient").val();
      var email = $("#emailclient").val();

  if(nuip==='' || name==='' ||  phone==='' || address ==='' && email ===''){

       swal({
                title: "Error en el momento de registro!",
                text: "Vuelve a intentarlo, recuerda llenar todos lo campos.",
                icon: "warning",
                button: "Cerrar!",
                });


  }else{

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
        $('#clients').DataTable().ajax.reload();
        cleanClient();
    }

  });

}});

// Actualizar client

$('#Actualizarclient').click(function(e){

      e.preventDefault();
      var id= $("#idclientedit").val();

      var nuip = $("#nuipclient").val();
      var name= $("#nameclientedit").val();
      var phone = $("#phoneclientedit").val();
      var address = $("#addressclientedit").val();
      var email = $("#emailclientedit").val();

      if(id === ''){
        swal({
              title: "Error en la actualización!",
              text: "Vuelve a intentarlo, recuerda darle click al botón de la tabla que tiene un icono de una mano, para mostrar y poder editar.",
              icon: "warning",
              button: "Cerrar!",
              });


      }else if (nuip ==='' || name==='' || phone==='' || address==='' &&  email==='' ) {
        swal({
              title: "Error, no se pueden enviar campos vacios !",
              text: "Recuerda, seleccionar el usuario y el rol.",
              icon: "warning",
              button: "Cerrar!",
              });


      } else{

        var routeA= "clients/"+id+"";
        var token =$("#token").val();

      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'PUT',
        dataType:'json',
        data:{nuip:nuip,name:name,phone:phone,address:address,email:email},
        success:function(){
            $('#clients').DataTable().ajax.reload();
                  swal("¡Buen trabajo, se ha actualizado exitosamente!", "Haz clic en el botón!", "success");
                  cleanClientedit();
        }

      });
}
});

function cleanClient(){
  var nuip = $("#nuip").val('');
  var name= $("#nameclient").val('');
  var phone = $("#phoneclient").val('');
  var address = $("#addressclient").val('');
  var email = $("#emailclient").val('');


}


function cleanClientedit(){

  var id= $("#idclientedit").val('');
  var nuip = $("#nuipedit").val('');
  var name= $("#nameclientedit").val('');
  var phone = $("#phoneclientedit").val('');
  var address = $("#addressclientedit").val('');
  var email = $("#emailclientedit").val('');

}

// Eliminar usuario cliente
function eliminarClient(){
  swal({
    title: "¿Estás seguro?",
    text: " Una vez eliminado, no podrá recuperar este archivo imaginario!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      var id= $("#idclientedit").val();


      var routeA= "clients/"+id;
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'POST',
        dataType:'json',
        data: {_method: 'DELETE'},
        success:function(){
          $("#clients").dataTable()._fnAjaxUpdate();
          swal("¡Su archivo  ha sido eliminado!", {
            icon: "success",
          });

        }

      });

    } else {
      swal("Tu archivo imaginario es seguro!");
    }
  });
}

//=========================================================PRODUCTOS======================================================//

// Crear un producto
/*$("#Registroproduct").on("click",function(){

var code = $("#codeproduct").val();
var name= $("#nameproduct").val();
var date= $("#dateproduct").val();
var description = $("#descriptionproduct").val();


var unit_price = $("#unit_price").val();
var sale_price = $("#sale_price").val();
var stockmin = $("#stockmin").val();

var file = $("#file").val(); //datos serializados


if(code==='' || name ==='' || date ==='' || unit_price ==='' || sale_price ==='' || stockmin===''){
           swal({
                title: "Error en el momento de registro!",
                text: "Vuelve a intentarlo, recuerda llenar todos lo campos.",
                icon: "warning",
                button: "Cerrar!",
                });

}else{

var route= "products";
var token=$("#token").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{code:code,name:name,date:date,description:description,unit_price:unit_price,sale_price:sale_price,stockmin:stockmin,file:file},
    success:function(){

        swal("¡Buen trabajo, se ha agregado exitosamente!", "Haz clic en el botón!", "success");
        clenProduct();
        $('#products').DataTable().ajax.reload();
    }

  });

}});*/

function clenProduct(){

   $("#codeproduct").val('');
   $("#nameproduct").val('');
   $("#dateproduct").val('');
   $("#descriptionproduct").val('');
   $("#ivaproduct").val('');
   $("#unit_price").val('');
   $("#sale_price").val('');
   $("#stockmin").val('');
   $("#file").val('');

} 

// Eliminar usuario rol_user
function eliminarProduct(){
  swal({
    title: "¿Estás seguro?",
    text: " Una vez eliminado, no podrá recuperar este archivo imaginario!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      var id= $("#idproductedit").val();
      var routeA= "products/"+id;
      var token =$("#token").val();
      $.ajax({
        url:routeA,
        headers: {'X-CSRF-TOKEN': token},
        type:'POST',
        dataType:'json',
        data: {_method: 'DELETE'},
        success:function(){
          $("#products").dataTable()._fnAjaxUpdate();
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






//=========================================================COMENTARIOS==================================================//

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
//=========================================================ROLES_USER===================================================//

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


      }else if (user_id ==='' || role_id==='') {
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
//=========================================================ROLES_PERMISSION==============================================//

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
