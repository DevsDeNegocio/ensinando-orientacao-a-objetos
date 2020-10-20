<?php
require_once('Veiculo.php');

class Caminhao extends Veiculo {
    function __construct(){
        parent::__construct(2);
    }

    function abre_porta_cacamba(){
        echo "abrindo porta caçamba";
    }
}