<?php

class Veiculo {
    
    public $km_rodados = 0;
    public $portas;

    function __construct($portas){
        $this->portas = $portas;
    }
    function buzinar(){
        echo "buzinando";
    }
    function rodar($km){
        $this->km_rodados += $km;
    }

}