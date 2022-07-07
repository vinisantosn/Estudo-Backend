<?php

$carros = [
    'LMS-1234' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],

    'LMS-1235' => [
        'marca' => 'CHEVROLET',
        'modelo' => 'Joy'
    ],

    'LMS-1236' => [
        'marca' => 'AUDI',
        'modelo' => 'Q7'
    ],

    'LMS-1237' => [
        'marca' => 'BMW',
        'modelo' => 'X5'
    ],


];

foreach ($carros as $placa => $carro) {
    echo "PLACA: " . $placa . "\t MARCA: " . $carro['marca'] . "\t MODELO: " . $carro['modelo'] . PHP_EOL;
}
