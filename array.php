<?php
//array (vetor)
$frutas = array("laranja", "abacaxi", "melancia");

print_r($frutas);
echo "<hr>";
?>


<?php
// array bidimencional

$carro[0][0] =  "GM";
$carro[0][1] =  "Colbalt";
$carro[0][2] =  "Onix";
$carro[0][3] =  "Camaro";

$carro[1][0] =  "Ford";
$carro[1][1] =  "Fiesta";
$carro[1][2] =  "Fusion";
$carro[1][3] =  "Eco Sport";

echo $carro[0][3] . "<br>";
echo end($carro[1]);

echo "<hr>";
?> 

<?php
// funçoes para array bidimencional

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'joão', 'idade' => 20,
));

array_push($pessoas, array(
    'nome'=>'Glaucio', 'idade'=> 25,
));

print_r($pessoas);
print_r($pessoas[0]);
print_r($pessoas[0]['nome']);


echo "<hr>";
?> 

<?php
    

?>