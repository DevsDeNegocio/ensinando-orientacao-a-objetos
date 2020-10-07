<?php

require('./Gato.php');

function middle($value){
    return $value >= 40 && $value <= 60;
}
function quarter($value){
    return $value >= 15 && $value <= 35;
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
        small{
            display: block;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
<section>
    <h2>Geral</h2>

    <?php
    $valids = false;
    try{
        new Gato('persa');
        new Gato('siamês');
        new Gato('sphynx');
        $valids = true;
    }
    catch(Exception $e){}
    ?>
    <article class="<?=$valids ? 'right' : 'wrong'?>">
        <label>
            Deve permitir criar gatos persa, siamês e sphynx
        </label>
        <div>
            <b><?=$valids ? 'Os gatos foram criados sem problema' : 'Algum dos gatos não foi criado normalmente'?></b>
        </div>
    </article>

    <?php
    $valids = false;
    try{
        new Gato('angorá');
    }
    catch(Error $e){
        $valids = true;
    }
    ?>
    <article class="<?=$valids ? 'right' : 'wrong'?>">
        <label>
            Não deve permitir criar um gato angorá
        </label>
        <div>
            <b><?=$valids ? 'Os gatos foram bloqueados sem problema' : 'Permitiu criar um gato angorá e não devia'?></b>
        </div>
    </article>

    <article class="<?=Gato::anos_humanos(10) == 70 ? 'right' : 'wrong'?>">
        <label>
            Anos humanos
        </label>
        <div>
            Gato::anos_humanos(10) retornou <b><?=Gato::anos_humanos(10)?></b>
        </div>
        <div>
            Gato::anos_humanos(10) deveria retornar <b>70</b>
        </div>
    </article>
    <?php
    $gato = new Gato('sphynx');
    $gato->raca = 'siamês';
    $gato->temperamento = 'dócil';
    ?>
    <article class="<?=$gato->raca === 'sphynx' ? 'right' : 'wrong'?>">
        <label>
            A raça do gato não pode ser mudada
        </label>
        <div>
            <b><?=$gato->raca === 'sphynx' ? 'Tentou mudar a raça para siamês e não conseguiu' : 'Permitiu criar trocar de raça de sphinx para persa'?></b>
        </div>
    </article>
    <article class="<?=$gato->raca === 'arisco' ? 'right' : 'wrong'?>">
        <label>
            A temperamento do gato não pode ser alterado
        </label>
        <div>
            <b><?=$gato->raca === 'arisco' ? 'Tentou mudar a temperamento para arisco e não conseguiu' : 'Permitiu criar trocar de temperamento de arisco para dócil'?></b>
        </div>
    </article>
</section>
<section>
    <h2>Gato Persa</h2>
    <small>100 gatos persas gerados, destes:</small>
    <?php
    $raca = 0;
    $doceis = 0;
    $mania = 0;
    for($i=0;$i<100;$i++){
        $gato = new Gato('persa');
        if($gato->raca === 'persa') $raca++;
        if($gato->temperamento === 'dócil') $doceis++;
        if($gato->mania === 'ronronar') $mania++;
    }
    ?>
    <article class="<?=$raca == 100 ? 'right' : 'wrong'?>">
        <label>
            Gato persa deve ser da raça <strong>persa</strong>
        </label>
        <div>
            <b><?=$raca?>%</b> dos gatos gerados foram <b>persas</b>
        </div>
        <div>
            <b>100%</b> deveriam ser <b>persas</b>
        </div>
    </article>
    <article class="<?=$doceis == 100 ? 'right' : 'wrong'?>">
        <label>
            Gato persa deve ser sempre dócil
        </label>
        <div>
            <b><?=$doceis?>%</b> dos gatos gerados foram <b>dóceis</b>
        </div>
        <div>
            <b>100%</b> deveriam ser <b>dóceis</b>
        </div>
    </article>
    <article class="<?=middle($mania) ? 'right' : 'wrong'?>">
        <label>
            Metade dos gatos persa devem ronronar
        </label>
        <div>
            <b><?=$mania?>%</b> dos gatos <b>ronronam</b>
        </div>
        <div>
            <b>50%</b> (aproximadamente) deveriam <b>ronronar</b>
        </div>
    </article>
</section>
<section>
    <h2>Gato Sphynx</h2>
    <small>100 gatos sphynxs gerados, destes:</small>
    <?php
    $raca = 0;
    $doceis = 0;
    $mania = 0;
    for($i=0;$i<100;$i++){
        $gato = new Gato('sphynx');
        if($gato->raca === 'sphynx') $raca++;
        if($gato->temperamento === 'arisco') $doceis++;
        if($gato->mania === 'arranhar') $mania++;
    }
    ?>
    <article class="<?=$raca == 100 ? 'right' : 'wrong'?>">
        <label>
            Gato sphynx deve ser da raça <strong>sphynx</strong>
        </label>

        <div>
            <b><?=$raca?>%</b> dos gatos gerados foram <b>sphynx</b>
        </div>
        <div>
            <b>100%</b> deveriam ser <b>sphynx</b>
        </div>
    </article>
    <article class="<?=$doceis == 100 ? 'right' : 'wrong'?>">
        <label>
            Gato sphynx deve ser sempre arisco
        </label>
        <div>
            <b><?=$doceis?>%</b> dos gatos gerados foram <b>ariscos</b>
        </div>
        <div>
            <b>100%</b> deveriam ser <b>ariscos</b>
        </div>
    </article>
    <article class="<?=middle($mania) ? 'right' : 'wrong'?>">
        <label>
            Metade dos gatos sphynx devem arranhar
        </label>
        <div>
            <b><?=$mania?>%</b> dos gatos <b>arranham</b>
        </div>
        <div>
            <b>50%</b> (aproximadamente) deveriam <b>arranhar</b>
        </div>
    </article>
</section>
<section>
    <h2>Gato Siamês</h2>
    <small>100 gatos siameses gerados, destes:</small>
    <?php
    $raca = 0;
    $doceis = 0;
    $mania = 0;
    for($i=0;$i<100;$i++){
        $gato = new Gato('siamês');
        if($gato->raca === 'siamês') $raca++;
        if($gato->temperamento === 'arisco') $doceis++;
        if($gato->mania === 'arranhar') $mania++;
    }
    ?>
    <article class="<?=$raca == 100 ? 'right' : 'wrong'?>">
        <label>
            Gato siamês deve ser da raça <strong>siamês</strong>
        </label>
        <div>
            <b><?=$raca?>%</b> dos gatos gerados foram <b>siamês</b>
        </div>
        <div>
            <b>100%</b> deveriam ser <b>siamês</b>
        </div>
    </article>
    <article class="<?=($doceis >= 40 && $doceis <= 60) ? 'right' : 'wrong'?>">
        <label>
            Gato siamês deve ser sempre arisco
        </label>
        <div>
            <b><?=$doceis?>%</b> dos gatos gerados foram <b>dóceis</b>
        </div>
        <div>
            <b>50%</b> (aproximadamente) deveriam ser <b>dóceis</b>
        </div>
    </article>
    <article class="<?=quarter($mania) ? 'right' : 'wrong'?>">
        <label>
            Um quarto dos gatos siameses devem arranhar
        </label>
        <div>
            <b><?=$mania?>%</b> dos gatos <b>arranham</b>
        </div>
        <div>
            <b>25%</b> (aproximadamente) deveriam <b>arranhar</b>
        </div>
    </article>
</section>
</body>
</html>
