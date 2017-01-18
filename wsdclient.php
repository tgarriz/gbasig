<!doctype html>
<html lang="es">
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>Informe de Obra</title>
    <link rel="shortcut icon" type="image/png" href="./app/img/favicon.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link type="text/css" rel="stylesheet" href="./css/app.css" media="all" />-->

</head>

<body>
<?php
require_once('nusoap-0.9.5/lib/nusoap.php');
//parse_str(implode('&', array_slice($argv, 1)), $_GET);
$client = new nusoap_client('http://www.mosp.gba.gov.ar/sistemas/webservices/sigos/server_sws.php?wsdl', 'wsdl');
$err = $client->getError();
if ($err) {
        echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}
else {
        $login = md5('geodesia');
        $pass = md5('geo123');

        $result = $client->call('Obrafim_GetDatosID', array('inp01' => $login,'inp02' => $pass,'id' => $_GET['ido']));
//	$result = $client->call('Obrafim_GetDatosID', array('inp01' => $login,'inp02' => $pass,'id' => 446));
        if ($client->fault) {
                echo '<h2>Fault</h2><pre>'; print_r($result); echo '</pre>';
        } else {
                $err = $client->getError();
                if ($err) {
                        echo '<h2>Error</h2><pre>' . $err . '</pre>';
                } else {
			//print_r($result);
                        echo '<div class="container">';
                        echo '<div class="page-header">';
                        echo '<h4 align="center"><b>' . $result[0]['Obra'] .'</b></h4>';
			echo '<h5 align="left"><b>Avance Financiero:</b> ' . $result[0]['avFciero'] .'</h5>';
			echo '<h5 align="left"><b>ID_PROYECTO:</b> ' . $result[0]['ID_PROYECTO'] .'</h5>';
                        echo '<h5 align="left"><b>Municipio:</b> ' . $result[0]['Municipio'] .'</h5>';
                        echo '<h5 align="left"><b>Fecha Licitacion:</b> ' . $result[0]['Fecha_licitacion'] .'</h5>';
                        echo '<h5 align="left"><b>Observaciones Licitacion:</b> ' . $result[0]['Obs_fecha_licitacion'] .'</h5>';
                        echo '<h5 align="left"><b>Fecha Inicio:</b> ' . $result[0]['Fecha_inicio_obra'] .'</h5>';
                        echo '<h5 align="left"><b>Obs. Fecha Inicio:</b> ' . $result[0]['Obs_fecha_inicio_obra'] .'</h5>';
                        echo '<h5 align="left"><b>Fecha Estimativa de finalizacion:</b> ' . $result[0]['Fecha_est_finaliz'] .'</h5>';
                        echo '<h5 align="left"><b>Barrio:</b> ' . $result[0]['Barrio'] .'</h5>';
                        echo '<h5 align="left"><b>Direccion:</b> ' . $result[0]['Direccion'] .'</h5>';
                        echo '<h5 align="left"><b>Entre:</b> ' . $result[0]['Entre_calles'] .'</h5>';
                        echo '<h5 align="left"><b>Longitud:</b> ' . $result[0]['Longitud'] .'</h5>';
                        echo '<h5 align="left"><b>Superficie:</b> ' . $result[0]['Superficie'] .'</h5>';
                        echo '<h5 align="left"><b>Poblacion del Municipio:</b> ' . $result[0]['Poblacion_municipio'] .'</h5>';
                        echo '<h5 align="left"><b>Poblacion beneficiada:</b> ' . $result[0]['Poblacion_benef_obra'] .'</h5>';
                        echo '<h5 align="left"><b>Generacion de puestos laborales:</b> ' . $result[0]['Gen_puestos_trab_obra'] .'</h5>';
                        echo '<h5 align="left"><b>Archivos:</b> ' . $result[0]['cant_ofi_arch'] .'</h5>';
                        echo '</div>';
                        echo '<div class="list-group">';
			echo '<img src="http://abierto.geobasig.com.ar/theme/barra_inferior.svg" width="100%"/>';
		}
	}
}
?>
<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
</body>
</html>
