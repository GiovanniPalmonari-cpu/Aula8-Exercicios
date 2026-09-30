<?php

$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];

echo "Tipo do primeiro valor: ";
var_dump($valor1);

echo "<br>";

echo "Tipo do segundo valor: ";
var_dump($valor2);

echo "<br><br>";

$resultado = $valor1 + $valor2;

print "Resultado da soma: " . $resultado;

?>