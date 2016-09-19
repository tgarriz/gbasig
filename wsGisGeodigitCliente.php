<?php

require_once('nusoap-0.9.5/lib/nusoap.php');
session_name('gis');
session_start();


	
	//TODO: acá van las variables ingersadas en el login	
	$user = $_GET['user'];
	$pass = $_GET['pass'];
		
	
	//$serverURL = 'http://10.46.3.14/web_geodesia';
	$serverURL = 'http://www.mosp.gba.gov.ar/web_geodesia';
	$serverScript = 'wsGisGeodigit.php'; 
	$metodoALlamar = 'profesionalRegistrado';
	$cliente = new nusoap_client ( "$serverURL/$serverScript?wsdl", 'wsdl' );
	$error = $cliente->getError ();
	if ($error) {
		echo "entreo por error en el if cliente";
		$error = 0;
	} else {
		$result = $cliente->call ("$metodoALlamar", 
					array (	'user' => $user,					
						'pass' => $pass
						) 
					 );
		//echo "el result es ".$result;
		$error = !$result;
	}
							
	//echo "el error es";
//	echo $error;
	//TODO: acciones a realizar
	if (!$error) {
//		echo "Debe guardarse en una variable de sesion el usaurio y redirigirlo";
		$_SESSION['usuarioRegstrado'] = true; //TODO: en el código de descarga preguntar por la variable de sesion
		$src = "http://abierto.geobasig.com.ar";

		
	} else {
		echo "Debe redirigirse al login con un mensaje de error (alert)";
		//$src = "esteEsElLogin.php?loginFallido=si";
		
	}
	
	//TODO: Redireccion
	echo "<script language=\"JavaScript\">";
	echo " window.location = \"$src\";";
	echo "</script>";
	
	
	
	
/*	echo "<br>result: $result";
	echo "<pre>";
	echo var_dump($result);
	echo "</pre>";	

	echo '<h2>Request</h2>';
	echo '<pre>' . htmlspecialchars($cliente->request, ENT_QUOTES) . '</pre>';
	echo '<h2>Response</h2>';
	echo '<pre>' . htmlspecialchars($cliente->response, ENT_QUOTES) . '</pre>';

	// Display the debug messages
	echo '<h2>Debug</h2>';
	echo '<pre>' . htmlspecialchars($cliente->debug_str, ENT_QUOTES) . '</pre>';
*/									
	
?>
