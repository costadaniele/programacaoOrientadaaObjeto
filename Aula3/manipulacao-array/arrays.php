<!-- Manipulação de arrays

<?php
$frutas = array("maçã", "banana", "laranja", "mamão");
foreach ($frutas as $valor)
    print($valor);

//opção de especificar cada elemento do arranjo: 
$frutas1 = array(0 => "maça", 1 => "banana", 2 => "laranja", 3 => "mamao");
print nl2br($frutas1[0] . $frutas1[1] . "\n");

//Manipulação de Arrays -> Arrays Associativos. -> os arrays possuem  uma chave de acesso  para cada posição.

$carro['marca'] = 'Volkswagen';
$carro['modelo'] = 'Fusca';
$carro['cor'] = 'verde';
$carro['preço'] = 5500.00;
$carro['preço'] -= 500.00;
echo nl2br($carro['marca'] . "\n");
echo nl2br($carro['modelo'] . "\n");
echo nl2br($carro['cor'] . "\n");
echo nl2br($carro['preço'] . "\n");

//Array Multidimensional

$carro = array(
    'Fusca' => array(
        'ano' => 1977,
        'marca' => 'Volkswagen',
        'acessórios' => 'Rádio AM'
    ),
    'Kombi' => array(
        'ano' => 1975,
        'marca' => 'Volkswagen',
        'acessórios' => 'pintura saia e blusa'
    ),
    'Belina' => array(
        'ano' => 1981,
        'marca' => 'Ford',
        'acessórios' => 'Rádio AM'
    )
);

echo nl2br($carro['Kombi']['acessórios']."\n");
?>