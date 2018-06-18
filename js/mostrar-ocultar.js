$(document).ready(function(){
	var estado = false;

	$('#uno').click(function(){
		$('#texto-oculto').slideToggle(700);

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


$(document).ready(function(){
	var estado = false;

	$('.nosotros-a2').click(function(){
		$('#texto-oculto2').slideToggle(700);

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


$(document).ready(function(){
	var estado = false;

	$('.nosotros-a3').click(function(){
		$('#texto-oculto3').slideToggle(700);

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