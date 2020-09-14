<?php 
// public acesso geral,
// protected acesso dentro da class e herança
// privated só dento da classe.

class Pessoa{

    public $nome ="Ramus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";
        

    }
    
}


class Progrmador extends Pessoa{

    public function verDados(){

        echo get_class($this). "<br>" ;

        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";

    }
}

$objeto =  new Progrmador();

//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";

$objeto->verDados();

?>