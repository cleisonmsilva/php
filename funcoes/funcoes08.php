<?php
//função recursiva
$hierrquia = array(
	array(
		'nome_cargo'=>'CEO'),
	'subordinados'=>array(
			//inicio: Diretor Comercial
		array(
			'nome_cargo'=>'Diretor Comercial', 
			'subordinados'=>array(
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
			'subordinados'=>array(
				//inicio: Supervisor de Pagamentos
				array(
					'nome_cargo'=>'Supervisor de Pagamentos'
				)
				//Termino: Gerente de contas a pagar
				//Inicio: Gerente de Compras
				array(
				'nome_cargo'=>'Gerente de Compras',
				'subordinados'=>array(
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


?>