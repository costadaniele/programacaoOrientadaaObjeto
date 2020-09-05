<!--Escrever código que possua uma função que receba como argumentos o
nome e o salário de funcionários de uma empresa. A aplicação deve imprimir
em cada linha o nome e o respectivo salário dos funcionários (pelo menos 3).-->

<?php
$funcionaria1 = 'Maria';
$salario1 = 7000.00 ;
$funcionaria2 = 'Ana';
$salario2 = 8000.00;
$funcionaria3 = 'Mariana';
$salario3 = 9000.00;
print nl2br("\nFuncionária: ".$funcionaria1."\tSalário: ".$salario1);
print nl2br("\nFuncionária: ".$funcionaria2."\tSalário: ".$salario2);
print nl2br("\nFuncionária: ".$funcionaria3."\tSalário: ".$salario3);
?>

<!--2. Escrever outra versão do código proposto acima, sendo que tanto os nomes
quanto os salários estejam originalmente em arranjos-->

<?php
$funcionarias = array (0 => "Maria", 1 => "Ana", 2 => "Mariana");
$salarios = array(0 => "R$7000,00", 1 => "R$8000,00", 2 => "R$9000,00");

echo nl2br($funcionarias[0]."\t".$salarios[0]."\n");
echo nl2br($funcionarias[1]."\t".$salarios[1]."\n");
echo nl2br($funcionarias[2]."\t".$salarios[2]."\n");
?>

<!--3. Dada uma relação de 10 pares funcionário – salário, escrever versão do código
em que sejam impressos os pares onde o salário seja maior que R$1000.00.-->

<?php
dadosFuncionarios('Ana', 900);
dadosFuncionarios('Bianca', 500);
dadosFuncionarios('Carla', 1500);
dadosFuncionarios('Danubia', 3500);
dadosFuncionarios('Ellen', 2500);
dadosFuncionarios('Fernanda', 1500);
dadosFuncionarios('Gabriel', 800);
dadosFuncionarios('Henrique', 1500);
dadosFuncionarios('Iara', 7000);
dadosFuncionarios('Jacke', 1500);


function dadosFuncionarios($nome, $salario)

{
    if ($salario > 1000.00) {
        print nl2br("Nome:" . $nome . "\tSalário:R$" . $salario."\n");
    }
}
