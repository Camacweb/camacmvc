<?php

$date= "02/05/1985"; //dd/mm/yy
$dd=substr($date, 0, 2);
$mm=substr($date, 3, 2);
$yy=substr($date, 6, 4);

echo $yy."-".$mm."-".$dd;

?>
