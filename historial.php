<!doctype html>
<html lang="es">
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>Planos</title>
    <link rel="shortcut icon" type="image/png" href="./app/img/favicon.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php
    $host="localhost";
    $port="5432";
    $user="consulta";
    $pass="consulta";
    $dbname="geobasig";

    $connect = pg_connect("host=$host dbname=$dbname user=$user password=$pass") or die('No se ha podido conectar: ' . pg_last_error());

    $nomencla = $_GET['nomencla'];
    $consulta = "select pla.plano as plano, nro_lam, pla.ano_aprob as anio from planospos2000 pla inner join tblcargadorarchivo tbl on pla.plano=tbl.plano where nomencla = '".$nomencla."' union select plp.plano as plano, nro_lam, plp.anio as anio from planosant2000 plp inner join tblcargadorarchivo tbl on plp.plano=tbl.plano where nomencla = '".$nomencla."' order by anio, plano, nro_lam desc;";

    $res = pg_query($connect,$consulta) or die('La consulta fallo: ' . pg_last_error());
    
    if( $res )
	{
	  echo '<div class="container">';
          echo '<div class="page-header">';
          echo '<h5 align="center">Historial de parcela</h5>';
          echo '</div>';
	  echo '<div class="list-group">';
          while ($row = pg_fetch_row($res)) {
		if ( $row[1] > 1 )
		{
		  $aux = $row[0];
                  echo '<a align="center" href="http://www.mosp.gba.gov.ar/sistemas/geodesia/ugeodesia/Geodesia/'.$row[0].'L'.$row[1].'(PA).dwf"'.' class="list-group-item">'.$row[0].'  (LAMINA '.$row[1].")</a>";
                }
             	else
            	{
		  if ( $aux == $row[0] )
		  {
			echo '<a align="center" href="http://www.mosp.gba.gov.ar/sistemas/geodesia/ugeodesia/Geodesia/'.$row[0].'L'.$row[1].'(PA).dwf"'.' class="list-group-item">'.$row[0].'   (LAMINA '.$row[1].")</a>";
		  }
		  else
		  {
                  	echo '<a align="center" href="http://www.mosp.gba.gov.ar/sistemas/geodesia/ugeodesia/Geodesia/'.$row[0].'(PA).dwf"'.' class="list-group-item">'.$row[0].'</a>';
		  }
            	}
	   }
	  echo '</div>';
        }
    else
	{
		echo '<p align="center">NO EXISTEN PLANOS SOBRE LA PARCELA CLICKEADA</p>';
	}
    pg_free_result($res);
    pg_close($connect);
?>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/responsive.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
