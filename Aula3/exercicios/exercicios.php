<?php
//4. Escrever código que mostre os elementos de um arranjo fora da ordenação dos
//índices dos elementos através do uso do “sort”.

$linguagens = array("javascript", "php", "dart", "python");
sort($linguagens);

$tipos = count($linguagens);
for ($i = 0; $i < $tipos; $i++) {
    echo $linguagens[$i];
    echo "<br>";
}
?>

<?php
// 5. Escrever outra versão do código proposto acima, retornando a quantidade de
//elementos do arranjo através do uso do “count”.
$linguagens = array("javascript", "php", "dart", "python");
echo count($linguagens);
?>

<?php
// 6. Ainda considerando o arranjo do exercício 4, extrair uma amostra de elementos
//do mesmo através do uso do “array_slice” .

$linguagens = array("javascript", "php", "dart", "python");
print_r(array_slice($linguagens,0));
?>

