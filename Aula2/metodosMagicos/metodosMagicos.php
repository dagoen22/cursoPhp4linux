<?php

class MetodosMagicos
{
    protected $nome;
    protected $idade;

    //Método comum
    //Mesma coisa que uma função comum
    private function meuMetodo(string $parametros) : string
    {
        return $parametros;
    } 
    //Método estático comum
    //Mesma coisa que uma função comum
    public static function meuMetodoEstatico(string $parametros) : string
    {
        return $parametros;
    } 
    //Método construtor
    //executa quando o objeto é criado
    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->idade = 16;
        $this->solteiro = true;
        $this->saldoBancario = 16.00;
        echo "Estou sendo criado";
        echo "<br>";
    }
    //Método Destrutor
    //Executado quando o bloco de memória é liberado
    public function __destruct()
    {
        echo "<br>";
        echo "Estou liberando espaço na memória";
    }
    //Método Clone
    //Executado quando realizado uma clonagem
    public function __clone()
    {
        echo "<br>";
        echo "Estou sendo clonado";
    }
    //Método Sleep
    //Realizado na hora que o objeto é serializado
    public function __sleep()
    {
        echo "Estou sendo serializado";
        echo "<br>";
        return ['nome','idade'];
    }
    //Método wakeup
    //Usado quando objeto é deserializado
    public function __wakeup()
    {
        echo "Objeto Deserializado";
        echo "<br>";
        $this->serializado = true;
    }
    //Método toString
    //Usado quando o objeto é chamado como string
    public function __toString()
    {
        return 'Tentativa de conversão do objeto para string';
    }
    //Método invoke
    //Usado quando um objeto é chamado como função
    public function __invoke()
    {
        echo "Tentando chamar o objeto como função";
        echo "<br>";
    }
    //Método set
    // Executado na hora de atribuição de novos atributos
    public function __set($propriedade, $valor)
    {
        if(property_exists(__CLASS__,$propriedade)){
            $this->$propriedade = $valor;
        }
    }
    //Método get
    //usado para quando existe uma tentativa de acesso a algum atributo
    public function __get($propriedade)
    {
        if(property_exists(__CLASS__,$propriedade)){
            return $this->$propriedade;
        }
    }
    public function __call($nome, $argumentos)
    {
       echo "Tentativa de acesso ao método {$nome}";
       echo "<br>";
       if (method_exists(__CLASS__,$nome)){
           return $this->$nome(implode($argumentos));
       }else{
           return "metodo não encontrado";
       }
    }
    public static function __callStatic($nome, $argumentos)
    {
        echo "Tentativa de acesso ao método estático {$nome}";
        echo "<br>";
        if (method_exists(__CLASS__,$nome)){
            return self::$nome(implode($argumentos));
        }else{
            return "metodo não encontrado";
        }
    }
}

//Para Criar objetos
$variavel = new MetodosMagicos('Daniel');

//Acessando Atributos
echo $variavel->nome;

//Acessando Métodos
echo "<br>";
echo $variavel->meuMetodo('Testando');

//Clonando um objeto
$objetoClone = clone($variavel);

//Serializando um objeto
echo '<br>';
$serializado = serialize($objetoClone);

//Deserializando;
$objDeserializado = unserialize($serializado);
// var_dump($objDeserializado);

//Chamada do objeto para string
echo $variavel;
echo "<br>";

//Chamada do objeto como função
$variavel();

//Chamando um método inacessível ou inexistente
echo $variavel->inexistente('Parametro');

//Chamando um método estático
echo MetodosMagicos::meuMetodoEstatico('Parametro');