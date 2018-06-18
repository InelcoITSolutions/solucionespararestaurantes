<?php
	if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]){
	
		$secret="6LfW-iMTAAAAAEt1vxTaYliy47cnm7kpst_tlNuR";
		$ip=$_SERVER["REMOTE_ADDR"];
		$captcha=$_POST["g-recaptcha-response"];
		$result=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
		
		$array=json_decode($result,TRUE);
		echo"<br>";
		echo"<br>";
		if ($array["success"]) {
			
			$nombre = $_POST["nombre"];
    		$email = $_POST["email"];
    		$tel = $_POST["telefono"];
    		$emp = $_POST["empresa"];
    		$mensaje = $_POST["comment"];
    		
		//Preparamos el mensaje de contacto
		$cabeceras = "From: $email\n"."CC: $email\n";
		$asunto = "Contacto desde www.solucionespararestaurantes.mx"; //asunto aparecera en la bandeja del servidor de correo
		$email_to = "contacto@solucionespararestaurantes.mx"; //cambiar por tu email
		$contenido = "Se ha enviado un mensaje desde la pagina solucionespararestaurantes.mx\n"
		. "\n"
		. "Nombre: $nombre\n"
		. "Email: $email\n"
		. "Telefono: $tel\n"
		. "Empresa: $emp\n"
		. "Mensaje: $mensaje\n"
		. "\n";


		mail($email_to, $asunto ,$contenido ,$cabeceras);
		echo '<script language="javascript">
		alert("Su mensaje ha sido enviado. Gracias");
		location.href="http://www.solucionespararestaurantes.mx";
		</script>'; 

		}else{
			echo "Eres Spam";
		}
	}else{
		echo '<script language="javascript">
			alert("Selecciona el captcha por favor.");
			location.href="http://solucionespararestaurantes.mx/contacto";
			</script>'; 
	}
?>