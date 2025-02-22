<?php 

//Breve entedimento sobre arrays
$array = [
    0 => "um",
    1 => "dois",
    2 => "três"
];

foreach( $array as $vetor => $nomeNumero){
    echo "índice do Array: $vetor, valor: $nomeNumero" . PHP_EOL;
}

var_dump($array);