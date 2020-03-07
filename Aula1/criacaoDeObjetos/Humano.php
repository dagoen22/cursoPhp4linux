<?php
class Humano
{

    //atributos do objeto
    public $nome = 'Daniel';
    //constante de classe
    const VIDA = true;
    //Métodos do objeto
    public function ministrarCurso()
    {
        echo "Estou dando aula";
        echo "<br>";
    }
    public function dormir()
    {
        if(self::VIDA == true){
            echo "Dormindo";
            echo "<br>";
        }else{
            echo "Morri";
        }
    }
    public function __clone()
    {
        echo "Clonando o objeto";
    }
    public function __construct($idade)
    {
        $this->idade = $idade;
    }
    public function __destruct()
    {
        echo "Estou desalocando o espaço da memória";
    }
}
