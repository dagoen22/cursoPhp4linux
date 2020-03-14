<?php

class TesteException
{
    public function mensagem(string $msg) : string
    {
        try{
            if (empty($msg)){
                throw new Exception('Parâmetro msg é obrigatório'); 
            }
            return $msg;
        }catch(Exception $e){
            die;
        }
    }
}
$obj = new TesteException;
echo $obj->mensagem('');