<?php
//foreach é utilizado para array e coleção.
 
 $meses = array(
    "Janeiro", "Fevereiro", "Março", "Abril","Maio", "Junho",
    "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro"
 );

foreach ($meses as $index => $mes) {
    echo "Array: " . $index . " - ";
    echo "O mês é: " . $mes . "<br><br>";
} 
?>



<hr>
<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="OK">

</form>

<?php

if (isset($_GET)){

    foreach ($_GET as $Key => $Value) {
        echo "Nome do Campo: " . $Key ."<br>";
        echo "Nome do Campo: " . $Value;
        echo "<hr>";
    } 
}

?>