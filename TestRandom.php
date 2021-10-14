<?php

$contadores = array(0,0,0,0,0,0,0,0,0,0);
$intentos=1000000;
$porcentajes = array(0,0,0,0,0,0,0,0,0,0);

for ($i=0; $i <$intentos; $i++) 
{
    $numeroActual=random_int(1,10);
    $contadores[$numeroActual-1]++;
}

for ($i=0; $i<10; $i++) 
{ 
    $porcentajes[$i]=$contadores[$i] / $intentos *100;
}

printf("<br>Cantidad de unos:". $contadores[0]);
printf("<br>Cantidad de doses:". $contadores[1]);
printf("<br>Cantidad de tres:". $contadores[2]);
printf("<br>Cantidad de cuatros:". $contadores[3]);
printf("<br>Cantidad de cincos:". $contadores[4]);
printf("<br>Cantidad de seis:". $contadores[5]);
printf("<br>Cantidad de sietes:". $contadores[6]);
printf("<br>Cantidad de ochos:". $contadores[7]);
printf("<br>Cantidad de nueves:". $contadores[8]);
printf("<br>Cantidad de dieces:". $contadores[9]);

echo("<br><br><br>porcentaje de unos:". number_format($porcentajes[0], 2, '.', '') . " %");
echo("<br>porcentaje de doses:". number_format($porcentajes[1], 2, '.', ''). " %");
echo("<br>porcentaje de tres:". number_format($porcentajes[2], 2, '.', ''). " %");
echo("<br>porcentaje de cuatros:". number_format($porcentajes[3], 2, '.', ''). " %");
echo("<br>porcentaje de cincos:". number_format($porcentajes[4], 2, '.', ''). " %");
echo("<br>porcentaje de seis:". number_format($porcentajes[5], 2, '.', ''). " %");
echo("<br>porcentaje de sietes:". number_format($porcentajes[6], 2, '.', ''). " %");
echo("<br>porcentaje de ochos:". number_format($porcentajes[7], 2, '.', ''). " %");
echo("<br>porcentaje de nueves:". number_format($porcentajes[8], 2, '.', ''). " %");
echo("<br>porcentaje de dieces:". number_format($porcentajes[9], 2, '.', ''). " %");



?>