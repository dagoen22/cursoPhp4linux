<?php

class OperacoesForma
{

    public function getArea(IForma $forma) : float
    {
        return $forma->getArea();
    }
}