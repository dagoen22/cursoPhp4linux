<?php

class Circulo implements Iforma
{
    private $raio;

    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }
    public function getArea()
    {
        return pow($this->raio, 2) * self::PI;
    }
}
