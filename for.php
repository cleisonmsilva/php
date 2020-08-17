<?php
//for => tem inicio, regras para repetição e incremento.

$dado1 = 0;

for ($i = 0; $i <= 100; $i++ ) { 
    if ($i > 50 && $i < 80) continue;
    if ($i === 90) break;

    echo $i . "<br>";
}
?>


<?php
 
echo "<select>";


for ($i = date("Y"); $i >= date("Y")-100 ; $i--) { 
    
    echo '<option value="'.$i.'">'.$i.'</option>';  
}


echo "</select>";
?>
