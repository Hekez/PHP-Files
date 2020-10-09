<?php  

	$hierarquia = array(
		array(
			'cargo' => 'CEO',
			'subordinados' => array(
				//Inicio: Diretor Comercial
				array(
					'cargo' => 'Diretor Comercial',
					'subordinados' => array(
						//Inicio: Gerente de Vendas
						array(
						'cargo' => 'Gerente de Vendas'
						)//Fim: Gerente de Vendas
					)
				),//Fim: Diretor Comercial
				//Inicio: Diretor Financeiro
				array(
					'cargo' => 'Diretor Financeiro',
					'subordinados' => array(
						//Inicio: Gerente de Compras
						array(
							'cargo' => 'Gerente de Compras',
							'subordinados' => array(
								//inicio: Supervisor de Suprimentos
								array(
									'cargo' => 'Supervisor de Suprimentos'
								)//Fim: Supervisor de Suprimentos
							)
						),//Fim: Gerente de compras
						//Inicio: Gerente Financeiro
						array(
							'cargo' => 'Gerente Financeiro',
							'subordinados' => array(
								//Inicio: Supervisor de Contas a Pagar
								array(
									'cargo' => 'Supervisor de Contas a Pagar',
								)//Fim: Supervisor de Contas a Pagar
							)
						)//Fim: Gerente Financeiro
					)
				)//Fim: Diretor Financeiro
			)
		)
	);

	function exibe($cargos){

		$html = '<ul>';

		foreach ($cargos as $cargo) {

			$html .= '<li>';

			$html .= $cargo['cargo'];

			if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

				$html .= exibe($cargo['subordinados']);

			}

			$html .= '</li>';

		}

		$html .= '</ul>';

		return $html;

	}

	echo exibe($hierarquia);

?>