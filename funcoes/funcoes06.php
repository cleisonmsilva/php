<?php 

$pessoas = array('nome'=>'Joâo', 'idade'=>20);

foreach ($pessoas as &$value) {

	if (gettype($value)==='integer') {
		$value+=10;
	echo $value.'<br>';
	}
	
print_r($pessoas);
}



?>