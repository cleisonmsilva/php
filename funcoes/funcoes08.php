<?php
//função recursiva
$hierarquia = 
array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>
		array(
			//inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial', 
				'subordinados'=>
				array(
						//Inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
						//Termino: Gerente de Vendas
				)
			),
				//Termino Diretor Comercial

				//Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>
				array(
				//inicio: Gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de contas a pagar',
						'subordinados'=>
						array(
						//Inicio: Supervisor de Pagamento
							array(
								'nome_cargo'=>'Supervisor de Pagamento',
							)
						//Termino: Supervisor de Pagamentos
						)
					),
				//Termino: Gerente de contas a pagar

				//Inicio: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>
						array(
								//inicio: Supervisor de suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos'
							)
								//Termino Supervisor de Suprimentos
						)
					)
						//Termino: Gerente de Contas
				)
			)
				//Termino: Diretor Financeiro
		)
	)
);

function exibe($cargos){
	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibe($cargo['subordinados']);
		}

		$html .="</li>";
	}


	$html .= "</ul>";
	return $html;
}
echo exibe($hierarquia);

?>