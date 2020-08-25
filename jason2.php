
<?php
// json decode

$json = '[{"nome":"jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}] ';

$data = json_decode($json, true); //sem true o array vira objeto.

var_dump($data);

?>