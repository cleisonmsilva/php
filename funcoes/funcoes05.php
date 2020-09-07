<?php 

$a = 10;

function trocaValor(&$aa){

	$aa += 50;
	return $aa;
}


echo $a." | ";

echo trocaValor($a)." | ";

echo $a;


?>