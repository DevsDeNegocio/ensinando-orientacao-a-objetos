<?php

require('./Pessoa.php');
$testCounter = 0;
$fails = '';

$pessoa_saudavel = new Pessoa();
$pessoa_desleixada = new Pessoa();

test($pessoa_saudavel->expectativa_de_vida == 85, "Toda pessoa deve iniciar com expectativa de vida = 85 anos, valor atual: $pessoa_saudavel->expectativa_de_vida");

$pessoa_saudavel->exercitar();
$pessoa_desleixada->fumar();

test($pessoa_saudavel->expectativa_de_vida == 86, "Fazendo 1 exercício deveria ser 86 mas está $pessoa_saudavel->expectativa_de_vida");
test($pessoa_desleixada->expectativa_de_vida == 84, "Fumando 1 vez deveria ser 84 mas está $pessoa_desleixada->expectativa_de_vida");


for($i = 0; $i<4; $i++) $pessoa_saudavel->exercitar();
for($i = 0; $i<9; $i++) $pessoa_desleixada->fumar();

test($pessoa_saudavel->expectativa_de_vida == 90, "Exercitando 5 vezes deveria ser 90 mas está $pessoa_saudavel->expectativa_de_vida");
test($pessoa_desleixada->expectativa_de_vida == 75, "Fumando 10 cigarros deveria ser 75 mas está $pessoa_desleixada->expectativa_de_vida");


for($i = 0; $i<100; $i++){
    $pessoa_saudavel->exercitar();
    $pessoa_desleixada->fumar();
}
test($pessoa_saudavel->expectativa_de_vida == 100, "Limite superior de expectativa de vida é 100, valor atual: $pessoa_saudavel->expectativa_de_vida");
test($pessoa_desleixada->expectativa_de_vida == 35, "Limite inferior de expectativa de vida é 35, valor atual: $pessoa_desleixada->expectativa_de_vida");

if($fails) echo "\n$fails";
else echo "\n";


function test($condition, $message = ''){
    global $testCounter;
    global $fails;
    $testCounter++;
    if($condition) echo "\033[32mP\e[0m ";
    else {
        echo "\e[31mF\e[0m ";
        $fails .= "\e[31mTeste $testCounter falhou:\e[0m\n\e[0m$message\n";
    }
}

