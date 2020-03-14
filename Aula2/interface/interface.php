<?php

interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value){
            $template = str_replace('{' . $name . '}',$value, $template);
        }
        return $template;
    }
}
$template = new Template();
$template->setVariable('nome','João');
$template->setVariable('email','joao@4linux.com.br');

echo $template->getHtml('<h1>{nome}</h1><p>{email}</p>');