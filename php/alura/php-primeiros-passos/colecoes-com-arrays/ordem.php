<?php

// $notas = [
//     10,
//     8,
//     9,
//     7
// ];

// $notasOrdenadas = $notas;
// // ORDENAMENTO É FEITO ATRAVES DA FUNÇÃO SORT()
// sort($notasOrdenadas);

// //IMPRIMINDO NOTAS DESORDENADAS 
// echo "NOTAS EM ORDEM DE ATRIBUIÇÃO" . PHP_EOL;
// echo var_dump($notas);
// //IMPRIMINDO NOTAS ORDENADAS 
// echo "NOTAS EM ORDEM CRESCENTE" . PHP_EOL;
// echo var_dump($notasOrdenadas);

$avenidas = [
    'quatro',
    'um',
    'três',
    'dois'
];

$avenidasOrdenadas = $avenidas;
sort($avenidasOrdenadas);

//IMPRIMINDO AVENIDAS DESORDENADAS 
echo "AVENIDAS EM ORDEM DE ATRIBUIÇÃO" . PHP_EOL;
echo var_dump($avenidas);
//IMPRIMINDO AVENIDAS ORDENADAS 
echo "AVENIDAS EM ORDEM CRESCENTE" . PHP_EOL;
echo var_dump($avenidasOrdenadas);

//ORDENANDO ARRAY MULTIDIMENSIONAL
$notas = [
    [
        'aluno' => 'Vinícius',
        'nota' => 8
    ],
    [
        'aluno' => 'Maria',
        'nota' => 3
    ],
    [
        'aluno' => 'Roberto',
        'nota' => 7
    ]
];

function ordenaNotas(array $nota1, array $nota2): int
{
    // if ($nota1['nota'] > $nota2['nota']) {
    //     return -1;
    // }
    // if ($nota2['nota'] > $nota1['nota']) {
    //     return 1;
    // }
    // return 0;
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas,'ordenaNotas');
var_dump($notas);
