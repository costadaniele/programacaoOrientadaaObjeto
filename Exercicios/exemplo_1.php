<?php
/*exercício-1*/
echo'Olá mundo! ';
echo"dia ".date('d/m/Y');
print' Meu nome é Daniele';
?>



<?php
/*comandos de saída*/
$vetor=array('palavra');
var_dump($vetor);
?>

<?php
/*comandos de saída*/
$vetor=array('palavra');
print_r($vetor);
?>


<?php
/*variáveis*/
$nome="Daniele";
$sobrenome="Costa";
echo"$nome, $sobrenome";
?>

<?php
/*variáveis variantes*/
$variavel="nome";
$$variavel="Daniele";
echo $nome;
?>