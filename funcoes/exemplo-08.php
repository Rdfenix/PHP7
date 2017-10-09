<?php 

	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(
				//inicio:Diretor
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array(
						'nome_cargo' => 'Gerente de Vendas'
					)
			),
				//termino
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' => array(
						'nome_cargo' => 'Gerente de Constas a pagar',
						'subordinados' => array(
							'nome_cargo' => 'Supervisor de Pagamentos'
						)
					),
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							)
						)
					)
				)
			) 
		)
	);

	function exibe($cargos) {
		$html = '<ul>';

		foreach ($cargos as $cargo) {
			$html .= "<li>";
			$html .= $cargo['nome_cargo'];

			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
				$html .= exibe($cargo['subordinados']);
			}

			$html .= "</li>";
		}

		$html .= '</ul>';

		return $html;

	}

	echo exibe($hierarquia);
 ?>