<?php

class MinhaClasse
{
    protected $protegida = 'Protegida';
    public $publica = 'Publica';
    private $privada = 'Privada';

    function mostrarPropriedes()
    {
        echo $this->publica;
        echo $this->protegida;
        echo $this->privada;
    }
}

class MinhaClasseFilha extends MinhaClasse
{
    function mostrarPropriedes()
    {
        echo $this->publica;
        echo $this->protegida;
        echo $this->privada;
    }
}

$obj = new MinhaClasse;
$obj2 = new MinhaClasseFilha;
$obj->mostrarPropriedes();
$obj2->mostrarPropriedes();
// echo $obj->publica;
// echo $obj->privada;
// echo $obj->protegida;