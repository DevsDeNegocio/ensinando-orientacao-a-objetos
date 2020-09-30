<?php

require('./Gato.php');

function createMany($type, $quantity = 20){
    for($i=1;$i<=$quantity;$i++){
        $gato = new Gato($type);
        $var = '$gato'.$i;
        $temperamento = $var.'->temperamento';
        $mania = $var.'->mania';
        $raca = $var.'->raca';
        $pelo = $var.'->pelo';
        if($i>1) echo "<hr>";
        if(in_array($type, ['persa', 'sphynx'])){
            echo "<div>$var = new Gato('$type');</div><div>$raca = <b>'$gato->raca'</b>;</div><div>$pelo = <b>'$gato->pelo'</b>;</div><div>$temperamento = <b>'$gato->temperamento'</b>;</div><div>$mania = <strong>'$gato->mania'</strong>;</div>";
        }
        else{
            echo "<div>$var = new Gato('$type');</div><div>$raca = <b>'$gato->raca'</b>;</div><div>$pelo = <b>'$gato->pelo'</b>;</div><div>$temperamento = <strong>'$gato->temperamento'</strong>;</div><div>$mania = <strong>'$gato->mania'</strong>;</div>";
        }
    }
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
            display: flex;
            padding: 20px;
        }
        section{
            flex-basis: 50%;
            padding: 20px;
            border: 1px solid gray;
        }
        strong{
            color: orange;
        }
    </style>
</head>
<body>
<section>
    <h2>Persa</h2>
    <?php createMany('persa');?>
</section>
<section>
    <h2>Sphynx</h2>
    <?php createMany('sphynx');?>
</section>
<section>
    <h2>Siamês</h2>
    <?php createMany('siamês');?>
</section>
</body>
</html>
