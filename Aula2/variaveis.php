<?php
/*atribuição de uma variável à outra: as duas variáveis apontam para a mesma região da memória*/
$a = 5;
$b = $a;
//echo: imprime no console
echo $b;

/*conceito de variáveis variantes:
variáveis que podem mudar de acordo com a necessidade -> usam-se dois sinais "$$" precedendo o nome de uma variável para o PHP referenciar uma variável representada pelo conteúdo da primeira. */

//nome da variável = c
$c = 'nome';

//criação de variável identificada pelo onteúdo da variável c
$$c = 'eliana';

//resultado da referência a $nome = eliana:

//print: imprime uma string no console

//-> nl2br indica que \n é para pular de linha

//"." concatena pular de linha + variável $nome

print nl2br("\n".$nome);
?>