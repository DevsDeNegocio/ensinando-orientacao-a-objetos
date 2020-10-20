<?php

require('Carro.php');
require('Caminhao.php');


echo "<hr>";

$carro_thay = new Carro(2);

$carro_thay->rodar(1000);

$carro_thay->rodar(4000);

pre($carro_thay);

$carro_thay->abre_porta_malas();

echo "<hr>";

$caminhao_joao = new Caminhao();

$caminhao_joao->rodar(1000);

$caminhao_joao->rodar(4000);

pre($caminhao_joao);

$caminhao_joao->abre_porta_cacamba();










function pre($coisa, $para = false){
    echo "<pre>";
    print_r($coisa);
    echo "</pre>";
    if($para) exit;
}