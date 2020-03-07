<?php

function __autoload($classe){
    $arquivo = $classe . '.php';
    include_once($arquivo);
}