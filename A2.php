<?php

function nomeDaFuncao()
{
    echo "Esta é uma função!";
}

function alterarValor($num)
{
    $num = $num + 10;
    echo "Dentro da função: \$num = " . $num . "<br>"; 
}

$frutas = ["maçã", "banana", "laranja"];
echo "\n",$frutas[0] ;
echo "\n",$frutas[1] ; 
echo "\n",$frutas[2] ; 
$frutas[] = "mamao"; // Adiciona ao final
unset($frutas[2]); //remove o item no index

$carro = ["marca" => "Fiat", "modelo" => "Uno"];
echo "\n",$carro["marca"];