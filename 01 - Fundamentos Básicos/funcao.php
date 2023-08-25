<?php

$area = 0;

function soma($b, $h)
{
    $area = $b * $h;

    return $area;
}

$calculo = soma(8, 3);

echo 'Esse retângulo tem ' . $calculo . ' cm² de área.';
