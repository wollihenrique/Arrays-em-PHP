<?php

//-----------------FUNÇÃO DE ORDENAR VALORES DE ARRAYS-------------//
//oBS: Se o array tiver valores int, será ordenado de forma numérica, se for string será ordenado de form alfabética

$notas = [
    'Ana' => 1,
    'Wallace' => 4,
    'Paulo' => null,
    'Mirielle' => 10,
    'Jackson' => 0,
    'Octavio' => 6,
];

$valor = [
    0 => 1,
    1 => 3,
    2 => 2,
    3 => 6,
    4 => 7,
    5 => 4,
];

//Ordena todos os valores de forma crescente e altera os índices
sort($notas);
var_dump($notas);

//Ordena todos os valores de forma decrescente e altera os índices
rsort($notas);
var_dump($notas);

//Ordena todos os valores de um array de forma crescente e não altera seus índices
asort($notas);
var_dump($notas);

//Ordena todos os valores de um array de forma decrescente e não altera seus índices
arsort($notas);
var_dump($notas);

//Ordena todos os índices de um array de forma crescente
ksort($notas);
var_dump($notas);

//Ordena todos os índices de um array de forma decrescente
krsort($notas);
var_dump($notas);

//-------------------------FUNÇÕES DE VERIFICAÇÃO NOS ARRAYS---------------------- 

//Função que verifica se tal variável é um array(is_array())
if(is_array($notas)){
    echo "Yes, this is an array." . PHP_EOL;
}

//Função que verifica se um array é uma lista com os índices numericos e em ordem sem pular nenhum número(array_is_list)
//true if the array is a list
var_dump(array_is_list($valor)) . PHP_EOL; 

//false if the array isn't a list
var_dump(array_is_list($notas)) . PHP_EOL;

//Verifica se a chave existe.
//Exemplo: Quero saber se o Octavio fez a prova, quero saber se existe uma chave com o nome Octavio
echo "O Octavio fez a prova? " . PHP_EOL;
var_dump(array_key_exists("Octavio", $notas)) . PHP_EOL;

//Verifica se a chave exist e não é um valor nulo.
echo "O Paulo esteve presente no dia da prova? " . PHP_EOL;
var_dump(isset($notas['Paulo'])) . PHP_EOL;

//Verifica se um valor existe
echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas)) . PHP_EOL;

//e se eu quisesse encontrar QUEM tirou 10?
echo "Quem tirou 10? " . PHP_EOL;
echo array_search(10, $notas);


