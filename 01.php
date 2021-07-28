<?php

function SeculoAno($ano){
	return ceil($ano / 100);
}

echo "<pre>";
echo "Ano 1: Século ";
echo SeculoAno(1) . PHP_EOL;

echo "Ano 101: Século ";

echo SeculoAno(101) . PHP_EOL;

echo "Ano 1905: Século ";

echo SeculoAno(1905) . PHP_EOL;

echo "Ano 1700: Século ";

echo SeculoAno(1700) . PHP_EOL;
echo "</pre>";