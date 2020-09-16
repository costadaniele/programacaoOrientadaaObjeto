<!--Exemplo de Abstração - Quarto Ciclo de SI: manipulação do objeto -->

<?php
//insere a classe
include_once 'Quarto_CicloSI.class.php';

//criação de objeto ou variável de instância do tipo da classe: "SI"
$SI = new Quarto_CicloSI;

//atribuição de valores aos atributos
$SI -> set_matéria('Programação Orientada a Objetos');
$SI -> set_professor('Mauricio');
$SI -> set_Fatec('Baixada Santista');
$SI -> set_quantidade_alunos(34);
$SI -> set_período('manhã');

//retorno dos valores
echo nl2br($SI->get_matéria()."\n");
echo nl2br($SI->get_professor()."\n");
echo nl2br($SI->get_Fatec()."\n");
echo nl2br($SI->get_quantidade_alunos()."\n");
echo nl2br($SI->get_período()."\n");





?>
