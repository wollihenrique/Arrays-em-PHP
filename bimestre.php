<?php

$notasBimestre1 = [
    'Ana' => 1,
    'Wallace' => 4,
    'Paulo' => null, 
    'Mirielle' => 10,
    'Jackson' => 0,
    'Octavio' => 6,
    'Andreas' => 8,
    'Lorrayne' => 6
];

$notasBimestre2 = [
    'Ana' => 1,
    'Wallace' => 5,
    'Paulo' => 3,
    'Jackson' => null,
    'Octavio' => 7,
];

//Compara um array com outro ou outros arrays e retorna o valor em array que não está presente em qualquer um dos outros arrays
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//Compara as chaves dos arrays e retorna a chave dos outros arrays que não estiver no primeiro array.
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//Compara as chaves e os valores do primeiro array com os demais, retorna em array todas aquelas chaves ou valores que foram mudados com base no primeiro array
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

//Exilei todos os alunos faltantes em um novo array e guardei somente o nome das chaves
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));

//assim como podemos exilar as chaves, podemos fazer a mesma coisa com os valores, ou seja, vamos pegar somente a nota dos alunos faltantes, do primeiro bimestre.
var_dump(array_values($alunosFaltantes));


$nomeAlunos = array_keys($alunosFaltantes);
$notaAlunos = array_values($alunosFaltantes);
//Combinar os valores dos arrays(Tem que ser arrays do mesmo tamanho)
//------------------------chave-------valor--------------------------
var_dump(array_combine($nomeAlunos, $notaAlunos));

//inverter as chaves com os valores
var_dump(array_flip($notasBimestre1));