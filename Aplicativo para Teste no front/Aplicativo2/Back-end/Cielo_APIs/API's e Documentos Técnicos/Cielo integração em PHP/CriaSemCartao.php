<?php

// Cria uma instância da classe
$Cielo1 = new Cielo(true); // Em período de homologação (true) ou em ambiente de produção (false)

// Dados do estabelecimento
$Cielo1->setDadosEstabelecimento(CIELO_ESTABELECIMENTO_CIELO_NUMERO, CIELO_ESTABELECIMENTO_CIELO_CHAVE);

// Bandeira do cartão de crédito
$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_VISA);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_MASTERCARD);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_ELO);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_AMERICAN_EXPRESS);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_DINERS);
//$Cielo1->setFormaPagamentoBandeira(CIELO_CARTAO_BANDEIRA_DISCOVER);
// =============================

// Pagamento à vista
$Cielo1->setFormaPagamentoMetodo(CIELO_FORMA_PAGAMENTO_CREDITO_VISTA);
//$Cielo1->setFormaPagamentoMetodo(CIELO_FORMA_PAGAMENTO_DEBITO);
// =================

/*// Pagamento parcelado
$Cielo1->setFormaPagamentoMetodo(CIELO_FORMA_PAGAMENTO_PARCELADO_LOJA);
//$Cielo1->setFormaPagamentoMetodo(CIELO_FORMA_PAGAMENTO_PARCELADO_ADMINISTRADORA);
$Cielo1->setFormaPagamentoParcelas(6);
// ===================*/

// Autorização automática
$Cielo1->setAutorizacaoAutomatica(CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_DIRETAMENTE);
//$Cielo1->setAutorizacaoAutomatica(CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_AUTENTICADA_E_NAO_AUTENTICADA);
//$Cielo1->setAutorizacaoAutomatica(CIELO_AUTORIZACAO_AUTOMATICA_SOMENTE_AUTENTICAR);
//$Cielo1->setAutorizacaoAutomatica(CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_SOMENTE_SE_AUTENTICADA);
// ======================

// Captura automática
$Cielo1->setCapturaAutomatica(true);
//$Cielo1->setCapturaAutomatica(false);
// ==================

// Dados do pedido (compra)
$Cielo1->setDadosPedido(12345, 499.99);

// Envia a requisição à Cielo
$Cielo1->setURLRetorno('https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/retorno.php');

$Cielo1->requisicaoTransacao();

$url = $Cielo1->getURLAutenticacao();

@header("location: " . $url);

echo '<script type="text/javascript">
	<!--
		location.href = "' . $url . '";
	-->
	</script>';
// ==========================

?>