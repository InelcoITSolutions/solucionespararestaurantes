$(document).ready(function(){
	var estado = false;

	$('#btn-toggle').click(function(){
		$('.wrap').slideToggle(1500);

		if (estado == true) {
			$(this).text("Mas detalles");
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
	var edo = false;

	$('#btn-toggle2').click(function(){
		$('.wrap2').slideToggle(1500);

		if (edo == true) {
			$(this).text("Mas detalles");
			edo = false;
		} else {
			$(this).text("Ocultar");
			edo = true;
		}
	});
});

$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".ancla").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1500, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});

