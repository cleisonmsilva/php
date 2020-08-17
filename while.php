<?php
//para tudo desde que a condiçõa seja verdadeira.

$condicao = true;


while ($condicao) {
	$numero = rand(1,30);

	if ($numero === 3) {
		echo "TRÊS!!!";		
		$condicao = false;
	}
	echo $numero . " - ";
}
?>

<hr>

<?php

$i = 1;
while ($i <= 10) {
	echo $i++;  
}

echo "<br>";

$i = 1;
while ($i <= 10):
	echo $i;
	$i++;
endwhile;

?>