<?php

require('Cachorro.php');
require('Gato.php');

// gatos e cachorros devem ter 4 patas


echo "<hr>";

$drogo = new Cachorro(2);

$drogo->caminhar(1000);

$drogo->caminhar(4000);

pre($drogo);

$drogo->latir(); // echo "estou latindo"

echo "<hr>";

$daeny = new Gato();

$daeny->caminhar(1000);

$daeny->caminhar(4000);

pre($daeny);

$daeny->miar(); // echo "estou miando"










function pre($coisa, $para = false){
    echo "<pre>";
    print_r($coisa);
    echo "</pre>";
    if($para) exit;
}