
	$(".btn-update-item").on('click', (e) => {
		e.preventDefault();

		console.log(e);
		console.log(this);
		console.log($('#producto_').val());
		var id = $(this).data('id');
		var href = $(this).data('href');
		var quantity = $('#producto_'+ id).val();
		console.log('id'.id);
		console.log('href'.href);u
		


		console.log('cantidad'.quantity);
		

		//window.location.href= href + "/" + quantity;
		//window.location.href= e.target.dataset.href;//ref + "/" + quantity;
	
	});*/
});