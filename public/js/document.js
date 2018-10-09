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
var description= $("#descriptionpermission").val();
var route= "permissions";
var token=$("#token").val();
  $.ajax({
    url:route,
    headers:{'X-CSRF-TOKEN':token},
    type:'POST',
    dataType:'json',
    data:{name:name, display_name:display_name,description:description},
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
      alert(routeA);
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






  $().ready(function() {
    $sidebar = $('.sidebar');

    $sidebar_img_container = $sidebar.find('.sidebar-background');

    $full_page = $('.full-page');

    $sidebar_responsive = $('body > .navbar-collapse');

    window_width = $(window).width();

    $('.fixed-plugin a').click(function(event) {
      // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
      if ($(this).hasClass('switch-trigger')) {
        if (event.stopPropagation) {
          event.stopPropagation();
        } else if (window.event) {
          window.event.cancelBubble = true;
        }
      }
    });

    $('.fixed-plugin .active-color span').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-color', new_color);
      }

      if ($full_page.length != 0) {
        $full_page.attr('filter-color', new_color);
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.attr('data-color', new_color);
      }
    });

    $('.fixed-plugin .background-color .badge').click(function() {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('background-color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-background-color', new_color);
      }
    });

    $('.fixed-plugin .img-holder').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).parent('li').siblings().removeClass('active');
      $(this).parent('li').addClass('active');


      var new_image = $(this).find("img").attr('src');

      if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        $sidebar_img_container.fadeOut('fast', function() {
          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $sidebar_img_container.fadeIn('fast');
        });
      }

      if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $full_page_background.fadeOut('fast', function() {
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          $full_page_background.fadeIn('fast');
        });
      }

      if ($('.switch-sidebar-image input:checked').length == 0) {
        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
      }
    });

    $('.switch-sidebar-image input').change(function() {
      $full_page_background = $('.full-page-background');

      $input = $(this);

      if ($input.is(':checked')) {
        if ($sidebar_img_container.length != 0) {
          $sidebar_img_container.fadeIn('fast');
          $sidebar.attr('data-image', '#');
        }

        if ($full_page_background.length != 0) {
          $full_page_background.fadeIn('fast');
          $full_page.attr('data-image', '#');
        }

        background_image = true;
      } else {
        if ($sidebar_img_container.length != 0) {
          $sidebar.removeAttr('data-image');
          $sidebar_img_container.fadeOut('fast');
        }

        if ($full_page_background.length != 0) {
          $full_page.removeAttr('data-image', '#');
          $full_page_background.fadeOut('fast');
        }

        background_image = false;
      }
    });

    $('.switch-sidebar-mini input').change(function() {
      $body = $('body');

      $input = $(this);

      if (md.misc.sidebar_mini_active == true) {
        $('body').removeClass('sidebar-mini');
        md.misc.sidebar_mini_active = false;

        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

      } else {

        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

        setTimeout(function() {
          $('body').addClass('sidebar-mini');

          md.misc.sidebar_mini_active = true;
        }, 300);
      }

      // we simulate the window Resize so the charts will get updated in realtime.
      var simulateWindowResize = setInterval(function() {
        window.dispatchEvent(new Event('resize'));
      }, 180);

      // we stop the simulation of Window Resize after the animations are completed
      setTimeout(function() {
        clearInterval(simulateWindowResize);
      }, 1000);

    });
  });
