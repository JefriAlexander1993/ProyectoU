
// LLamado a todas las lista en el momento iniciar
$(document).ready(function() {

  purchaseList();
  usersList();
  clientsList();
  salesList();
  productsList();
  rolesList();
  permissionsList();
  commentsList();
  role_userList();
  role_permissionList();


      });



// Datatable de Clientes

function clientsList() {
  var tableclient =    $('#clients').DataTable({
  
         language: {
               "sProcessing":     "Procesando...",
               "sLengthMenu":     "Mostrar _MENU_ Registros",
               "sZeroRecords":    "No se encontraron resultados",
               "sEmptyTable":     "Ningún dato disponible en esta tabla",
               "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
               "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
               "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
               "sInfoPostFix":    "",
               "sSearch":         "Buscar:",
               "sUrl":            "",
               "sInfoThousands":  ",",
               "sLoadingRecords": "Cargando...",
               "oPaginate": {
                   "sFirst":    "Primero",
                   "sLast":     "Último",
                   "sNext":     "Siguiente",
                   "sPrevious": "Anterior"
               },
               "oAria": {
                   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                         }
                     },

          "autoWidth": true,
          "serverSide":true,
          "ajax": "api/clients/all",

           "columns":[
               {data:'id'},
               {data:'nuip'},
               {data:'name'},
               {data:'phone'},
               {data:'address'},
               {data:'email'},
               {data:'btn'},
             ],
                  
     });

data_editclient("#clients tbody", tableclient);
data_showclient("#clients tbody", tableclient);
data_deleteclient("#clients tbody", tableclient);
}


//Estrae la información de la tabla para editar.

var data_editclient =  function(tbody , tableclient){

$(tbody).on("click", "#editClient", function(){

  var data= tableclient.row($(this).parents("tr")).data();
  var idclient =$("#idclientedit").val(data.id);
  var nuip=$("#nuipedit").val(data.nuip);
  var name=$("#nameclientedit").val(data.name);
  var phone=$("#phoneclientedit").val(data.phone);
  var address=$("#addressclientedit").val(data.address);
  var email=$("#emailclientedit").val(data.email);


});
}

//Estrae la información de la tabla para ver.

var data_showclient =  function(tbody , tablecotizacion){

$(tbody).on("click", "#showClient", function(){

  var data= tableclient.row($(this).parents("tr")).data();
      var  nuip =$("#shownuipclient").val(data.nuip);
      var  name =$("#shownameclient").val(data.name);
      var  phone =$("#showphoneclient").val(data.phone);
      var  address =$("#showaddressclient").val(data.address);
      var  email =$("#showemailclient").val(data.phone);



});
}

// Estrae el id del usuario de una columan especifica para eliminar

var data_deleteclient =  function(tbody , tableclient){

$(tbody).on("click", "#deleteClient", function(){

  var data= tableclient.row($(this).parents("tr")).data();
      var idclient =$("#idclientedit").val(data.id);

});
}

// Datatable de productos

  function productsList() {
      var tableProduct   =   $('#products').DataTable(
              {  language: {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                  }
                              },
                    "serverSide":true,
                    "ajax": "api/products/all",
                    "columns":[

              
                        {data:'code'},
                        {data:'name'},
                        {data:'description'},
                        {data:'unit_price'},
                        {data:'sale_price'},
                        {data:'btn'},

                              ]
              });
      data_deleteProduct("#products tbody" , tableProduct);
      data_editProduct("#products tbody" , tableProduct);
      data_showProduct("#products tbody" , tableProduct);

}

// Estrae el id del usuario de una columan especifica para eliminar


var data_deleteProduct =  function(tbody , tableProduct){

$(tbody).on("click", "#deleteProduct", function(){

  var data= tableProduct.row($(this).parents("tr")).data();
      var idclient =$("#idproductedit").val(data.id);

});
}
      //Estrae la información de la tabla para editar.

 var data_editProduct =  function(tbody , tableProduct){

 $(tbody).on("click", "#editProduct", function(){
    var data= tableProduct.row($(this).parents("tr")).data();
    var id =$("#idproductedit").val(data.id);
    var code=$("#codeproductedit").val(data.code);
    var fecha=$("#dateproductedit").val(data.date);
    var name=$("#nameproductedit").val(data.name);
    var stockmin=$("#stockminedit").val(data.stockmin);
    var description=$("#descriptionproductedit").val(data.description);
    var sale_price=$("#sale_priceedit").val(data.sale_price);
    var unit_price=$("#unit_priceedit").val(data.unit_price);
   
   });
  }

              //Estrae la información de la tabla para ver.

  var data_showProduct =  function(tbody , tableProduct){

  $(tbody).on("click", "#showProduct", function(){

   var data= tableProduct.row($(this).parents("tr")).data();
   var  name =$("#showname").val(data.name);
   var  email =$("#showemail").val(data.email);

              });
              }


