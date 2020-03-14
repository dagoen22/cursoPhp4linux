<?php

//Criar uma classe funcionario
//
//Esse funcionário precisa ter uma interface
//Onde ela precisa ter os métodos:
//Trabalhar
//HoraDeAlmoco
//
// O funcionário precisa ser criado com o nome e idade
// O funcionário precisa exibir a mensagem "Fim de expediente" quando acabar suas funcionalidades
//
//Implementar o codigo da maneira que bem entender

interface Contrato
{
    public function trabalhar($horas);
    public function horaDeAlmoco($hora);
}
class Funcionario implements Contrato
{
    public function __construct($nome,$idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function __destruct()
    {
        echo "Fim de expediente";
    }
    public function trabalhar($horas)
    {
        echo "Trabalhadas {$horas} Horas";
    }
    public function horaDeAlmoco($hora)
    {
        echo "$hora horas, hora do meu almoço";
    }
}

$jorge = new Funcionario('Jorge','25');
$pedro = new Funcionario('Pedro','13');

echo $jorge->nome . ' ' . $pedro->nome;
echo "<br>";
echo $jorge->idade . ' ' . $pedro->idade;
$jorge->trabalhar(18);
$pedro->trabalhar(10);
$jorge->horaDeAlmoco(15);
$pedro->horaDeAlmoco(14);