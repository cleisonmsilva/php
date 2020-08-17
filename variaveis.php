<?php 
	
	$nome = strtoupper("Hcode o melhor curso da udemy");
	$nome2 = strtolower("Hcode o melhor curso da udemy");
    $nome3 = ucfirst("Hcode o melhor curso da udemy");
    $nome4 = ucwords("Hcode o melhor curso da udemy");

	echo "1 $nome <br> 2 $nome2 <br> 3 $nome3 <br> 4 $nome4 <br><br> ";


    $troca = str_replace('o', '0', $nome4);

    $cont = strpos($nome3, "o melhor");
    $cont2 = strpos($nome3, "udemy");

    $retirar1 = substr($nome3, 0, $cont);
    $retirar2 = substr($nome3, $cont, strlen($nome3));
    $retirar3 = substr($nome3, $cont2, strlen($nome3));

    echo "
    $troca<br> 
    $cont<br> 
    $retirar1<br> 
    $retirar2<br>
    $retirar3
    <br><br>";

var_dump($troca);
echo "<br>";
var_dump($cont);
echo "<br>";
var_dump($retirar1);
echo "<br>";
var_dump($retirar2);
echo "<br>";
var_dump($retirar3);
echo "<br>";

?>