// Datatable de ventas
function salesList() {
  $('#sales').DataTable(
  {  language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                      }
                  },
        "serverSide":true,
        "ajax": "api/sales/all",
        "columns":[
            {data:'id'},
            //{data:'name'},

                  ]
  });
}


// Datatable de usuarios
function  usersList(){

  var table=   $('#users').DataTable({

            language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                              }
                          },
                "serverSide":true,
                "ajax": "api/users/all",
                "columns":[
                    {data:'id'},
                    {data:'name'},
                    {data:'email'},
                    {data:'btn'},
                  ]
          });
          data_edit("#users tbody", table);
          data_show("#users tbody", table);
          data_delete("#users tbody", table);
}
              //Estrae la información de la tabla para editar.

              var data_edit =  function(tbody , table){

              $(tbody).on("click", "#editUser", function(){
                var data= table.row($(this).parents("tr")).data();
                var iduser =$("#idusuarioedit").val(data.id);
                var name=$("#name").val(data.name);
                var email=$("#email").val(data.email);


              });
              }

              //Estrae la información de la tabla para ver.

              var data_show =  function(tbody , table){

              $(tbody).on("click", "#showUser", function(){

                var data= table.row($(this).parents("tr")).data();
                    var  name =$("#showname").val(data.name);
                    var  email =$("#showemail").val(data.email);



              });
              }

              // Estrae el id del usuario de una columan especifica para eliminar

              var data_delete =  function(tbody , table){

              $(tbody).on("click", "#deleteUser", function(){

                var data= table.row($(this).parents("tr")).data();
                  var iduser =$("#idusuarioedit").val(data.id);

              });
              }

                // Estrae el id del usuario de una columan especifica para editar

              // Hacer esconder una etiqueta.
              function esconde_div(){
                 var elemento = document.getElementById("usersvisible");
                 elemento.style.display = 'none';
              }

              //Limpiar los campos cuando cambio de botón
              $(document).ready(function() {
              $('#create-form').on('click', function() {
                var name=$("#name").val('');
                var email=$("#email").val('');

              }
            );
            });

            $(document).ready(function() {
            $('#show-form').on('click', function() {
              var name=$("#showname").val('');
              var email=$("#showemail").val('');

              }
            );
            });

            $(document).ready(function() {
            $('#edit-form').on('click', function() {
              var name=$("#name").val('');
              var email=$("#email").val('');

              }
            );
            });

            //Limpiar los campos cuando cambio de botón role
            $(document).ready(function() {
            $('#create-form').on('click', function() {
              var name=$("#nameRole").val('');
              var display_name=$("#display_nameRole").val('');
              var description=$("#descriptionRole").val('');

            }
          );
          });

          $(document).ready(function() {
          $('#show-form').on('click', function() {
            var name=$("#showRolename").val('');
            var display_name=$("#showRoledisplay_name").val('');
            var description=$("#showRoledescription").val('');
            }
          );
          });

          $(document).ready(function() {
          $('#edit-form').on('click', function() {
          var name=  $("#nameRoleEdit").val('');
          var display_name =  $("#display_nameRoleEdit").val('');
          var description=  $("#descriptionRoleEdit").val('');

            }
          );
          });



     // Datatable de roles

   function rolesList(){

         var tablerole=  $('#roles').DataTable({

                 language: {
                         "sProcessing":     "Procesando...",
                         "sLengthMenu":     "Mostrar _MENU_ registros",
                         "sZeroRecords":    "No se encontraron resultados",
                         "sEmptyTable":     "Ningún dato disponible en esta tabla",
                         "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                         "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                         "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                         "sInfoPostFix":    "",
                         "sSearch":         "Buscar:",
                         "sUrl":            "",
                         "sInfoThousands":  ",",
                         "sLoadingRecords": "Cargando...",
                         "oPaginate": {
                             "sFirst":    "Primero",
                             "sLast":     "Último",
                             "sNext":     "Siguiente",
                             "sPrevious": "Anterior"
                         },
                         "oAria": {
                             "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                             "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                   }
                               },
                     "serverSide":true,
                     "ajax": "api/roles/all",
                     "columns":[
                         {data:'id'},
                         {data:'name'},
                         {data:'display_name'},
                         {data:'description'},
                         {data:'created_at'},
                         {data:'btn'},

                       ],
               });
               data_editRole("#roles tbody", tablerole);
               data_showRole("#roles tbody", tablerole);
               data_deleteRole("#roles tbody", tablerole);
       }


       var data_deleteRole =  function(tbody , tablerole){

       $(tbody).on("click", "#deleteRole", function(){

         var data= tablerole.row($(this).parents("tr")).data();
           var idrole =$("#idrole").val(data.id);
            id =$("#idrole").val();



       });
       }

              // Carga datos a la vista en el formulario para editar

              var data_editRole =  function(tbody , tablerole){

              $(tbody).on("click", "#editRole", function(){
                var data= tablerole.row($(this).parents("tr")).data();
                var name=$("#idrole").val(data.id);
                var name=$("#nameRoleEdit").val(data.name);
                var display_name=$("#display_nameRoleEdit").val(data.display_name);
                var description=$("#descriptionRoleEdit").val(data.description);

              });
              }


              //Estrae la información de la tabla para ver.

              var data_showRole =  function(tbody , tablerole){

              $(tbody).on("click", "#showRole", function(){
                var data= tablerole.row($(this).parents("tr")).data();
                    var  name =$("#showRolename").val(data.name);
                    var  display_name =$("#showRoledisplay_name").val(data.display_name);
                    var  description =$("#showRoledescription").val(data.description);
                  });
                }

                //Limpiar los campos
                $(document).ready(function() {
                $('#create-form-rol').on('click', function() {
                  var name=$("#namerole").val('');
                  var email=$("#display_name").val('');
                  var email=$("#description").val('');

                }
              );
              });

              $(document).ready(function() {
              $('#show-form-rol').on('click', function() {
                var name=$("#showname").val('');
                var email=$("#showdisplay_name").val('');
                var email=$("#showdescription").val('');

                }
              );
              });
              $(document).ready(function() {
              $('#edit-form-rol').on('click', function() {
                var name=$("#namerole").val('');
                var email=$("#display_name").val('');
                var email=$("#description").val('');

                }
              );
              });



     // Datatable de permisos
