$(document).ready(function() {
  usersList();
  clientsList();
  salesList();
  productsList();
  rolesList();
  permissionsList();
      });



// Datatable de Clientes

function clientsList() {
  var table =    $('#clients').removeAttr('width').DataTable({
             scrollY:        "300px",
             scrollX:        true,
             scrollCollapse: true,
             paging:         true,
             columnDefs: [
                 { width: 70, targets: 13 }
             ],
             fixedColumns: true,

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
               {data:'nuip_nit'},
               {data:'names'},
               {data:'surnames'},
               {data:'type_document'},
               {data:'company'},
               {data:'address'},
               {data:'phone'},
               {data:'cell_phone'},
               {data:'fax'},
               {data:'email'},
               {data:'city'},
               {data:'departament'},
               {data:'btn'},
                     ]
     });

}


// Datatable de productos

  function productsList() {
              $('#products').DataTable(
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
                        {data:'id'},
                        {data:'name'},

                              ]
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
