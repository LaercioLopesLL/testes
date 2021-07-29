<?php


function array_to_string($arr){
	echo "[ " . implode(", ", $arr) . " ]<br>";
}

function testaSequencia($arr){
	//imprime sequencia testada
	//array_to_string($arr);
	for ($i=0; $i < sizeof($arr); $i++) { 
		if (isset($arr[$i+1]) && $arr[$i] >= $arr[$i+1]){
			return false;
		}
	}
	return true;
}




function sequenciaCrescente($arr){
	if (sizeof($arr) > 2){
		for ($i=0; $i < sizeof($arr); $i++) { 
			$alterado = $arr;
			array_splice($alterado, $i, 1);
			if (testaSequencia($alterado)) return true;
		}
		return false;
	}
	return true;
}

$resultado = sequenciaCrescente([3, 5, 67, 98, 3]);
var_dump($resultado);