<?php

function __autoload($class)
{
    require_once($class . '.php');
}
$colecao = new PalavrasCollection;
$colecao->addItem('Primeiro');
$colecao->addItem('Segundo');
$colecao->addItem('Terceiro');

echo "Ordem de inclusão:<br>";
foreach ($colecao->getIterator() as $item) {
    echo "$item<br>";
}

echo "<br>";
echo "Ordem Reversa<br>";

foreach ($colecao->getReverseIterator() as $item){
    echo "$item<br>";
}