<?php
require_once('nusoap-0.9.5/lib/nusoap.php');
//parse_str(implode('&', array_slice($argv, 1)), $_GET);
$client = new nusoap_client('http://www.mosp.gba.gov.ar/sistemas/webservices/sigos/server_sws.php?wsdl', 'wsdl');
$err = $client->getError();
if ($err) {
        echo $err;
}
else {
        $login = md5('geodesia');
        $pass = md5('geo123');
        $result = $client->call('Obrafim_GetDatosID', array('inp01' => $login,'inp02' => $pass,'id' => $_GET['ido']));
        if ($client->fault) {
                print_r($result); 
        } else {
                $err = $client->getError();
                if ($err) {
                        echo $err;
                } else {
			//print_r($result[0]);
			header('Content-type: application/json; charset=utf-8');
			//echo is_array($result[0]);
			$result[0]['Obra'] = utf8_encode($result[0]['Obra']);
			$result[0]['PartidoPolitico'] = utf8_encode($result[0]['PartidoPolitico']);
			$result[0]['Municipio'] = utf8_encode($result[0]['Municipio']);
			$result[0]['Fecha_licitacion'] = utf8_encode($result[0]['Fecha_licitacion']);
			$result[0]['Obs_fecha_licitacion'] = utf8_encode($result[0]['Obs_fecha_licitacion']);
			$result[0]['Barrio'] = utf8_encode($result[0]['Barrio']);
			$result[0]['Direccion'] = utf8_encode($result[0]['Direccion']);
			$result[0]['Entre_calles'] = utf8_encode($result[0]['Entre_calles']);
			echo json_encode($result[0]);
			//exit();	
		}
	}
}
?>

