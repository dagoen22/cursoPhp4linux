<?php

class OrdemAlfabeticaIterator implements Iterator
{
    private $colecao;
    private $posicao = 0;
    private $reverso = false;

    public function __construct(PalavrasCollection $colecao, bool $reverso = false)
    {
        $this->colecao = $colecao;
        $this->reverso = $reverso;
    }
    public function rewind()
    {
        $this->posicao = ($this->reverso) ? count($this->colecao->getItens()) - 1 : 0;
    }
    public function current(){
        return $this->colecao->getItens()[$this->posicao];
    }
    public function key()
    {
        return $this->posicao;
    }
    public function next()
    {
        $this->posicao = $this->posicao + (($this->reverso) ? -1 : 1);
    }
    public function valid()
    {
        return isset($this->colecao->getItens()[$this->posicao]);
    }
}