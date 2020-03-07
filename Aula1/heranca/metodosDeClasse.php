<?php

class Comida
{   
    public static $gosto = 'salgado';

    public static function mastigar()
    {
        echo "Mastigando";
    }
}
// Comida::mastigar();
// $comida = 'Comida';
// $comida::mastigar();
echo Comida::$gosto;