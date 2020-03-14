<?php

class Quadrado implements Iforma
{
    private $lado;

    public function __construct(float $lado)
    {
        $this->lado = $lado;
    }
    public function getArea()
    {
        return pow($this->lado, 2);
    }
}