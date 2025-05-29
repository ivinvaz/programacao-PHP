<?php
echo "Este texto foi gerado pelo PHP.";
$nome = "João";
$idade = 30;
$contador = 0;
$preco_produto = 29.99;
$estaAtivo = true;
$cores = array("vermelho", "verde", "azul");
$idades = array("João" => 30, "Maria" => 25, "Pedro" => 35);
define("PI", 3.14159);

if ($idade >= 7) {
    echo "Aprovado!";
} elseif ($idade >= 5) {
    echo "Em recuperação.";
} else {
    echo "Reprovado.";
}

foreach ($cores as $cor) {
    echo "A cor é: " . $cor . "<br>";
}

while ($contador < 5) {
    echo "O contador é: " . $contador . "<br>";
    $contador++;
}