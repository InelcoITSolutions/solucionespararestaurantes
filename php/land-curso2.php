<?php
if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]){

	$secret="6LfW-iMTAAAAAEt1vxTaYliy47cnm7kpst_tlNuR";
	$ip=$_SERVER["REMOTE_ADDR"];
	$captcha=$_POST["g-recaptcha-response"];
	$result=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
		
	$array=json_decode($result,TRUE);
	
	$nombre = mb_strtoupper($_POST['nombre'], 'UTF-8');
	$correo = $_POST['correo'];	

	$servidor="mysql508.ixwebhosting.com";
	$usuario="C265935_wmaster";
	$clave="Jovany023";
	$base="C265935_bd_restaurantes";//$base="C265935_bd_restaurantes";


	$email_to = "contacto@solucionespararestaurantes.mx";//$email_to = "contacto@solucionespararestaurantes.mx";

		$cabeceras = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$cabeceras .= "From: $email_to\n"."CC: $correo\n";
		$asunto = "Gracias por su registro";

		$contenido='
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>Soluciones para restaurantes</title>
		</head>
		<body style="font-family: sans-serif; color: #555; font-size: 1.2em">
			<div style="background-color:#fff; margin: 0px 7%;">
				<img src="http://solucionespararestaurantes.mx/images/banner-presentacion.png" alt="Soluciones para Restaurantes" width="100%">
			</div>
			<div style="margin-bottom: 2em">
				<p style="text-align: center">'.$nombre.' buen día</p>				
				<p style="text-align: center"><span style="color: #CB6220">SOLUCIONES PARA RESTAURANTES</span></p>
				<p style="text-align: center">Agradece tu registro en nuestra pagina</p>				
				<br>
				<p style="text-align: center">De ahora en adelante recibiras notificaciones</p>
				<p style="text-align: center"><b>de cada uno de los eventos que iremos realizando</p>
				
				<br>				

				<p style="text-align: center">Información adicional: (81) 1352 2222 | contacto@solucionespararestaurantes.mx</p>

			</div>
		</body>
		</html>
		';


	$conexion=mysql_connect($servidor,$usuario,$clave) or die (mysql_error());
	mysql_select_db($base,$conexion);
	@mysql_query("SET NAMES 'utf8'",$conexion);

	$resultado = mysql_query("SELECT * FROM usuarios_post_curso WHERE Correo LIKE '%$correo%'", $conexion); 
	
	if ($row = mysql_fetch_array($resultado)){
		echo '<script language="javascript">
			alert("Ya hay un usuario registrado con el correo ingresado.");
			location.href="http://www.solucionespararestaurantes.mx/presentacion#registrar";
			</script>'; 
		}else{

			$mysqli = new mysqli("$servidor", "$usuario", "$clave", "$base");
			/* verificar la conexión */
			if (mysqli_connect_errno()) {
			    printf("Conexión fallida: %s\n", mysqli_connect_error());
			    exit();
			}

			



		$sql="INSERT INTO usuarios_post_curso "."(Nombre, Correo) VALUES ('$nombre', '$correo')";	

		$rs=mysql_query($sql,$conexion);

		if($rs){
			/*echo "<br><br>Registrado con exito<br><br>";	*/		
		}else{
		  	echo "Hay un error en: ".mysql_error();
		  }
		mysql_close($conexion);
	    		
			//Preparamos el mensaje de contacto
		
		echo '<script language="javascript">
				alert("El registro se realizo exitosamente");
				location.href="http://www.solucionespararestaurantes.mx";
				</script>';
				mail($email_to, $asunto ,$contenido ,$cabeceras); 		
		}
	}else{
		echo '<script language="javascript">
			alert("Selecciona el captcha por favor.");
			location.href="http://solucionespararestaurantes.mx/curso";
			</script>'; 
	}

?>