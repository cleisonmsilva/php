<?php
function ola($texto = "mundo", $periodo="Bom Dia")
{
	return "olá $texto! $periodo! <br>";
}

echo ola();
echo ola("", "Boa noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");



?>