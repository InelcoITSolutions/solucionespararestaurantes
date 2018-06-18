<?php
	
		
			$version = $_POST["version"];
			$nombre = $_POST["nombre"];
    		$email = $_POST["email"];
    		$emp = $_POST["empresa"];
    		$tel = $_POST["telefono"];
    		$mensaje = $_POST["comment"];
    	
    		
    	//Preparamos el mensaje de contacto
		$cabeceras = "From: $email\n"."CC: $email\n";
		$asunto = "Soluciones para Restaurantes | Actualizacion de SoftRestaurant"; //asunto aparecera en la bandeja del servidor de correo
		$email_to = "contacto@solucionespararestaurantes.mx"; //cambiar por tu email
		$contenido = "Gracias por contactarnos.\n"
		. "\n"
		. "Buen dia $nombre. \nHemos recibido sus datos de contacto por su interes en la promocion de actualizacion con un costo de $version\n"
		. "\n"
		. "Sus datos personales\n"
		. "Contacto: $nombre\n"
		. "Email:    $email\n"
		. "Telefono: $tel\n"
		. "Empresa:  $emp\n"
		. "Su mensaje: $mensaje\n"
		. "\n"
		. "En breve uno de nuestos Asesores se pondra en contacto con usted.\n"
		. "\n"
		. "Inelco | Soluciones para Restaurantes\n"
		. "\n"
		. "			Edificio Cintermex local 18PB\n"
		. "			64010 Monterrey, NL\n"
		. "			 (81) 1352 2222\n"
		. "\n"
		. "			Mariano Otero N°610 local 3PB\n"
		. "			Tequisquiapan\n"
		. "			78250 San Luis Potosí, SLP\n"
		. "			(444) 211 9009 \n"
		. "\n"
		. "contacto@solucionespararestaurantes.mx | www.solucionespararestaurantes.mx\n"
		."\n"
		. "Siguenos en:\n"
		. "https://www.facebook.com/softrest | @SolucionesRest\n"
		. "\n";


		mail($email_to, $asunto ,$contenido ,$cabeceras);
		echo '<script language="javascript">
		alert("Su mensaje ha sido enviado. Hemos enviado una notificacion a su correo, verifique en el apartado de correos no deseados o spam. Gracias!");
		location.href="http://www.solucionespararestaurantes.mx";
		</script>'; 
		
		
?>