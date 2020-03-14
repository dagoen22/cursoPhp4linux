<?php

class PalavrasCollection implements IteratorAggregate
{
    private $itens = [];

    public function getItens() : array
    {
        return $this->itens;
    }

    public function addItem(string $item)
    {
        $this->itens[] = $item;
    }
    public function getIterator(): Iterator
    {
        return new OrdemAlfabeticaIterator($this);
    }
    public function getReverseIterator() : Iterator
    {
        return new OrdemAlfabeticaIterator($this, true);
    }
}