function permissionsList(){
var tablePermission =  $('#permissions').DataTable({

         language: {
                 "sProcessing":     "Procesando...",
                 "sLengthMenu":     "Mostrar _MENU_ registros",
                 "sZeroRecords":    "No se encontraron resultados",
                 "sEmptyTable":     "Ningún dato disponible en esta tabla",
                 "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                 "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                 "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                 "sInfoPostFix":    "",
                 "sSearch":         "Buscar:",
                 "sUrl":            "",
                 "sInfoThousands":  ",",
                 "sLoadingRecords": "Cargando...",
                 "oPaginate": {
                     "sFirst":    "Primero",
                     "sLast":     "Último",
                     "sNext":     "Siguiente",
                     "sPrevious": "Anterior"
                 },
                 "oAria": {
                     "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                     "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                           }
                       },
             "serverSide":true,
             "ajax": "api/permissions/all",
             "columns":[
                 {data:'id'},
                 {data:'name'},
                 {data:'display_name'},
                 {data:'description'},
                 {data:'created_at'},
                 {data:'btn'},
                       ]
       });
data_editPermission("#permissions tbody", tablePermission);
data_showPermission("#permissions tbody", tablePermission);
data_deletePermission("#permissions tbody", tablePermission);
}


var data_editPermission =  function(tbody , tablePermission){

$(tbody).on("click", "#editPermission", function(){

  var datap= tablePermission.row($(this).parents("tr")).data();
  var idp =$("#idpermisoedit").val(datap.id);
  var name =$("#namepermissionedit").val(datap.name);
  var display_name =$("#display_namepermissionedit").val(datap.display_name);
  var description =$("#descriptionpermissionedit").val(datap.description);

});
}
//Estrae la información de la tabla para ver.

