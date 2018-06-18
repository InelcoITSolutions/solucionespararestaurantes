<?php
$nombre = mb_strtoupper($_POST['nombre'], 'UTF-8');
$correo = $_POST['correo'];
$tel1	= $_POST['tel1'];
$cel	= $_POST['tel2'];
$empresa	= mb_strtoupper($_POST['emp'], 'UTF-8');
$direccion	= mb_strtoupper($_POST['direc'], 'UTF-8');
$observaciones = mb_strtoupper($_POST['obser'], 'UTF-8');

if (isset($_POST['enviar'])){
    if (is_array($_POST['g_check'])) {
        $hard_selected = '';
        $num_equipo = count($_POST['g_check']);
        $current = 0;
        foreach ($_POST['g_check'] as $key => $value) {
            if ($current != $num_equipo-1)
                $hard_selected .= $value.', ';
            else
                $hard_selected .= $value.'.';
            $current++;
        }
    }
    else {
        $hard_selected = " ";
    }/*
    echo '<div>Has seleccionado: '.$hard_selected.'</div>';*/


    if (is_array($_POST['g2_check'])) {
        $soft_selected = '';
        $num_equipo = count($_POST['g2_check']);
        $current = 0;
        foreach ($_POST['g2_check'] as $key => $value) {
            if ($current != $num_equipo-1)
                $soft_selected .= $value.', ';
            else
                $soft_selected .= $value.'.';
            $current++;
        }
    }
    else {
        $soft_selected = ' ';
    }
    /*echo '<div>Has seleccionado: '.$soft_selected.'</div>';

    echo '<div>Has seleccionado: '.$hard_selected.' y de software '.$soft_selected.'</div>';*/


    if (is_array($_POST['g3_check'])) {
        $serv_selected = '';
        $num_equipo = count($_POST['g3_check']);
        $current = 0;
        foreach ($_POST['g3_check'] as $key => $value) {
            if ($current != $num_equipo-1)
                $serv_selected .= $value.', ';
            else
                $serv_selected .= $value.'.';
            $current++;
        }
    }
    else {
        $serv_selected = ' ';
    }
    /*echo '<div>Has seleccionado: '.$serv_selected.'</div>';

    echo '<div>Has seleccionado: '.$hard_selected.' y de software '.$soft_selected.' y de servicios '.$serv_selected.'</div>';*/

    $servidor="mysql508.ixwebhosting.com";
	$usuario="C265935_wmaster";
	$clave="Jovany023";
	$base="C265935_bd_restaurantes";
	//mysql_set_charset("SET NAMES 'utf8'");


	$conexion=mysql_connect($servidor,$usuario,$clave) or die (mysql_error());
	mysql_select_db($base,$conexion);
	@mysql_query("SET NAMES 'utf8'",$conexion);
	//$tildes = $conexion->query("SET NAMES 'utf8'");


	$sql="INSERT INTO usuarios_interesados "."(Nombre, Correo, Telefono_1, Telefono_2, Empresa, Direccion, Equipo, Software, Servicios, Observaciones) VALUES ('$nombre', '$correo', '$tel1', '$cel', '$empresa', '$direccion','$hard_selected', '$soft_selected','$serv_selected','$observaciones')";

	$rs=mysql_query($sql,$conexion);

	if($rs){
		echo "<br><br>Registrado con exito<br><br>";
		/*echo '<script language="javascript">
			alert("Su mensaje ha sido enviado. Gracias");
			location.href="http://www.solucionespararestaurantes.mx/registro.html";
			</script>'; */
		
	}else{
	  	echo "Hay un error en: ".mysql_error();
	  }
	mysql_close($conexion);
    		
		//Preparamos el mensaje de contacto
$email_to = "contacto@solucionespararestaurantes.mx";

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= "From: $email_to\n"."CC: $correo\n";
$asunto = "Gracias por visitarnos en la Expo Proveedores del Restaurante";

$contenido='
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Soluciones para restaurantes</title>
</head>
<body style="font-family: sans-serif; padding: 0 30px; color: #555">
	<div style="background-color:#CB6220">
		<img src="http://solucionespararestaurantes.mx/imagenes/spr_logo_tb(1).png" alt="Soluciones para Restaurantes" width="320" height="40" style="padding: 15px 10px;">
		<img src="http://solucionespararestaurantes.mx/imagenes/softrestaurant.png" alt="Soft Restaurant" width="208" height="60" style="padding: 10px 10px; float: right">
	</div>
	<div style="margin-bottom: 2em">
		<h1 style="text-align: left">Soft Restaurant - Expo Proveedores del Restaurante </h1>
		<p style="padding-left: 40px; margin-top: 4em">'.$empresa.'</p>
		<p style="padding-left: 40px">Buen día '.$nombre.'.</p>
		<p style="padding-left: 40px">La Expo Proveedores del Restaurante en Cintermex es la exposición más importante del noreste del país, en la que participan los fabricantes y marcas más reconocidos dedicados a ofrecer soluciones para la industria gastronómica.</p>

		<p style="padding-left: 40px">Agradecemos tu visita a nuestro stand de Soft Restaurant | Soluciones para Restaurantes, que nos permite poner a tu disposición nuestras soluciones de software, hardware y servicios especializados.</p>

		<p style="padding-left: 40px">Hemos tomado nota de tus requerimientos y en breve nos pondremos en contacto contigo.</p>

		<p style="padding-left: 40px">Visita nuestro sitio <a href="http://www.solucionespararestaurantes.mx/" title="Nuestro sitio: solucionespararestaurantes.mx">www.solucionespararestaurantes.mx</a>, donde ofrecemos soluciones de tecnología y consultoría de negocios para restaurantes, bares y hoteles:</p>
		<ul style="padding-left: 110px">
			<li>National Soft: Soft Restaurantes | On The Minute | Soft Facturas | NS Hoteles</li>
			<li>EC Line: Terminales touchscreen, monitores, impresoras de ticket y etiquetas, impresoras portátiles, cajones de dinero, lectores de códigos de barras y de banda magnética.</li>
			<li>Servicios: Implementación, asesoría, consultoría, capacitación y soporte.</li>
		</ul>
		<p style="padding-left: 40px">Quedamos a tus órdenes. </p>
		<br>
		<p style="padding-left: 40px; line-height: 1"><b>Lic. Javier Jasso Salazar</b></p>
		<p style="padding-left: 40px; line-height: 1"><b>SOLUCIONES PARA RESTAURANTES</b></p>

	</div>

	<div style="padding-left: 80px; color: #666">
        <p>Edificio Cintermex</p>
        <p>Av. Fundidora No. 501 Int. 18</p>
        <p>64010  Monterrey, N.L</p>
        <p>(81) 1352 2020</p>
        <br>
        <p>Mariano Otero N° 610 Int.3</p>
        <p>Tequisquiapan</p>
        <p>78250 San Luis Potosi</p>
        <p>(444) 211 9009</p>
        <br>
        <p style="padding-bottom: 2em">www.solucionespararestaurantes.mx  |  contacto@solucionespararestaurantes.mx </p>
        <br>
    </div>


	<div style="background-color:#CB6220; padding:40px 40px;">		
		<a href="http://www.solucionespararestaurantes.mx/" title="Nuestro sitio: solucionespararestaurantes.mx" style="text-decoration: none; color: #fff ">www.solucionespararestaurantes.mx</a>
		
		<div style=" float: right">
			<a href="https://es-la.facebook.com/softrest/" title="Facebook Soluciones Para Restaurantes"><img src="http://solucionespararestaurantes.mx/images/facebook-circle.png" alt="Soft Restaurant" width="53px" height="53px"></a>
			<a href="https://twitter.com/SolucionesRest" title="Twitter Soluciones Para Restaurantes"><img src="http://solucionespararestaurantes.mx/images/twitter-circle.png" alt="Soft Restaurant" width="50px" height="50px"></a>
			<a href="https://plus.google.com/102598431903690019277" title="Google+ Soluciones Para Restaurantes"><img src="http://solucionespararestaurantes.mx/images/google-circle.png" alt="Soft Restaurant" width="50" height="50" ></a>
		</div>
	</div>
</body>
</html>
';

		mail($email_to, $asunto ,$contenido ,$cabeceras);

		echo '<script language="javascript">
			alert("Su mensaje ha sido enviado. Gracias");
			location.href="http://www.solucionespararestaurantes.mx/registro.html";
			</script>'; 
}


/*$link = mysqli_connect("localhost", "root", "jovany");
mysqli_select_db($link, "test-restaurantes");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente

if (mysqli_query($link, "INSERT INTO registro VALUES ($nombre, $correo, $tel1, $cel, $empresa, $direccion,$hard_selected, $soft_selected,$serv_selected,$observaciones)")) {
	echo '<div>Se insertaron los datos correctamente</div>';

    echo '<div>Has seleccionado de <b>hardware:</b> '.$hard_selected.', <b>de software</b> '.$soft_selected.' y de <b>servicios</b> '.$serv_selected.'</div>';
    mysqli_close($link); // Cerramos la conexion con la base de datos
}else{
	echo 'hay un error en: ';
	echo mysql_error();
	echo '<div>Has seleccionado: '.$hard_selected.' y de software '.$soft_selected.' y de servicios '.$serv_selected.' nombre: '.$nombre.'</div>';
}*/




	

?>