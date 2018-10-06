

$(document).ready(function() {
    listUsers();
         });


// Datatable de Clientes
 $(document).ready(function() {
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
              });


// Datatable de productos

             $(document).ready(function() {
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
              });


// Datatable de ventas
     $(document).ready(function() {
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
              });



// Datatable de usuarios
function listUsers(){
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
                    {
                      data:null,
                      defaultContent:"<div class='td-actions text-right'><div class='row'><div class='col-sm-4'><button type='button'  class='editar btn btn-info btn-lg '><i class='far fa-hand-pointer'></i></button></div>	<div class='col-sm-4'><button type='button' class='ver btn btn-secunday btn-lg'><i class='fas fa-eye'></i></button></div>	<div class='col-sm-4'><button type='button' class='eliminar btn btn-danger btn-lg' onclick='eliminarUsers()' ><i class='fas fa-trash-alt' ></i></button></div></div></div></div>"

                    },


                          ]
          });

          data_edit("#users tbody", table);
          data_show("#users tbody", table);
          data_delete("#users tbody", table);

}





              var modificar = function(){
                $("#formuser").on("submit", function(e){
                  alert("se guardo.");

                  e.preventDefault();
                  var frm=$(this).serialize();
                  console.log(frm);

                });
              }

              //Estrae la información de la tabla para editar.

              var data_edit =  function(tbody , table){

              $(tbody).on("click", "button.editar", function(){
                var data= table.row($(this).parents("tr")).data();
                var iduser =$("#idusuarioedit").val(data.id);
                var name=$("#name").val(data.name);
                var email=$("#email").val(data.email);


              });
              }

              //Estrae la información de la tabla para ver.

              var data_show =  function(tbody , table){

              $(tbody).on("click", "button.ver", function(){
                var data= table.row($(this).parents("tr")).data();
                    var  name =$("#showname").val(data.name);
                    var  email =$("#showemail").val(data.email);



              });
              }

              // Estrae el id del usuario de una columan especifica para eliminar

              var data_delete =  function(tbody , table){

              $(tbody).on("click", "button.eliminar", function(){

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

              //Limpiar los campos
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



     // Datatable de roles
     $(document).ready(function() {
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
                        {
                          data:null,
                          defaultContent:"<div class='td-actions text-right'><div class='row'><div class='col-sm-4'><button type='button'  class='editar btn btn-info btn-lg '><i class='far fa-hand-pointer'></i></button></div>	<div class='col-sm-4'><button type='button' class='ver btn btn-secunday btn-lg'><i class='fas fa-eye'></i></button></div>	<div class='col-sm-4'><button type='button' class='eliminar btn btn-danger  btn-lg' data-toggle='modal' data-target='#modalEliminar' ><i class='fas fa-trash-alt' ></i></button></div></div></div></div>"

                        },
                              ]
              });
              data_editRole("#roles tbody", tablerole);
              data_showRole("#roles tbody", tablerole);
              });

              // Carga datos a la vista en el formulario para editar

              var data_editRole =  function(tbody , table){

              $(tbody).on("click", "button.editar", function(){
                var data= table.row($(this).parents("tr")).data();
                var name=$("#namerole").val(data.name);
                var display_name=$("#display_name").val(data.display_name);
                var description=$("#description").val(data.description);

              });
              }


              //Estrae la información de la tabla para ver.

              var data_showRole =  function(tbody , table){

              $(tbody).on("click", "button.ver", function(){
                var data= table.row($(this).parents("tr")).data();
                    var  name =$("#showname").val(data.name);
                    var  display_name =$("#showdisplay_name").val(data.display_name);
                    var  description =$("#showdescription").val(data.description);
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
     $(document).ready(function() {
         $('#permissions').DataTable({

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
                        {
                          data:null,
                          defaultContent:"<div class='td-actions text-right'><div class='row'><div class='col-sm-4'><button type='button'  class='editar btn btn-info btn-lg '><i class='far fa-hand-pointer'></i></button></div>	<div class='col-sm-4'><button type='button' class='ver btn btn-secunday btn-lg'><i class='fas fa-eye'></i></button></div>	<div class='col-sm-4'><button type='button' class='eliminar btn btn-danger  btn-lg' data-toggle='modal' id='btn-confirm' data-target='#modalEliminar' ><i class='fas fa-trash-alt' ></i></button></div></div></div></div>"

                        },
                              ]
              });
              });
