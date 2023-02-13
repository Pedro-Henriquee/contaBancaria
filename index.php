<?php

include_once 'class_contaBancaria.php';
$oConta = new ContaBancaria('Pedro', 'Pedro@exemplo.com', '47 - 999-999');
$oConta->setSaldoInical(200);
echo $oConta->Sacar(40) . "<br>";
echo $oConta->Depositar(20) . "<br>";
$oConta->exibeSaldo();
$oConta->imprimeOperacoes();
?>