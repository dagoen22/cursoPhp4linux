<?php
echo '<pre>';

require('autoload.php');

//Criando objetos
$pessoa = new Humano(12);
// $pessoa->ministrarCurso();
// $pessoa->dormir();
// echo $pessoa->nome;
//Criando outro objeto da mesma classe
$pessoa2 = new Humano(13);
// $pessoa2->nome = 'Julio';
// echo $pessoa2->nome;
// echo $pessoa->nome;
// echo Humano::VIDA;


// $pessoa = new Humano();
// $pessoa->ministrarCurso();
// $pessoa->dormir();
// echo $pessoa->nome;

$pessoa2->nome = 'Julio';
// $pessoa3 = clone($pessoa2);
// $pessoa3->nome = 'Henrique';
var_dump($pessoa);//Henrique
unset($pessoa);
var_dump($pessoa2);//julio
// echo $pessoa2->nome;
// echo $pessoa->nome;
// echo Humano::VIDA; 