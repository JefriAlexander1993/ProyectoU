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
    var tableclient = $('#clients').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ Registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "autoWidth": true,
        "serverSide": true,
        "ajax": "api/clients/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'nuip'
        }, {
            data: 'name'
        }, {
            data: 'phone'
        }, {
            data: 'address'
        }, {
            data: 'email'
        }, ],
    });
}
// Datatable de productos
function productsList() {
    var tableProduct = $('#products').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/products/all",
        "columns": [{
            data: 'code'
        }, {
            data: 'name'
        }, {
            data: 'description'
        }, {
            data: 'unit_price'
        }, {
            data: 'sale_price'
        }, {
            data: 'quantity'
        }, {
            data: 'stockmin'
        }, ]
    });
}
// Datatable de ventas
function salesList() {
    $('#sales').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/sales/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'totalsale'
        }, {
            data: 'created_at'
        }, ]
    });
}
// Datatable de usuarios
function usersList() {
    var table = $('#users').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/users/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'name'
        }, {
            data: 'email'
        }, ]
    });
}
//Estrae la información de la tabla para editar.
var data_edit = function(tbody, table) {
    $(tbody).on("click", "#editUser", function() {
        var data = table.row($(this).parents("tr")).data();
        var iduser = $("#idusuarioedit").val(data.id);
        var name = $("#name").val(data.name);
        var email = $("#email").val(data.email);
    });
}
//Estrae la información de la tabla para ver.
var data_show = function(tbody, table) {
    $(tbody).on("click", "#showUser", function() {
        var data = table.row($(this).parents("tr")).data();
        var name = $("#showname").val(data.name);
        var email = $("#showemail").val(data.email);
    });
}
// Estrae el id del usuario de una columan especifica para eliminar
var data_delete = function(tbody, table) {
    $(tbody).on("click", "#deleteUser", function() {
        var data = table.row($(this).parents("tr")).data();
        var iduser = $("#idusuarioedit").val(data.id);
    });
}
// Estrae el id del usuario de una columan especifica para editar
// Hacer esconder una etiqueta.
function esconde_div() {
    var elemento = document.getElementById("usersvisible");
    elemento.style.display = 'none';
}
//Limpiar los campos cuando cambio de botón
$(document).ready(function() {
    $('#create-form').on('click', function() {
        var name = $("#name").val('');
        var email = $("#email").val('');
    });
});
$(document).ready(function() {
    $('#show-form').on('click', function() {
        var name = $("#showname").val('');
        var email = $("#showemail").val('');
    });
});
$(document).ready(function() {
    $('#edit-form').on('click', function() {
        var name = $("#name").val('');
        var email = $("#email").val('');
    });
});
//Limpiar los campos cuando cambio de botón role
$(document).ready(function() {
    $('#create-form').on('click', function() {
        var name = $("#nameRole").val('');
        var display_name = $("#display_nameRole").val('');
        var description = $("#descriptionRole").val('');
    });
});
$(document).ready(function() {
    $('#show-form').on('click', function() {
        var name = $("#showRolename").val('');
        var display_name = $("#showRoledisplay_name").val('');
        var description = $("#showRoledescription").val('');
    });
});
$(document).ready(function() {
    $('#edit-form').on('click', function() {
        var name = $("#nameRoleEdit").val('');
        var display_name = $("#display_nameRoleEdit").val('');
        var description = $("#descriptionRoleEdit").val('');
    });
});
// Datatable de roles
function rolesList() {
    var tablerole = $('#roles').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/roles/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'name'
        }, {
            data: 'display_name'
        }, {
            data: 'description'
        }, ],
    });
    data_editRole("#roles tbody", tablerole);
    data_showRole("#roles tbody", tablerole);
    data_deleteRole("#roles tbody", tablerole);
}
var data_deleteRole = function(tbody, tablerole) {
    $(tbody).on("click", "#deleteRole", function() {
        var data = tablerole.row($(this).parents("tr")).data();
        var idrole = $("#idrole").val(data.id);
        id = $("#idrole").val();
    });
}
// Carga datos a la vista en el formulario para editar
var data_editRole = function(tbody, tablerole) {
    $(tbody).on("click", "#editRole", function() {
        var data = tablerole.row($(this).parents("tr")).data();
        var name = $("#idrole").val(data.id);
        var name = $("#nameRoleEdit").val(data.name);
        var display_name = $("#display_nameRoleEdit").val(data.display_name);
        var description = $("#descriptionRoleEdit").val(data.description);
    });
}
//Estrae la información de la tabla para ver.
var data_showRole = function(tbody, tablerole) {
    $(tbody).on("click", "#showRole", function() {
        var data = tablerole.row($(this).parents("tr")).data();
        var name = $("#showRolename").val(data.name);
        var display_name = $("#showRoledisplay_name").val(data.display_name);
        var description = $("#showRoledescription").val(data.description);
    });
}
//Limpiar los campos
$(document).ready(function() {
    $('#create-form-rol').on('click', function() {
        var name = $("#namerole").val('');
        var email = $("#display_name").val('');
        var email = $("#description").val('');
    });
});
$(document).ready(function() {
    $('#show-form-rol').on('click', function() {
        var name = $("#showname").val('');
        var email = $("#showdisplay_name").val('');
        var email = $("#showdescription").val('');
    });
});
$(document).ready(function() {
    $('#edit-form-rol').on('click', function() {
        var name = $("#namerole").val('');
        var email = $("#display_name").val('');
        var email = $("#description").val('');
    });
});
// Datatable de permisos
function permissionsList() {
    var tablePermission = $('#permissions').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/permissions/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'name'
        }, {
            data: 'display_name'
        }, {
            data: 'description'
        }, ]
    });
}
// Datatable de comentarios
function commentsList() {
    var tabletcomment = $('#commentaries').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/commentaries/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'name'
        }, {
            data: 'email'
        }, {
            data: 'body'
        }, {
            data: 'btn'
        }, ]
    });
    data_showcomment("#commentaries tbody", tabletcomment)
}
//Estrae la información de la tabla para ver.
var data_showcomment = function(tbody, tabletcomment) {
    $(tbody).on("click", "#showcommentary", function() {
        var data = tabletcomment.row($(this).parents("tr")).data();
        var name = $("#shownamecomment").val(data.name);
        var email = $("#showemailcomment").val(data.email);
        var description = $("#showdescriptioncomment").val(data.body);
    });
}
// Datatable de role_user
function role_userList() {
    var tableroleuser = $('#users_roles').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/users_roles/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'user_id'
        }, {
            data: 'role_id'
        }, {
            data: 'btn'
        }, ]
    });
    data_editasignacionrole("#users_roles tbody", tableroleuser);
    data_showasignacionrole("#users_roles tbody", tableroleuser);
    data_deleteasignacionrole("#users_roles tbody", tableroleuser);
}
//Estrae la información de la tabla para editar asignación.
var data_editasignacionrole = function(tbody, tableroleuser) {
    $(tbody).on("click", "#editrole_User", function() {
        var data = tableroleuser.row($(this).parents("tr")).data();
        var id = $("#iduroleasigancionedit").val(data.id);
        var user_id = $("#user_idedit").val(data.user_id);
        var role_id = $("#role_idedit").val(data.role_id);
    });
}
//Estrae la información de la tabla para ver.
var data_showasignacionrole = function(tbody, tableroleuser) {
    $(tbody).on("click", "#showrole_User", function() {
        var data = tableroleuser.row($(this).parents("tr")).data();
        var name = $("#showiduser").val(data.user_id);
        var email = $("#showidrole").val(data.role_id);
    });
}
// Estrae el id del usuario de una columan especifica para eliminar
var data_deleteasignacionrole = function(tbody, tableroleuser) {
    $(tbody).on("click", "#deleterole_User", function() {
        var data = tableroleuser.row($(this).parents("tr")).data();
        var id = $("#iduroleasigancionedit").val(data.id);
    });
}
// Datatable de role_user
function role_permissionList() {
    var tablerolepermission = $('#role_permission').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/roles_permissions/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'role_id'
        }, {
            data: 'permission_id'
        }, {
            data: 'btn'
        }, ]
    });
    data_editasignacionpermission("#role_permission tbody", tablerolepermission);
    data_showasignacionpermission("#role_permission tbody", tablerolepermission);
    data_deleteasignacionpermission("#role_permission tbody", tablerolepermission);
}
var data_editasignacionpermission = function(tbody, tablerolepermission) {
    $(tbody).on("click", "#editrolepermission", function() {
        var data = tablerolepermission.row($(this).parents("tr")).data();
        var id = $("#idasignacionpermissionedit").val(data.id);
        var user_id = $("#permission_idedit").val(data.permission_id);
        var role_id = $("#role_idedit").val(data.role_id);
    });
}
//Estrae la información de la tabla para ver.
var data_showasignacionpermission = function(tbody, tablerolepermission) {
    $(tbody).on("click", "#showrolepermission", function() {
        var data = tablerolepermission.row($(this).parents("tr")).data();
        var name = $("#showidapermission").val(data.permission_id);
        var email = $("#showidarole").val(data.role_id);
    });
}
// Estrae el id del usuario de una columan especifica para eliminar
var data_deleteasignacionpermission = function(tbody, tablerolepermission) {
    $(tbody).on("click", "#deleterolepermission", function() {
        var data = tablerolepermission.row($(this).parents("tr")).data();
        var id = $("#idasignacionpermissionedit").val(data.id);
    });
}
// Datatable de purchase
function purchaseList() {
    $('#purchases').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "serverSide": true,
        "ajax": "api/purchases/all",
        "columns": [{
            data: 'id'
        }, {
            data: 'created_at'
        }, {
            data: 'totalpurchase'
        }, ]
    });
}