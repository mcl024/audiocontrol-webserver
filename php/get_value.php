<?php
 
// Achtung Sicherheitsrisiko!!! man sollte Input-Werte immer validieren!!!! (wird in diesem Beispiel nicht getan)
// Daten empfangen

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'get_volume' : get_volume();break;
        // ...etc...
    }
}

function get_volume()
{
	// Inhalt aus einer Datei lesen
	$datei_handle=fopen("/var/www/volume_trans.txt",r);		// Nur zum lesen oeffnen
	if($datei_handle == FALSE)
	{
		echo "Fehler beim öffnen der Datei";
	}
	else
	{
		$volume = fread($datei_handle, filesize("/var/www/volume_trans.txt"));
		fclose($datei_handle);
		// codieren der Daten
		print_r(json_encode($volume));
	}
}
?>
