<?php

interface a
{
    const A = 'Abelha';
    public function foo();
}
interface b
{
    public function baz($baz);
}
interface c extends a,b
{
    public function arCondicionado();
}
class d implements c
{
    public function foo()
    {
    }
    public function baz($baz)
    {   
    }
    public function arCondicionado()
    {
    }
    public function batata()
    {
    }
}
$obj = new c;
