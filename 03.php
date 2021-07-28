<?php

function array_to_string($arr){
	return "[ " . implode(", ", $arr) . " ]";	
}

$numeros = [];

for ($i = 0; $i < 20; $i++){
	$numeros[$i] = random_int(1, 10);
}
echo "<pre>";

echo "Array sorteado: " . array_to_string($numeros) . PHP_EOL;

$seRepete = [];

foreach ($numeros as $value) {
	if (array_key_exists($value, $seRepete)){
		$seRepete[$value]++;
	} else {
		$seRepete[$value] = 1;
	}
}

$repetidos = array_keys($seRepete, max($seRepete));

if (sizeof($repetidos) > 1){
	echo "Os números que mais se repetam são: " . array_to_string($repetidos) . PHP_EOL;
	echo "Eles se repetem " . max($seRepete) . " vezes.";
} else {
	echo "O número que mais se repete é o " . $repetidos[0] . PHP_EOL;
	echo "Ele se repete " . max($seRepete) . " vezes.";
}

echo "</pre>";
