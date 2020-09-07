<?php 

echo "<hr> <br>";
$ts = strtotime("2011-09-11");
echo date("l, d/m/Y", $ts);

echo "<hr> <br>";
$ts = strtotime("0");
echo date("l, d/m/Y", $ts);

echo "<hr> <br>";
$ts = strtotime("+1 week, +1 day,");
echo date("l, d/m/Y", $ts);

?>