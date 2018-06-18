<?php
if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]){

	$secret="6LfW-iMTAAAAAEt1vxTaYliy47cnm7kpst_tlNuR";
	$ip=$_SERVER["REMOTE_ADDR"];
	$captcha=$_POST["g-recaptcha-response"];
	$result=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
		
	$array=json_decode($result,TRUE);
	
	$nombre = mb_strtoupper($_POST['nombre'], 'UTF-8');
	$correo = $_POST['email'];
	$tel	= $_POST['telefono'];
	$empresa	= mb_strtoupper($_POST['empresa'], 'UTF-8');

	$servidor="mysql508.ixwebhosting.com";
	$usuario="C265935_wmaster";
	$clave="Jovany023";
	$base="C265935_bd_restaurantes";//$base="C265935_bd_restaurantes";
	$row_cnt=0;
	$estado="";

	$conexion=mysql_connect($servidor,$usuario,$clave) or die (mysql_error());
	mysql_select_db($base,$conexion);
	@mysql_query("SET NAMES 'utf8'",$conexion);

	$resultado = mysql_query("SELECT * FROM user_presentacion WHERE email LIKE '%$correo%'", $conexion); 
	
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

			if ($conteo = $mysqli->query("SELECT * FROM user_presentacion ORDER BY nombre")) {
			    /* determinar el número de filas del resultado */
			    $row_cnt = $conteo->num_rows;
			   /*  printf("Result set has %d rows.\n", $row_cnt);
			    cerrar el resultset */
			    $conteo->close();
			}
			/* cerrar la conexión */
			$mysqli->close();
			
			if ($row_cnt > 15) {
				$estado="En espera";
				printf("Estado: $estado, cant: $row_cnt ");
				echo '<script language="javascript">
					alert("¡Cupo lleno!,\nHemos llegado al limite de usuarios, se le pondra en espera de que se encuentre un lugar disponible\nAgradecemos su interes");
					location.href="http://solucionespararestaurantes.mx/presentacion#registrar";
					</script>'; 
			}else{
				$estado="Aprobado";
				printf("Estado: $estado, cant: $row_cnt ");
			}



		$sql="INSERT INTO user_presentacion "."(nombre, email, tel, empresa, interesado, estado) VALUES ('$nombre', '$correo', '$tel', '$empresa','Presentacion Soft Restaurant', '$estado')";	

		$rs=mysql_query($sql,$conexion);

		if($rs){
			echo "<br><br>Registrado con exito<br><br>";			
		}else{
		  	echo "Hay un error en: ".mysql_error();
		  }
		mysql_close($conexion);
	    		
			//Preparamos el mensaje de contacto
		$email_to = "contacto@solucionespararestaurantes.mx";//$email_to = "contacto@solucionespararestaurantes.mx";

		$cabeceras = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$cabeceras .= "From: $email_to\n"."CC: $correo\n";
		$asunto = "Gracias por su reservación";

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
				<br>
				<p style="text-align: center"><span style="color: #CB6220">SOLUCIONES PARA RESTAURANTES</span></p>
				<p style="text-align: center">Agradece tu registro para nuestra presentación de: </p>

				<p style="text-align: center; font-weight: bold"><span style="color: #CB6220">Soft Restaurant</span></p>
				<br>
				<p style="text-align: center">Te esperamos el </p>
				<p style="text-align: center"><b>martes 16</b> de agosto a las <b>11:00 hrs</b></p>
				<p style="text-align: center">en las instalaciones de: </p>
				<p style="text-align: center">National Soft, ubicadas en:</p>
				<br>
				<p style="text-align: center">Calzada del Valle No. 275 local 8, Col. del Valle</p>
				<p style="text-align: center">66220  San Pedro Garza García, Nuevo León</p>

				<p style="text-align: center">Información adicional: (81) 1352 2222 | contacto@solucionespararestaurantes.mx</p>

			</div>
		</body>
		</html>
		';

		mail($email_to, $asunto ,$contenido ,$cabeceras);
		echo '<script language="javascript">
					alert("El registro se realizo exitosamente. Te esperamos");
					location.href="http://www.solucionespararestaurantes.mx";
					</script>'; 
		
		}
	}else{
		echo '<script language="javascript">
			alert("Selecciona el captcha por favor.");
			location.href="http://solucionespararestaurantes.mx/presentacion#registrar";
			</script>'; 
	}

?>