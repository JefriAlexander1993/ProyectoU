$(document).ready(function()
{
	$(".btn-update-item").on('click', (e) => {
		e.preventDefault();

		
		var id = $(this).data('id');
		var href = $(this).data('href');
		var quantity = $('#producto_'+ id).val();
		
		


		
		

		//window.location.href= href + "/" + quantity;
		//window.location.href= e.target.dataset.href;//ref + "/" + quantity;
	
	});

	
	$("#false").on('click',(e)=>{
		
		sessionStorage.respuestaModal=true;
		
	});	
	if(!sessionStorage.respuestaModal){
	$("#modalInicio").modal("show");}
	

});