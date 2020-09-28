<?php 
include_once 'Pessoa.class.php';

//criação de objeto
$Willian = new Pessoa(100304, "Patrick Willian", 1.75, 19, "03/05/1974", "1° ano faculdade", 756.99);

//manipulação do objeto
echo nl2br("nome:"."\t".$Willian->get_nome()."\n");
echo nl2br("código:"."\t".$Willian->get_código()."\n");
echo nl2br("idade:"."\t".$Willian->get_idade()."\n");
echo nl2br("altura:"."\t".$Willian->get_altura()."\n");
echo nl2br("nascimento:"."\t".$Willian->get_nascimento()."\n");
echo nl2br("escolaridade:"."\t".$Willian->get_escolaridade()."\n");
echo nl2br("salário"."\t".$Willian->get_salário()."\n");

echo nl2br("nome:"."\t".$Willian->get_nome()."\n");

?>