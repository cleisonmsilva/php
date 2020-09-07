<?php 
//função anonima (função sem nome não tem return)	
function teste($callback){
	//Processo lento

	$callback();
}


teste(function(){

	echo "Terminou!";
});

?>