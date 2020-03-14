<?php

class Carro {}
interface Veiculo {
    public function buzinar();
}

echo (new class('Daniel') implements Veiculo{
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function buzinar(){
        echo 'bibi';
    }
})->buzinar();
