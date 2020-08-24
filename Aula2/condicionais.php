<?php
$salario = 800.70;
$tempo_servico =25;
$folga_fim_semana = false; //variável booleana

if (($tempo_servico >= 20)and($salario > 1000.88)and($folga_fim_semana !=true))
{print_r("dados errados do funcionário:");}
else if(($tempo_servico == 25)and($salario == 800.70)and($folga_fim_semana !=true))
{print_r("dados corretos do funcionário:");
print nl2br("\ntempo de serviço:".$tempo_servico."\nsalário R$ = ".$salario."\nfolga sábado e domingo: não ".$folga_fim_semana);}