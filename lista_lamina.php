<?php
session_name('gis');
session_start();

//if ( $_SESSION['usuarioRegstrado'] == true ){
if (true){

    $host="localhost";
    $port="5432";
    $user="consulta";
    $pass="consulta";
    $dbname="geobasig";

    $connect = pg_connect("host=$host dbname=$dbname user=$user password=$pass") or die('No se ha podido conectar: ' . pg_last_error());

    $pl = $_GET['plano'];
    $consulta = "select nro_lam from tblcargadorarchivo where plano = '".$pl."';";

    $res = pg_query($connect,$consulta) or die('La consulta fallo: ' . pg_last_error());
    
    //print_r($pl);
    //echo "<p><i>plano es $pl</i></p>";
    //echo "<p>res es ". $res." </p>";
    //echo "<p>num rows es ".pg_num_rows($res). " </p>";
    //echo "<p>el num de campos es ".pg_num_fields($res);
    //$row = pg_fetch_row($res);
    //echo "<p> el resultado row,0 es $row[0] </p>";

    if( $res )
        {
            // Obtener el número de filas:
             if( pg_num_rows($res) > 1 )
            {  
		echo "<html><head><title>Prueba1</title></head><body>";
                while ($row = pg_fetch_row($res)) {
		  echo '<p align="center"><a href="http://www.mosp.gba.gov.ar/sistemas/geodesia/ugeodesia/Geodesia/'.$pl.'L'.$row[0].'(PA).dwf"'.">".$pl.'L'.$row[0]."</a></p>";
		}
            }
	     else
	    {
		//echo '<p align="center"><a href="http://www.mosp.gba.gov.ar/sistemas/geodesia/ugeodesia/Geodesia/'.$pl.'(PA).dwf"'.">".$pl.'</a></p>';
		header('Location: http://www.mosp.gba.gov.ar/sistemas/geodesia/ugeodesia/Geodesia/'.$pl.'(PA).dwf');
		pg_free_result($res);
		pg_close($connect);
		exit();
	    }
    }
    pg_free_result($res);
    pg_close($connect);
}
?>
    </body>

//else {
//echo "error no hay login";
//}
</html>
