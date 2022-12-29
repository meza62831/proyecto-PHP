<?php

$segundos = readline("Ingresa el tiempo en segundos ");
$horas = (int) ($segundos / 3600);
$segundos %= 3600;
$minutos = (int) ($segundos / 60);
$segundos %= 60;

echo "Son $horas horas, $minutos minutos, $segundos segundos.";

echo "\n";