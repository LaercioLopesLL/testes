<?php
function numeroPrimo($numero) {
  $n = 0;
  if ($numero == 2 || $numero == 3){
    return $numero;
  } 
  elseif ($numero % 6 == 1 || $numero % 6 == 5) {
    for($i = 2; $i*$i <= $numero; $i++) {
      if($numero % $i == 0){
        $n++;
        break;
      }
    }
    
    if ($n == 0){
      return $numero;
    }
  } 
}

function primoInferior($numero){
	if ($numero > 0){
		$primeiro = null;
		for($i = $numero; $i >= 0; $i--) {
		  $primeiro = numeroPrimo($i);
		  if ($primeiro) break;
		}
		return $primeiro;
	}
	return 0;
}


//mude este numero para testar.
$meuNumero = 1000;

echo "O primeiro número primo abaixo de $meuNumero é " . primoInferior($meuNumero);