
	
$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var name=$('#name'+id).text();
		var email=$('#email'+id).text();

		$('#name').val(name);
		$('#email').val(email);
	
	});
});