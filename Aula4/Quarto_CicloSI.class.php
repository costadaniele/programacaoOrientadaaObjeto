<!-- Exemplo de Abstração - Quarto Ciclo de SI: classe -->

<?php
class Quarto_CicloSI
{
    //atributos
    private $matéria;
    private $professor;
    private $Fatec;
    private $quantidade_alunos;
    private $período;
    //métodos para inserir e retornar valores dos atributos: set() e get()
    public function set_matéria($matéria){
        $this -> matéria = $matéria;
    }
    public function get_matéria(){
        return $this -> matéria;
    }
    public function set_professor($professor){
        $this -> professor = $professor;
    }
    public function get_professor(){
        return $this -> professor;
    }
    public function set_Fatec($Fatec){
        $this -> Fatec = $Fatec;
    }
    public function get_Fatec(){
        return $this -> Fatec;
    }
    public function set_quantidade_alunos($quantidade_alunos){
        $this -> quantidade_alunos = $quantidade_alunos;
    }
    public function get_quantidade_alunos(){
        return $this -> quantidade_alunos;
    }
    public function set_período($período){
        $this -> período = $período;
    }
    public function get_período(){
        return $this -> período;
    }
}
?>