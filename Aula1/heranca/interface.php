<?php
interface Maquinario
{
    public function barulhosDaFabrica($barulho);
}
interface Fornecedor
{
    public function fornecer($materiaPrima);
}
interface RacaoDeGato extends Maquinario, Fornecedor
{
    public function empacotar($kg);
    public function setPreco($preco);
    public function distribuir($cliente);
    public function fabricar($materiaPrima);
}
class Empresa implements RacaoDeGato
{
    public function barulhosDaFabrica($barulho)
    {
        echo $barulho;
    }
    public function fornecer($materiaPrima)
    {
        echo "Fornecendo {$materiaPrima}";
    }
    public function empacotar($kg)
    {
        echo "Empacotando {$kg} de ração";
    }
    public function setPreco($preco)
    {
        echo "Preço definido em {$preco}";
    }
    public function distribuir($cliente)
    {
        echo "Distribuindo para {$cliente}";
    }
    public function fabricar($materiaPrima)
    {
        echo "Fabricando ração de {$materiaPrima}";
    }
}

$obj = new Empresa;
$obj->fabricar('Coco de cavalo');