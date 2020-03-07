<?php

abstract class BarulhosDeCarro
{
    public function getBarulho($nomeDoCarro)
    {
        if ($nomeDoCarro == 'Opala')
        {
            return "{$nomeDoCarro}, Fazendo Muito Barulho";
        }else{
            return "{$nomeDoCarro}, Fazendo Barulho";
        }
    }
}
class Carro extends BarulhosDeCarro
{
    public function Acelerar($cor,$nomeDoCarro){
        if($cor == 'preto' and $nomeDoCarro == 'opala'){
            return 'Gente gritando de medo';
        }else{
            return 'Vrum Vrum';
        }
    }    
}
$ford = new Carro;
echo $ford->getBarulho('Opala');
echo $ford->Acelerar('preto','opala');