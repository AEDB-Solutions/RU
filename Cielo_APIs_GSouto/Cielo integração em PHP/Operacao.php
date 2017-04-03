<?php 

// Cria uma inst�ncia da classe
$Cielo1 = new Cielo(true); // Em per�odo de homologa��o (true) ou em ambiente de produ��o (false)

// Dados do estabelecimento
$Cielo1->setDadosEstabelecimento(CIELO_ESTABELECIMENTO_CIELO_NUMERO, CIELO_ESTABELECIMENTO_CIELO_CHAVE);

// Seta o ID da transa��o
$Cielo1->setTransacaoId('12345678901234567890');

// Realiza a opera��o (consulta, autoriza��o, captura, cancelamento)
$resposta = $Cielo1->RequisicaoConsulta();
//$resposta = $Cielo1->requisicaoAutorizacaoTransacaoId();
//$resposta = $Cielo1->RequisicaoCaptura();
//$resposta = $Cielo1->RequisicaoCancelamento();
// =================================================================

// Mostra os dados da transa��o
echo '<pre>' .
		$Cielo1->getTransacaoId() . '<br/>' .
		$Cielo1->getTransacaoStatus() . '<br/>' .
		$Cielo1->getTransacaoStatusString() . '<br/>' .
		$Cielo1->getPedidoNumero() . '<br/>' .
		$Cielo1->getPedidoValor() . '<br/>' .
		$Cielo1->getFormaPagamentoBandeira() . '<br/>' .
		$Cielo1->getFormaPagamentoMetodo() . '<br/>' .
		$Cielo1->getFormaPagamentoParcelas() . '<br/>' .
		$Cielo1->getPedidoDescricao() . '<br/>' .
		$Cielo1->getElectronicCommerceIndicator() . '<br/>' .
		($Cielo1->transacaoFinalizada() ? 'true' : 'false') .
	'</pre>';
// ============================

// Pega	o resultado da opera��o em XML
echo '<pre>' . htmlentities($resposta) . '</pre>';

?>