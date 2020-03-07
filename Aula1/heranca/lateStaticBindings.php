<?php

class Animal
{
    protected static $tipo = 'Animal';

    public function getTipo(){
        return self::$tipo;
    }
}
class Gato extends Animal {
    protected static $tipo = 'Gato';
}
$animal = new Animal;
$gato = new Gato;

echo $animal->getTipo();
echo $gato->getTipo();