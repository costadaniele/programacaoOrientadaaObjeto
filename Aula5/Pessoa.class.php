<?php 
class Pessoa
{
    private $código;
    private $nome;
    private $altura;
    private $idade;
    private $nascimento;
    private $escolaridade;
    private $salário;


    //método construtor
    function __constructor ($código, $nome, $altura, $idade, $nascimento, $escolaridade, $salário) {
        $this -> código = $código;
        $this -> nome = $nome;
        $this -> altura = $altura;
        $this -> idade = $idade;
        $this -> nascimento = $nascimento;
        $this -> escolaridade = $escolaridade;
        $this -> salário = $salário;
    }
    public function get_código(){
        return $this-> código; 
    }
    public function get_nome(){
        return $this-> nome;
    }
    public function get_altura(){
        return $this-> altura;
    }
    public function get_idade(){
        return $this-> idade;
    }
    public function get_nascimento(){
        return $this-> nascimento;
    }
    public function get_escolaridade(){
        return $this-> escolaridade;
    }
    public function get_salário(){
        return $this-> salário;
    }

    function __destruct()
    {
        echo "Objeto {$this -> nome} finalizando...<br>\n";
    }
}
?>