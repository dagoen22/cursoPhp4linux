<?php

function __autoload(string $class)
{
    require_once($class . '.php');
}

$op = new OperacoesForma;
$quadrado = new Quadrado(2);
echo $op->getArea($quadrado) . '<br>';
$circulo = new Circulo(5);
echo $op->getArea($circulo);