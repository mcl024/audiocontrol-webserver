<?php
$timestamp = time(); 
$date = date("d.m.Y",$timestamp);

$stunden = date("H",$timestamp);
$minuten = date("i",$timestamp);

$time = $stunden * 60;
$time = $time + $minuten;
$time = $time * 60;
echo $time,"\n";
?>
