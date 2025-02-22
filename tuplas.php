<?php

//Uma tupla é um pequeno conjunto de elementos onde a posição dele pode significar alguma coisa
//extrai os valores do array e coloquei em variáveis separadas
$dados = ['Wallace', 10, 16];
list($nome, $nota, $idade) = $dados;

//fiz a mesma coisa mas de forma mais automotizada
$pessoa = [
    'nome' => 'Mirielle',
    'nota' => 10,
    'idade' => 19
];

extract($pessoa);
var_dump($nome, $nota, $idade);

var_dump((compact('nome', 'nota', 'idade')));