var data_showPermission =  function(tbody , tablePermission){

$(tbody).on("click", "#showPermission", function(){

  var data= tablePermission.row($(this).parents("tr")).data();
      var  name =$("#shownamepermission").val(data.name);
      var  display_name =$("#showdisplay_namepermission").val(data.display_name);
      var  description =$("#showdescriptionpermission").val(data.description);
    });
  }

  var data_deletePermission =  function(tbody , tablePermission){

  $(tbody).on("click", "#deletePermission", function(){

    var data= tablePermission.row($(this).parents("tr")).data();
      var idrole =$("#idpermisoedit").val(data.id);
       id =$("#idpermisoedit").val();



  });
  }

  // Datatable de comentarios
  function commentsList() {
  var tabletcomment =   $('#commentaries').DataTable(
    {  language: {
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    },
          "serverSide":true,
          "ajax": "api/commentaries/all",
          "columns":[
              {data:'id'},
              {data:'name'},
              {data:'email'},
              {data:'body'},
              {data:'btn'},

                    ]
    });
    data_showcomment("#commentaries tbody", tabletcomment)
  }
  //Estrae la información de la tabla para ver.

  var data_showcomment =  function(tbody ,tabletcomment ){
  $(tbody).on("click", "#showcommentary", function(){

        var data= tabletcomment.row($(this).parents("tr")).data();
        var  name =$("#shownamecomment").val(data.name);
        var  email =$("#showemailcomment").val(data.email);
        var description=$("#showdescriptioncomment").val(data.body);
  });
  }




  // Datatable de role_user
  function role_userList() {
  var tableroleuser =  $('#users_roles').DataTable({

    language: {
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    },
          "serverSide":true,
          "ajax": "api/users_roles/all",
          "columns":[
              {data:'id'},
              {data:'user_id'},
              {data:'role_id'},
              {data:'btn'},

                    ]
    });
    data_editasignacionrole("#users_roles tbody",  tableroleuser);
    data_showasignacionrole("#users_roles tbody",  tableroleuser);
    data_deleteasignacionrole("#users_roles tbody",  tableroleuser);
  }

  //Estrae la información de la tabla para editar asignación.

  var data_editasignacionrole =  function(tbody , tableroleuser){

  $(tbody).on("click", "#editrole_User", function(){

    var data= tableroleuser.row($(this).parents("tr")).data();
    var id =$("#iduroleasigancionedit").val(data.id);
    var user_id =$("#user_idedit").val(data.user_id);
    var role_id=$("#role_idedit").val(data.role_id);

  });
  }

  //Estrae la información de la tabla para ver.

  var data_showasignacionrole =  function(tbody , tableroleuser ){
  $(tbody).on("click", "#showrole_User", function(){
    var data= tableroleuser.row($(this).parents("tr")).data();
        var  name =$("#showiduser").val(data.user_id);
        var  email =$("#showidrole").val(data.role_id);
  });
  }

  // Estrae el id del usuario de una columan especifica para eliminar

  var data_deleteasignacionrole =  function(tbody , tableroleuser){

  $(tbody).on("click", "#deleterole_User", function(){
    var data= tableroleuser.row($(this).parents("tr")).data();
      var id =$("#iduroleasigancionedit").val(data.id);

  });
  }




  // Datatable de role_user
  function  role_permissionList() {
    var  tablerolepermission =$('#role_permission').DataTable(
        {
            language: {
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    },
          "serverSide":true,
          "ajax": "api/roles_permissions/all",
          "columns":[
              {data:'id'},
              {data:'role_id'},
              {data:'permission_id'},
              {data:'btn'},

                    ]
    });
    data_editasignacionpermission("#role_permission tbody",  tablerolepermission);
    data_showasignacionpermission("#role_permission tbody",  tablerolepermission);
    data_deleteasignacionpermission("#role_permission tbody",  tablerolepermission);
  }

  var data_editasignacionpermission =  function(tbody ,  tablerolepermission){

  $(tbody).on("click", "#editrolepermission", function(){

    var data=  tablerolepermission.row($(this).parents("tr")).data();
    var id =$("#idasignacionpermissionedit").val(data.id);

    var user_id =$("#permission_idedit").val(data.permission_id);
    var role_id=$("#role_idedit").val(data.role_id);

  });
  }

  //Estrae la información de la tabla para ver.

  var data_showasignacionpermission =  function(tbody ,  tablerolepermission){
  $(tbody).on("click", "#showrolepermission", function(){

    var data=  tablerolepermission.row($(this).parents("tr")).data();
        var  name =$("#showidapermission").val(data.permission_id);
        var  email =$("#showidarole").val(data.role_id);
  });
  }

  // Estrae el id del usuario de una columan especifica para eliminar

  var data_deleteasignacionpermission =  function(tbody , tablerolepermission){

  $(tbody).on("click", "#deleterolepermission", function(){

    var data=  tablerolepermission.row($(this).parents("tr")).data();
      var id =$("#idasignacionpermissionedit").val(data.id);

  });
  }


  // Datatable de purchase
  function  purchaseList() {

     $('#purchases').DataTable({
            language: {
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    },
          "serverSide":true,
          "ajax": "api/purchases/all",
          "columns":[
              {data:'id'},
              {data:'created_at'},
              {data:'totalpurchase'},
              {data:'btn'},

                    ]
    });

  }