<?php
 
// Achtung Sicherheitsrisiko!!! man sollte Input-Werte immer validieren!!!! (wird in diesem Beispiel nicht getan)
// Daten empfangen

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$value= $_POST["value"];

if($value > 170)
{
	$value = 170;
}

// Inhalt in eine Datei schreiben
$datei_handle=fopen("/var/www/volume_rec.txt",w);
if($datei_handle == FALSE)
{
	echo "Fehler beim öffnen der Datei";
}
else
{
	fwrite($datei_handle, $value);
	fclose($datei_handle);
	echo "Ick habe geschrieben!";
}
?>
