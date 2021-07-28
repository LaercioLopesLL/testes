<?php


function array_to_string($arr){
	return "[ " . implode(", ", $arr) . " ]";	
}

function testaSequencia($original, $alterado, $indiceAtual, $maximoPulos, $removeAtual = false){
	
	if ((sizeof($original) - sizeof($alterado)) <= $maximoPulos){
		if ($indiceAtual+1 == sizeof($alterado)){
			echo "true 2";
			return true;
		}
		if (isset($alterado[$indiceAtual + 1])){
			if ($alterado[$indiceAtual + 1] <= $alterado[$indiceAtual]){
				echo array_to_string($alterado);
				if ($removeAtual) {
					array_splice($alterado, $indiceAtual, 1);	
				} else {
					array_splice($alterado, $indiceAtual + 1, 1);	
				}
				
				echo array_to_string($alterado);
				return testaSequencia($original, $alterado, $indiceAtual, $maximoPulos);
			} 
			return testaSequencia($original, $alterado, $indiceAtual+1, $maximoPulos);
		}
		echo "true 3";
		return true;
		
	}

	return false;
}


function sequenciaCrescente($arr, $maximoPulos = 1){
	if (sizeof($arr) > 2){
		$result = testaSequencia($arr, $arr, 0, $maximoPulos);
		if ($result) return true;
		return testaSequencia($arr, $arr, 0, $maximoPulos, true);

	}
	echo "true 1";
	return true;
}

$result = sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);
var_dump($result);