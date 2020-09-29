<?php

require('./Carro.php');

$carro = new Carro();

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Pessoa</title>
    <style>
        body{
            margin: 0;
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
<main>
    <h2>Teste simples:</h2>

    <article class="<?=$carro->valor == 50000 ? 'right' : 'wrong'?>">
        <label>
            Carro deve iniciar com o valor padrão de R$50.000
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$50000</b>
        </div>
    </article>
</main>

<section>
    <h2>Teste de carro com problemas:</h2>

    <?php
    $carro->problema();
    ?>

    <article class="<?=$carro->valor == 49000 ? 'right' : 'wrong'?>">
        <label>
            Carro com 1 problema:
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$49000</b>
        </div>
    </article>

    <?php
    $carro->problema();
    $carro->problema();
    $carro->problema();
    $carro->problema();
    ?>
    <article class="<?=$carro->valor == 45000 ? 'right' : 'wrong'?>">
        <label>
            Carro com 5 problema:
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$49000</b>
        </div>
    </article>
</section>

<section>
    <h2>Teste de carro que já rodou:</h2>


    <?php
    $carro = new Carro();
    $carro->rodar(999);
    ?>
    <article class="<?=$carro->valor == 50000 ? 'right' : 'wrong'?>">
        <label>
            Carro que rodou menos de 1000 km
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$49000</b>
        </div>
    </article>
    <?php
    $carro = new Carro();
    $carro->rodar(1000);
    ?>
    <article class="<?=$carro->valor == 45000 ? 'right' : 'wrong'?>">
        <label>
            Carro que rodou exatos 1000 km
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$45000</b>
        </div>
    </article>
    <?php
    $carro = new Carro();
    $carro->rodar(5000);
    ?>
    <article class="<?=$carro->valor == 45000 ? 'right' : 'wrong'?>">
        <label>
            Carro que rodou mais de 1000km mas menos de 10000km
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$45000</b>
        </div>
    </article>
    <?php
    $carro = new Carro();
    $carro->rodar(10000);
    ?>
    <article class="<?=$carro->valor == 40000 ? 'right' : 'wrong'?>">
        <label>
            Carro que rodou mais de 10000km
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$40000</b>
        </div>
    </article>
    <?php
    $carro = new Carro();
    $carro->rodar(60000);
    ?>
    <article class="<?=$carro->valor == 30000 ? 'right' : 'wrong'?>">
        <label>
            Carro que rodou mais de 60000km
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$30000</b>
        </div>
    </article>
</section>

<section>
    <h2>Teste de problema no carro + km rodados:</h2>


    <?php
    $carro = new Carro();
    $carro->rodar(1000);
    $carro->problema();
    $carro->problema();
    ?>
    <article class="<?=$carro->valor == 43000 ? 'right' : 'wrong'?>">
        <label>
            Carro que rodou menos de 1000 km e teve 2 problemas
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$43000</b>
        </div>
    </article>
    <?php
    $carro = new Carro();
    $carro->rodar(60000);
    for($i = 0; $i<10; $i++) $carro->problema();
    ?>
    <article class="<?=$carro->valor == 20000 ? 'right' : 'wrong'?>">
        <label>
            Carro que rodou menos de 60000km e teve 10 problemas
        </label>
        <div>
            O valor do carro <b> éR$<?=$carro->valor?></b>
        </div>
        <div>
            O valor do carro <b>deveria ser R$20000</b>
        </div>
    </article>
</section>
</body>
</html>
