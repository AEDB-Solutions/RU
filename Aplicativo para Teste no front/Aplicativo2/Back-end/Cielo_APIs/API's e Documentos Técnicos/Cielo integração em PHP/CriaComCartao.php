<?php

// Cria uma inst�ncia da classe
$Cielo1 = new Cielo(true); // Em per�odo de homologa��o (true) ou em ambiente de produ��o (false)

// Dados do estabelecimento
$Cielo1->setDadosEstabelecimento(CIELO_ESTABELECIMENTO_TESTE_NUMERO, CIELO_ESTABELECIMENTO_TESTE_CHAVE);

// Bandeira do cart�o de cr�dito
$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_VISA);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_MASTERCARD);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_ELO);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_AMERICAN_EXPRESS);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_DINERS);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_DISCOVER);
// =============================

// Pagamento � vista
$Cielo1->setFormaPagamentoMetodo(CIELO_FORMA_PAGAMENTO_CREDITO_VISTA);
//$Cielo1->setFormaPagamentoMetodo(CIELO_FORMA_PAGAMENTO_DEBITO);
// =================

/*// Pagamento parcelado
$Cielo1->setFormaPagamentoMetodo(CIELO_FORMA_PAGAMENTO_PARCELADO_LOJA);
//$Cielo1->setFormaPagamentoMetodo(CIELO_FORMA_PAGAMENTO_PARCELADO_ADMINISTRADORA);
$Cielo1->setFormaPagamentoParcelas(6);
// ===================*/

// Autoriza��o autom�tica
$Cielo1->setAutorizacaoAutomatica(CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_DIRETAMENTE);
//$Cielo1->setAutorizacaoAutomatica(CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_AUTENTICADA_E_NAO_AUTENTICADA);
//$Cielo1->setAutorizacaoAutomatica(CIELO_AUTORIZACAO_AUTOMATICA_SOMENTE_AUTENTICAR);
//$Cielo1->setAutorizacaoAutomatica(CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_SOMENTE_SE_AUTENTICADA);
// ======================

// Captura autom�tica
$Cielo1->setCapturaAutomatica(true);
//$Cielo1->setCapturaAutomatica(false);
// ==================

// Dados do pedido (compra)
$Cielo1->setDadosPedido(12345, 499.99);

// Envia a requisi��o � Cielo
$Cielo1->setDadosCartao('4012 0010 3714 1112', '05', '2018', '123');

$resposta = $Cielo1->requisicaoTransacao(true);
// ==========================

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