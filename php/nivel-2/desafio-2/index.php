<?php

require('./Carro.php');


function article($valor, $mensagem, $carro){
    $class = $carro->valor == $valor ? 'right' : 'wrong';
    echo "<article class=\"$class\">
        <label>
            $mensagem
        </label>
        <div>
            O valor do carro <b> é R$$carro->valor</b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$$valor</b>
        </div>
    </article> ";
}

function section_open($message){
    echo "<section><h2>$message</h2>";
}
function section_close(){
    echo "</section>";
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Pessoa</title>
    <style>
        body{
            margin: 0;
            font-family: Arial, sans-serif;
        }
        main, section{
            padding: 16px;
            margin: 0;
        }
        article {
            border: 1px solid rgba(0,0,0,0.2);
            padding: 8px;
            margin: 8px 0;
            display: inline-block;
            width: 380px;
            max-width: 100%;
        }
        h2{
            margin: 0;
        }
        label{
            margin-bottom: 8px;
            font-weight: bold;
        }
        article.right b {
            color: green;
        }
        article.wrong b {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Carro Ret</h1>
    <?php
    section_open('Teste simples:');
    $carro = new Carro();
    article(50000, 'Carro deve iniciar com o valor padrão de R$50000', $carro);
    section_close();

    section_open('Teste de carro com problemas:');
    $carro = new Carro();
    $carro->problema();
    article(45000, 'Carro com 1 problema', $carro);

    $carro = new Carro();
    $carro->problema();
    $carro->problema();
    $carro->problema();
    $carro->problema();
    article(32805, 'Carro com 4 problemas', $carro);
    section_close();

    section_open('Teste de carro que já rodou:');
    $carro = new Carro();
    $carro->rodar(999);
    article(50000, 'Carro que rodou menos de 1000 km', $carro);

    $carro = new Carro();
    $carro->rodar(1000);
    article(45000, 'Carro que rodou exatos 1000 km', $carro);

    $carro = new Carro();
    $carro->rodar(5000);
    article(45000, 'Carro que rodou mais de 1000km mas menos de 10000km', $carro);

    $carro = new Carro();
    $carro->rodar(10000);
    article(40000, 'Carro que rodou mais de 10000km', $carro);

    $carro = new Carro();
    $carro->rodar(60000);
    article(30000, 'Carro que rodou mais de 10000km', $carro);
    section_close();

    section_open('Teste de problema no carro + km rodados:');
    $carro = new Carro();
    $carro->rodar(1000);
    $carro->problema();
    $carro->problema();
    article(36450, 'Carro que rodou menos de 1000 km', $carro);

    $carro = new Carro();
    $carro->rodar(60000);
    for($i = 0; $i<2; $i++) $carro->problema();
    article(24300, 'Carro que rodou menos de 60000km e teve 2 problemas', $carro);
    section_close();

    section_open('Teste de limite:');

    $carro = new Carro();
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(500, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro', $carro);

    $carro = new Carro();
    $carro->rodar(60000);
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(500, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (km + problema)', $carro);

    $carro = new Carro();
    $carro->rodar(60000);
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(500, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (km + problema)', $carro);

    $carro = new Carro();
    for($i = 0; $i < 46; $i++) $carro->problema();
    $carro->rodar(1000);
    article(500, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (problema + km)', $carro);
    section_close();
    ?>


    <hr/>
    <h1>Carro Sedan</h1>
    <?php
    section_open('Teste simples:');
    $carro = new Carro('sedan');
    article(100000, 'Carro deve iniciar com o valor padrão de R$100000', $carro);
    section_close();

    section_open('Teste de carro com problemas:');
    $carro = new Carro('sedan');
    $carro->problema();
    article(90000, 'Carro com 1 problema', $carro);

    $carro = new Carro('sedan');
    $carro->problema();
    $carro->problema();
    $carro->problema();
    $carro->problema();
    article(65610, 'Carro com 4 problemas', $carro);
    section_close();

    section_open('Teste de carro que já rodou:');
    $carro = new Carro('sedan');
    $carro->rodar(999);
    article(100000, 'Carro que rodou menos de 1000 km', $carro);

    $carro = new Carro('sedan');
    $carro->rodar(1000);
    article(90000, 'Carro que rodou exatos 1000 km', $carro);

    $carro = new Carro('sedan');
    $carro->rodar(5000);
    article(90000, 'Carro que rodou mais de 1000km mas menos de 10000km', $carro);

    $carro = new Carro('sedan');
    $carro->rodar(10000);
    article(80000, 'Carro que rodou mais de 10000km', $carro);

    $carro = new Carro('sedan');
    $carro->rodar(60000);
    article(60000, 'Carro que rodou mais de 10000km', $carro);
    section_close();

    section_open('Teste de problema no carro + km rodados:');
    $carro = new Carro('sedan');
    $carro->rodar(1000);
    $carro->problema();
    $carro->problema();
    article(72900, 'Carro que rodou menos de 1000 km', $carro);

    $carro = new Carro('sedan');
    $carro->rodar(60000);
    for($i = 0; $i<2; $i++) $carro->problema();
    article(48600, 'Carro que rodou menos de 60000km e teve 2 problemas', $carro);
    section_close();

    section_open('Teste de limite:');

    $carro = new Carro('sedan');
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(1000, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro', $carro);

    $carro = new Carro('sedan');
    $carro->rodar(60000);
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(1000, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (km + problema)', $carro);

    $carro = new Carro('sedan');
    $carro->rodar(60000);
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(1000, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (km + problema)', $carro);

    $carro = new Carro('sedan');
    for($i = 0; $i < 46; $i++) $carro->problema();
    $carro->rodar(1000);
    article(1000, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (problema + km)', $carro);
    section_close();
    ?>



    <hr/>
    <h1>Carro Luxo</h1>
    <?php
    section_open('Teste simples:');
    $carro = new Carro('luxo');
    article(1000000, 'Carro deve iniciar com o valor padrão de R$100000', $carro);
    section_close();

    section_open('Teste de carro com problemas:');
    $carro = new Carro('luxo');
    $carro->problema();
    article(900000, 'Carro com 1 problema', $carro);

    $carro = new Carro('luxo');
    $carro->problema();
    $carro->problema();
    $carro->problema();
    $carro->problema();
    article(656100, 'Carro com 4 problemas', $carro);
    section_close();

    section_open('Teste de carro que já rodou:');
    $carro = new Carro('luxo');
    $carro->rodar(999);
    article(1000000, 'Carro que rodou menos de 1000 km', $carro);

    $carro = new Carro('luxo');
    $carro->rodar(1000);
    article(900000, 'Carro que rodou exatos 1000 km', $carro);

    $carro = new Carro('luxo');
    $carro->rodar(5000);
    article(900000, 'Carro que rodou mais de 1000km mas menos de 10000km', $carro);

    $carro = new Carro('luxo');
    $carro->rodar(10000);
    article(800000, 'Carro que rodou mais de 10000km', $carro);

    $carro = new Carro('luxo');
    $carro->rodar(60000);
    article(600000, 'Carro que rodou mais de 10000km', $carro);
    section_close();

    section_open('Teste de problema no carro + km rodados:');
    $carro = new Carro('luxo');
    $carro->rodar(1000);
    $carro->problema();
    $carro->problema();
    article(729000, 'Carro que rodou menos de 1000 km', $carro);

    $carro = new Carro('luxo');
    $carro->rodar(60000);
    for($i = 0; $i<2; $i++) $carro->problema();
    article(486000, 'Carro que rodou menos de 60000km e teve 2 problemas', $carro);
    section_close();

    section_open('Teste de limite:');

    $carro = new Carro('luxo');
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(10000, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro', $carro);

    $carro = new Carro('luxo');
    $carro->rodar(60000);
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(10000, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (km + problema)', $carro);

    $carro = new Carro('luxo');
    $carro->rodar(60000);
    for($i = 0; $i < 10000; $i++) $carro->problema();
    article(10000, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (km + problema)', $carro);

    $carro = new Carro('luxo');
    for($i = 0; $i < 46; $i++) $carro->problema();
    $carro->rodar(1000);
    article(10000, 'Mesmo com todos os problemas possíveis não deve baixar de 1% do valor original do carro (problema + km)', $carro);
    section_close();
    ?>
</body>
</html>
