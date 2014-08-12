<?php
 
// Achtung Sicherheitsrisiko!!! man sollte Input-Werte immer validieren!!!! (wird in diesem Beispiel nicht getan)
// Daten empfangen

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$id = $_POST["id"];
 
$name= $_POST["name"];
// Inhalt in eine Datei schreiben
$datei_handle=fopen("log.txt",a);
if($datei_handle == FALSE)
{
	echo "Fehler beim öffnen der Datei";
}
else
{
	fwrite($datei_handle, "ID: ".$id."\n");
	fwrite($datei_handle, "Name: ".$name."\n");
	fclose($datei_handle);
	echo "Ick habe geschrieben!";
}
echo "Hier bin ich!"; 
?>
