
<!DOCTYPE html>
<html lang="en">
<head>

	<!--meta charset="utf-8" /-->
  <title>Catalogo de productos</title>
  <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/document.css')}}">
</head>
<body>

@include('frond.store.partials.navbar')


<!--inicio slider -->

<div class="container">
	<div class="row">
		<div class="col-md-ofset-4">
			


<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="c-block w-50" src="assets/img/gotica/camtecho.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="c-block w-50" src="assets/img/gotica/camtecho.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="c-block w-50" src="assets/img/gotica/camtecho.jpg" alt="Third slide">
    </div>
  </div>
</div>
		</div>
	</div>

</div>



<!--fin slider -->


<!--section of information-->
<section class="infoContainer">
	<h2 class="text-center">productos en oferta</h2>
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12 col-md-4">
        <img class="img-responsive center-block"src="assets/img/gotica/camtecho.jpg" alt="" style="width: 10rem; height: 10rem">
        <h4>Calidad</h4>
      </div>
      <div class="col-xs-12 col-md-4">
        <img class="img-responsive center-block"  src="assets/img/gotica/camtecho.jpg" alt="" style="width: 10rem; height: 10rem">
        <h4>Envios gratis</h4>
      </div>
      <div class="col-xs-12 col-md-4">
        <img class="img-responsive center-block" src="assets/img/gotica/camtecho.jpg" alt="" style="width: 10rem; height: 10rem">
        <h4>Soporte 24Hs</h4>
      </div>
    </div>

  </div>

</section>
<!--section of information-->



<!-- catalogo-->
<div class="Catalogo" id="catalogo">
  <div class="Titulo">
    <i class="fa fa-window-minimize" aria-hidden="true"></i>
    <h2 class="text-center">Productos Destacados</h2>
    <i class="fa fa-window-minimize" aria-hidden="true"></i>
  </div>
<div class="container ">
  <div class="row">
  	<div class="col-md-4">
        <div class="card text-center" style="width: 18rem;">
  <img class="card-img-top" src="assets/img/gotica/camtecho.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">¿cotizar?</a>
  </div>
  <div class="card-footer text-muted">
    visto hace 2 horas
  </div>
</div>
	</div>

	<div class="col-md-4">
    <div class="card text-center" style="width: 18rem;">
  <img class="card-img-top" src="assets/img/gotica/camtecho.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">¿cotizar?</a>
  </div>
  <div class="card-footer text-muted">
    visto hace 2 horas
  </div>
</div>
</div>


<div class="col-md-4">
  <div class="card text-center" style="width: 18rem;">
  <img class="card-img-top" src="assets/img/gotica/camtecho.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">¿cotizar?</a>
  </div>
  <div class="card-footer text-muted">
    visto hace 2 horas
  </div>
</div>
</div>

  </div>

</div>

  </div>
</div>




<!-- fin catalogo-->

<script src="plugins/jquery/js/jquery-3.3.1.js"></script>
<script type="" src="plugins/bootstrap/js/bootstrap.js"></script>
 
 

</body>
</html>