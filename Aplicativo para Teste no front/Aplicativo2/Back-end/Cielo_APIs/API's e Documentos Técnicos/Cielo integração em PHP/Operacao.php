<?php 

// Cria uma instância da classe
$Cielo1 = new Cielo(true); // Em período de homologação (true) ou em ambiente de produção (false)

// Dados do estabelecimento
$Cielo1->setDadosEstabelecimento(CIELO_ESTABELECIMENTO_CIELO_NUMERO, CIELO_ESTABELECIMENTO_CIELO_CHAVE);

// Seta o ID da transação
$Cielo1->setTransacaoId('12345678901234567890');

// Realiza a operação (consulta, autorização, captura, cancelamento)
$resposta = $Cielo1->RequisicaoConsulta();
//$resposta = $Cielo1->requisicaoAutorizacaoTransacaoId();
//$resposta = $Cielo1->RequisicaoCaptura();
//$resposta = $Cielo1->RequisicaoCancelamento();
// =================================================================

// Mostra os dados da transação
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

// Pega	o resultado da operação em XML
echo '<pre>' . htmlentities($resposta) . '</pre>';

?>