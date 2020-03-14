<?php

// trait NomeDoTrait
// {
//     public function nomeDoMetodo()
//     {
//         //....
//     }
// }

// class NomeDaClasse
// {
//     use NomeDoTrait;
// }
// $obj = new NomeDaClasse;
// $obj->nomeDoMetodo();

trait Operacoes
{
    public function somar($n1,$n2) : float
    {
        return $n1 + $n2;
    }
    public function subtrair($n1,$n2) : float
    {
        return $n1 - $n2;
    }
    public function multiplicar($n1,$n2) : float
    {
        return $n1 * $n2;
    }
    public function dividir($n1,$n2) : float
    {
        return $n1 / $n2;
    }
}
trait OperacoesComplexas
{
    public function somar(float ...$valores) : float
    {
        $total = 0;

        foreach ($valores as $valor) {
            $total += $valor;
        }
        return $total;
    }
}

trait OperacoesMistas
{
    use Operacoes,OperacoesComplexas{
        OperacoesComplexas::somar insteadOf Operacoes;
        Operacoes::somar as somaBasica;
    }

    public function quadrado($num){
        return pow($num, 2);
    }
}
class Calculadora
{
    use OperacoesMistas;
}
$calc = new Calculadora;
echo $calc->somar(3,4,2,4,3,2,1);
echo "<br>";
echo $calc->somaBasica(3,5);
echo "<br>";
echo $calc->quadrado(3);