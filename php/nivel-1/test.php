<?php

require('./Pessoa.php');

$pessoa_saudavel = new Pessoa();
$pessoa_desleixada = new Pessoa();

for($i = 0; $i<5; $i++){
    $pessoa_saudavel->exercitar();
    $pessoa_desleixada->fumar();
}

test($pessoa_saudavel->expectativa_de_vida == 90);
test($pessoa_desleixada->expectativa_de_vida == 80);


for($i = 0; $i<5; $i++){
$pessoa_saudavel->exercitar();
}
for($i = 0; $i<10; $i++){
$pessoa_desleixada->fumar();
}
test($pessoa_saudavel->expectativa_de_vida == 95);
test($pessoa_desleixada->expectativa_de_vida == 70);


for($i = 0; $i<100; $i++){
$pessoa_saudavel->exercitar();
$pessoa_desleixada->fumar();
}
test($pessoa_saudavel->expectativa_de_vida == 100);
test($pessoa_desleixada->expectativa_de_vida == 35);
echo "\n";

function test($condition, $message = ''){
    if($condition) echo "\033[32mP\e[0m ";
    else echo "\e[31mF\e[0m \n";
}

