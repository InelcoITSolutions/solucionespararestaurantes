$(document).ready(function(){
	var estado = false;

	$('#mostrar-otm').click(function(){
		$('.mas-caract').slideToggle(700);

		if (estado == true) {
			$(this).text("Mostrar más");
			/*$('body').css({
				"overflow": "auto"
			});*/
			estado = false;
		} else {
			$(this).text("Ocultar");
			/*$('body').css({
				"overflow": "hidden"
			});*/
			estado = true;
		}
	});
});