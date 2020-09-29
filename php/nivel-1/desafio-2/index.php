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
    <?php
        for($i = 0; $i<5; $i++){
            $pessoa_saudavel->exercitar();
            $pessoa_desleixada->fumar();
        }
    ?>

    <article class="<?=$pessoa_saudavel->expectativa_de_vida == 90 ? 'right' : 'wrong'?>">
        <label>
            Pessoa saudável:
        </label>
        <div>Tinha 85 anos de expectativa, praticou exercícios:</div>
        <div>
            <b>Tem <?=$pessoa_saudavel->expectativa_de_vida?></b> anos de expectativa de vida
        </div>
        <div>
            <b>Deveria ter 90</b> anos de expectativa de vida
        </div>
    </article>
    <article class="<?=$pessoa_desleixada->expectativa_de_vida == 80 ? 'right' : 'wrong'?>">
        <label>
            Pessoa desleixada:
        </label>
        <div>Tinha 85 anos de expectativa, fumou:</div>
        <div>
            <b>Tem <?=$pessoa_desleixada->expectativa_de_vida?></b> anos de expectativa de vida
        </div>
        <div>
            <b>Deveria ter 80</b> anos de expectativa de vida
        </div>
    </article>
</main>

<section>
    <h2>Teste com números maiores:</h2>

    <?php
        for($i = 0; $i<5; $i++){
            $pessoa_saudavel->exercitar();
        }
        for($i = 0; $i<10; $i++){
            $pessoa_desleixada->fumar();
        }
    ?>

    <article class="<?=$pessoa_saudavel->expectativa_de_vida == 95 ? 'right' : 'wrong'?>">
        <label>
            Pessoa saudável:
        </label>
        <div>Tinha 85 anos de expectativa, praticou mais exercícios:</div>
        <div>
            <b>Tem <?=$pessoa_saudavel->expectativa_de_vida?></b> anos de expectativa de vida
        </div>
        <div>
            <b>Deveria ter 90</b> anos de expectativa de vida
        </div>
    </article>
    <article class="<?=$pessoa_desleixada->expectativa_de_vida == 70 ? 'right' : 'wrong'?>">
        <label>
            Pessoa desleixada:
        </label>
        <div>Tinha 85 anos de expectativa, fumou mais:</div>
        <div>
            <b>Tem <?=$pessoa_desleixada->expectativa_de_vida?></b> anos de expectativa de vida
        </div>
        <div>
            <b>Deveria ter 80</b> anos de expectativa de vida
        </div>
    </article>
</section>
<section>
    <?php
        for($i = 0; $i<100; $i++){
            $pessoa_saudavel->exercitar();
            $pessoa_desleixada->fumar();
        }
    ?>
    <h2>Teste de limites:</h2>

    <article class="<?=$pessoa_saudavel->expectativa_de_vida == 100 ? 'right' : 'wrong'?>">
        <label>
            Pessoa saudável:
        </label>
        <div>Praticando muito exercício durante a vida toda:</div>
        <div>
            <b>Tem <?=$pessoa_saudavel->expectativa_de_vida?></b> anos de expectativa de vida
        </div>
        <div>
            <b>Não deveria passar de 100</b> anos de expectativa de vida
        </div>
    </article>
    <article class="<?=$pessoa_desleixada->expectativa_de_vida == 35 ? 'right' : 'wrong'?>">
        <label>
            Pessoa desleixada:
        </label>
        <div>Continuou fumando a vida toda:</div>
        <div>
            <b>Tem <?=$pessoa_desleixada->expectativa_de_vida?></b> anos de expectativa de vida
        </div>
        <div>
            <b>Não deveria baixar de 35</b> anos de expectativa de vida
        </div>
    </article>
</section>

</body>
</html>
