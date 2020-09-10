<?php
//constante exemplo 1
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
?>

<br><hr><br>

<?php
//constante exemplo 2
define("BANCO_DE_DADOS",['127.0.0.1', 'root', 'password', 'teste'] );

print_r(BANCO_DE_DADOS);
?>


<br><hr><br>

<?php
//constante pre definidas exemplo 3
echo PHP_VERSION;
echo "<br>";
echo DIRECTORY_SEPARATOR; //Deixando o separador dinamico tanto no win com no linux.

?>