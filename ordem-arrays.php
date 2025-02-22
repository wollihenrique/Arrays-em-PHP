<?php

$notas = [
    3,
    8,
    7,
    9,
    6,
    10
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Desordenadas: ";
var_dump($notas);

echo"Ordenadas ";
var_dump($notasOrdenadas);

/*------------------------------------------------------------------*/
//Vou ensinar o php a ordenar um array conforme eu quero

$notas = [
    [
        "Aluno" => "Wallace",
        "Nota" => "7",
    ],
    [
        "Aluno" => "Mirielle",
        "Nota" => "10",
    ],
    [
        "Aluno" => "Bruno",
        "Nota" => "10",
    ],
];

function ordenarNotas(array $nota1, array $nota2): int{
    if ($nota1['Nota'] > $nota2['Nota']){
        return -1;
    }

    if ($nota2['Nota'] > $nota1['Nota']){
        return 1;
    }
    return 0;
}

usort(array: $notas, callback:'ordenarNotas');
var_dump($notas);