<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header " >
          <button type="button" class="close " data-dismiss="modal">&times;</button>
          <h2 class="modal-title" align="center" style="color:#000"><STRONG>VENTANA DE CONFIRMACIÓN.</STRONG></h2>
        </div>
        <div class="modal-body">

            <img  style="width:200px;height:200px;display:block;margin:auto;" class="profile-img-card" src="{{asset('images/aviso.png')}}" />
       
          <p align="center"><h4 style="color:red" align="center">Desea cerrar sesión?</h4></p>
        </div>
        <div class="modal-footer" >
        <button type="button" class="btn btn-default btn-sm  pull-left" data-dismiss="modal"><strong><i class="fas fa-arrow-left"></i></strong></button>
           <a  type ="button "  class ="btn btn-danger btn-sm pull-right"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-power-off"></i><span> </span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        </div>
      </div>
      
    </div>
  </div>