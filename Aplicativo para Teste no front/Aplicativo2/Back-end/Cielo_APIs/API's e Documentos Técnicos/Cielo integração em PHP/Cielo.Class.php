<?php

// Versão do produto
@define("CIELO_VERSAO", "1.2.0");

// Bandeiras de cartões
@define("CIELO_CARTAO_BANDEIRA_AMERICAN_EXPRESS", "amex");
@define("CIELO_CARTAO_BANDEIRA_DINERS", "diners");
@define("CIELO_CARTAO_BANDEIRA_DISCOVER", "discover");
@define("CIELO_CARTAO_BANDEIRA_ELO", "elo");
@define("CIELO_CARTAO_BANDEIRA_MASTERCARD", "mastercard");
@define("CIELO_CARTAO_BANDEIRA_VISA", "visa");

// Indicador do cartão
@define("CIELO_CARTAO_CODIGO_SEGURANCA_NAO_INFORMADO", 0);
@define("CIELO_CARTAO_CODIGO_SEGURANCA_INFORMADO", 1);
@define("CIELO_CARTAO_CODIGO_SEGURANCA_ILEGIVEL", 2);
@define("CIELO_CARTAO_CODIGO_SEGURANCA_INEXISTENTE", 9);

// Formas de pagamento
@define("CIELO_FORMA_PAGAMENTO_DEBITO", "A");
@define("CIELO_FORMA_PAGAMENTO_CREDITO_VISTA", "1");
@define("CIELO_FORMA_PAGAMENTO_PARCELADO_LOJA", "2");
@define("CIELO_FORMA_PAGAMENTO_PARCELADO_ADMINISTRADORA", "3");

// Autorização
@define("CIELO_AUTORIZACAO_AUTOMATICA_SOMENTE_AUTENTICAR", 0);
@define("CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_SOMENTE_SE_AUTENTICADA", 1);
@define("CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_AUTENTICADA_E_NAO_AUTENTICADA", 2);
@define("CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_DIRETAMENTE", 3);
@define("CIELO_AUTORIZACAO_AUTOMATICA_TRANSACAO_RECORRENTE", 4);

// Status da transação
@define("CIELO_TRANSACAO_STATUS_CRIADA", 0);
@define("CIELO_TRANSACAO_STATUS_EM_ANDAMENTO", 1);
@define("CIELO_TRANSACAO_STATUS_AUTENTICADA", 2);
@define("CIELO_TRANSACAO_STATUS_NAO_AUTENTICADA", 3);
@define("CIELO_TRANSACAO_STATUS_AUTORIZADA", 4);
@define("CIELO_TRANSACAO_STATUS_NAO_AUTORIZADA", 5);
@define("CIELO_TRANSACAO_STATUS_CAPTURADA", 6);
@define("CIELO_TRANSACAO_STATUS_NAO_CAPTURADA", 8);
@define("CIELO_TRANSACAO_STATUS_CANCELADA", 9);
@define("CIELO_TRANSACAO_STATUS_EM_AUTENTICACAO", 10);

// Indicadores de comércio eletrônico (ECI)
@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_AUTENTICADO_COM_SUCESSO_VISA", 5);
@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_NAO_REALIZOU_AUTENTICACAO_EMISSOR_NAO_FORNECEU_MECANISMOS_VISA", 6);
@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_NAO_SE_AUTENTICOU_COM_SUCESSO_VISA", 7);

@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_AUTENTICADO_COM_SUCESSO_MASTERCARD", 2);
@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_NAO_REALIZOU_AUTENTICACAO_EMISSOR_NAO_FORNECEU_MECANISMOS_MASTERCARD", 1);
@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_NAO_SE_AUTENTICOU_COM_SUCESSO_MASTERCARD", 0);

@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_LOJA_OPTOU_POR_AUTORIZAR_SEM_AUTENTICAR_VISA", 7);
@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_LOJA_OPTOU_POR_AUTORIZAR_SEM_AUTENTICAR_MASTERCARD", 0);
@define("CIELO_ELECTRONIC_COMMERCE_INDICATOR_LOJA_OPTOU_POR_AUTORIZAR_SEM_AUTENTICAR_OUTROS", 7);

// Códigos de idioma
@define("CIELO_IDIOMA_PORTUGUES", "PT");
@define("CIELO_IDIOMA_ESPANHOL", "ES");
@define("CIELO_IDIOMA_INGLES", "EN");

// Códigos de moeda
@define("CIELO_MOEDA_REAL", 986);

// Certificado digital
@define("CIELO_AUTORIDADE_CERTIFICADORA_CRT_FILE", dirname(__FILE__) . "/VeriSignClass3PublicPrimaryCertificationAuthority-G5.crt");

// Endereço do Web Service
@define("CIELO_WEBSERVICE_ENDPOINT_TEST", "https://qasecommerce.cielo.com.br/servicos/ecommwsec.do");
@define("CIELO_WEBSERVICE_ENDPOINT_PRODUCTION", "https://ecommerce.cielo.com.br/servicos/ecommwsec.do");

// Chaves de estabelecimento para testes
@define("CIELO_ESTABELECIMENTO_TESTE_NUMERO", "1006993069");
@define("CIELO_ESTABELECIMENTO_TESTE_CHAVE", "25fbb99741c739dd84d7b06ec78c9bac718838630f30b112d033ce2e621b34f3");

@define("CIELO_ESTABELECIMENTO_CIELO_NUMERO", "1001734898");
@define("CIELO_ESTABELECIMENTO_CIELO_CHAVE", "e84827130b9837473681c2787007da5914d6359947015a5cdb2b8843db0fa832");

/* CARTÕES PARA TESTES
Bandeira			Autenticação	Número					Validade	Código Segurança
========================================================================================
VISA				Sim				4012 0010 3714 1112		05/2018		123
VISA				Não				4012 0010 3844 3335		05/2018		123
MasterCard			Sim				5453 0100 0006 6167		05/2018		123
MasterCard			Não				5453 0100 0006 6167		05/2018		123
American Express	Não				3764 4904 7333 005		05/2018		1234
Elo					Não				6362 9700 0045 7013		05/2018		123
Diners				Não				3649 0102 4626 61		05/2018		123
Discover			Não				6011 0200 0024 5045		05/2018		123
======================================================================================== */

@define('CIELO_CHARSET_ENCODING', 'ISO-8859-1');

class Cielo {
	private $dadosEcNumero,
			$dadosEcChave,

			$cartaoNumero,
			$cartaoValidadeMes,
			$cartaoValidadeAno,
			$cartaoIndicador,
			$cartaoCodigoSeguranca,
			$cartaoNomeImpresso,
			$cartaoBin,

			$dadosPedidoNumero,
			$dadosPedidoValor,
			$dadosPedidoMoeda = CIELO_MOEDA_REAL,
			$dadosPedidoDataHora,
			$dadosPedidoDescricao,
			$dadosPedidoIdioma = CIELO_IDIOMA_PORTUGUES,

			$formaPagamentoBandeira,
			$formaPagamentoMetodo,
			$formaPagamentoParcelas = 1,

			$autorizacaoAutomatica,
			$capturaAutomatica,

			$transacaoId,
			$transacaoPan,
			$transacaoStatus,
			$ECI,
			$LR,
			$ARP,
			$NSU,
			$URLRetorno,
			$URLAutenticacao,

			$webServiceEndPoint;

	// Dados do estabelecimento
	public function setDadosEstabelecimento ($numero, $chave) {
		$this->setEstabelecimentoNumero($numero);
		$this->setEstabelecimentoChave($chave);
	}

	public function setEstabelecimentoNumero ($numero) { $this->dadosEcNumero = $numero; }
	public function getEstabelecimentoNumero () { return $this->dadosEcNumero; }

	public function setEstabelecimentoChave ($chave) { $this->dadosEcChave = $chave; }
	public function getEstabelecimentoChave () { return $this->dadosEcChave; }

	// Forma de pagamento
	public function setFormaPagamentoBandeira ($bandeira) { $this->formaPagamentoBandeira = $bandeira; }
	public function getFormaPagamentoBandeira () { return $this->formaPagamentoBandeira; }

	public function getFormaPagamentoBandeiraString ($bandeira = NULL) {
		$return = false;

		$x = strlen($bandeira) ? $bandeira : $this->getFormaPagamentoBandeira();

		switch ($x) {
			case CIELO_CARTAO_BANDEIRA_AMERICAN_EXPRESS: $result = "American Express"; break;
			case CIELO_CARTAO_BANDEIRA_DINERS: $result = "Diners"; break;
			case CIELO_CARTAO_BANDEIRA_DISCOVER: $result = "Discover"; break;
			case CIELO_CARTAO_BANDEIRA_ELO: $result = "Elo"; break;
			case CIELO_CARTAO_BANDEIRA_MASTERCARD: $result = "Mastercard"; break;
			case CIELO_CARTAO_BANDEIRA_VISA: $result = "VISA"; break;
		}

		return $this->UTF8DecodeString($result);
	}

	public function setFormaPagamentoMetodo ($metodo) {
		$result = false;

		$cond0 = $metodo == CIELO_FORMA_PAGAMENTO_CREDITO_VISTA;
		$cond1 = $metodo == CIELO_FORMA_PAGAMENTO_DEBITO && in_array($this->getFormaPagamentoBandeira(), array(CIELO_CARTAO_BANDEIRA_MASTERCARD, CIELO_CARTAO_BANDEIRA_VISA));
		$cond2 = in_array($metodo, array(CIELO_FORMA_PAGAMENTO_PARCELADO_LOJA, CIELO_FORMA_PAGAMENTO_PARCELADO_ADMINISTRADORA)) && $this->getFormaPagamentoBandeira() != CIELO_CARTAO_BANDEIRA_DISCOVER;

		if ($cond0 || $cond1 || $cond2) {
			$this->formaPagamentoMetodo = $metodo;
			$result = true;
		} else {
			$this->formaPagamentoMetodo = CIELO_FORMA_PAGAMENTO_CREDITO_VISTA;
			$result = false;
		}

		return $result;
	}

	public function getFormaPagamentoMetodo () { return $this->formaPagamentoMetodo; }

	public function setFormaPagamentoParcelas ($numero) {
		$result = false;

		$cond0 = $numero > 1;
		$cond1 = !in_array($this->getFormaPagamentoMetodo(), array(CIELO_FORMA_PAGAMENTO_CREDITO_VISTA, CIELO_FORMA_PAGAMENTO_DEBITO));
		$cond2 = !in_array($this->getFormaPagamentoBandeira(), array(CIELO_CARTAO_BANDEIRA_DISCOVER));

		if ($cond0 && $cond1 && $cond2) {
			$this->formaPagamentoParcelas = $numero;
			$result = true;
		} else {
			$this->formaPagamentoParcelas = 1;
			$result = false;
		}

		return $result;
	}

	public function getFormaPagamentoParcelas () { return $this->formaPagamentoParcelas; }

	public function getNumeroDigitosCartao ($bandeira = NULL) {
		$result = false;

		$x = strlen($bandeira) ? $bandeira : $this->getFormaPagamentoBandeira();

		switch ($x) {
			case CIELO_CARTAO_BANDEIRA_DINERS: $result = 14; break;
			case CIELO_CARTAO_BANDEIRA_AMERICAN_EXPRESS: $result = 15; break;
			case CIELO_CARTAO_BANDEIRA_DISCOVER:
			case CIELO_CARTAO_BANDEIRA_ELO:
			case CIELO_CARTAO_BANDEIRA_MASTERCARD:
			case CIELO_CARTAO_BANDEIRA_VISA: $result = 16; break;
		}

		return $result;
	}

	// Captura automática
	public function setCapturaAutomatica ($true_or_false) { $this->capturaAutomatica = $true_or_false; }
	public function getCapturaAutomatica () { return $this->capturaAutomatica ? 'true' : 'false'; }

	// Autorização automática
	public function setAutorizacaoAutomatica ($opcao) {
		$result = true;

		if ($this->getFormaPagamentoMetodo() == CIELO_FORMA_PAGAMENTO_DEBITO && $opcao == CIELO_AUTORIZACAO_AUTOMATICA_AUTORIZAR_DIRETAMENTE) $result = false;

		if ($result) $this->autorizacaoAutomatica = $opcao;

		return $result;
	}

	public function getAutorizacaoAutomatica () { return $this->autorizacaoAutomatica; }

	// Dados do pedido
	public function setDadosPedido ($numero, $valor, $data = NULL, $bandeira = NULL, $metodo = NULL, $parcelas = NULL, $descricao = NULL) {
		$this->setPedidoNumero($numero);
		$this->setPedidoValor($valor);
		if (strlen($data)) $this->setPedidoDataHora($data);
		if (strlen($bandeira)) $this->setFormaPagamentoBandeira($bandeira);
		if (strlen($metodo)) $this->setFormaPagamentoMetodo($metodo);
		if (strlen($parcelas)) $this->setFormaPagamentoParcelas($parcelas);
		if (strlen($descricao)) $this->setPedidoDescricao($descricao);
	}

	public function setPedidoNumero ($numero) { $this->dadosPedidoNumero = $numero; }
	public function getPedidoNumero () { return $this->dadosPedidoNumero; }

	public function setPedidoValor ($valor) { $this->dadosPedidoValor = $valor; }
	public function getPedidoValor () { return $this->dadosPedidoValor; }

	public function setPedidoDescricao ($descricao) { $this->dadosPedidoDescricao = $descricao; }
	public function getPedidoDescricao () { return $this->dadosPedidoDescricao; }

	// Dados da transação
	public function setTransacaoId ($id) { $this->transacaoId = $id; }
	public function getTransacaoId () { return $this->transacaoId; }

	private function setTransacaoPan ($pan) { $this->transacaoPan = $pan; }

	private function setTransacaoStatus ($status) { $this->transacaoStatus = $status; }
	public function getTransacaoStatus () { return $this->transacaoStatus; }

	public function getTransacaoStatusString ($status = NULL) {
		$x = strlen($status) ? $status : $this->getTransacaoStatus();

		switch ($x) {
			case CIELO_TRANSACAO_STATUS_CRIADA: $result = "Criada"; break;
			case CIELO_TRANSACAO_STATUS_EM_ANDAMENTO: $result = "Em andamento"; break;
			case CIELO_TRANSACAO_STATUS_AUTENTICADA: $result = "Autenticada"; break;
			case CIELO_TRANSACAO_STATUS_NAO_AUTENTICADA: $result = "Não autenticada"; break;
			case CIELO_TRANSACAO_STATUS_AUTORIZADA: $result = "Autorizada"; break;
			case CIELO_TRANSACAO_STATUS_NAO_AUTORIZADA: $result = "Não autorizada"; break;
			case CIELO_TRANSACAO_STATUS_CAPTURADA: $result = "Capturada"; break;
			case CIELO_TRANSACAO_STATUS_NAO_CAPTURADA: $result = "Não capturada"; break;
			case CIELO_TRANSACAO_STATUS_CANCELADA: $result = "Cancelada"; break;
			case CIELO_TRANSACAO_STATUS_EM_AUTENTICACAO: $result = "Em autenticação"; break;
			default: $result = "n/a"; break;
		}

		return $this->UTF8DecodeString($result);
	}

	private function setURLAutenticacao ($URL) { $this->URLAutenticacao = $URL; }
	public function getURLAutenticacao () { return $this->URLAutenticacao; }

	private function setElectronicCommerceIndicator ($ECI) { $this->ECI = $ECI; }
	public function getElectronicCommerceIndicator () { return $this->ECI; }

	public function getElectronicCommerceIndicatorString ($bandeira = NULL, $ECI = NULL) {
		$result = false;

		$x = strlen($bandeira) ? $bandeira : $this->getFormaPagamentoBandeira();
		$y = strlen($ECI) ? $ECI : $this->getElectronicCommerceIndicator();

		$text1 = 'Portador autenticado com sucesso';
		$text2 = 'Portador não realizou autenticação, pois o Emissor não forneceu mecanismos de autenticação';
		$text3 = 'Portador não se autenticou com sucesso';
		$text4 = 'A loja optou por autorizar sem passar pela autenticação';

		switch ($x) {
			case CIELO_CARTAO_BANDEIRA_VISA: 
				switch ($y) {
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_AUTENTICADO_COM_SUCESSO_VISA: $result = $text1; break;
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_NAO_REALIZOU_AUTENTICACAO_EMISSOR_NAO_FORNECEU_MECANISMOS_VISA: $result = $text2; break;
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_NAO_SE_AUTENTICOU_COM_SUCESSO_VISA: $result = $text3; break;
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_LOJA_OPTOU_POR_AUTORIZAR_SEM_AUTENTICAR_VISA: $result = $text4; break;
				}

				break;

			case CIELO_CARTAO_BANDEIRA_MASTERCARD: 
				switch ($y) {
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_AUTENTICADO_COM_SUCESSO_MASTERCARD: $result = $text1; break;
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_NAO_REALIZOU_AUTENTICACAO_EMISSOR_NAO_FORNECEU_MECANISMOS_MASTERCARD: $result = $text2; break;
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_PORTADOR_NAO_SE_AUTENTICOU_COM_SUCESSO_MASTERCARD: $result = $text3; break;
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_LOJA_OPTOU_POR_AUTORIZAR_SEM_AUTENTICAR_MASTERCARD: $result = $text4; break;
				}

				break;

			default: 
				switch ($y) {
					case CIELO_ELECTRONIC_COMMERCE_INDICATOR_LOJA_OPTOU_POR_AUTORIZAR_SEM_AUTENTICAR_OUTROS: $result = $text4; break;
				}

				break;
		}

		return $this->UTF8DecodeString($result);
	}

	private function setCodigoRespostaAutorizacao ($LR) { $this->LR = $LR; }
	public function getCodigoRespostaAutorizacao () { return $this->LR; }

	// Catálogo de Códigos de Resposta da Autorização (LR)
	public function getRespostaAutorizacao ($LR = NULL) {
		$result = false;

		$cods = array('00' => array('descricao' => 'Transação autorizada', 									'acao' => '',																'permite_retentativa' => 'N/A'),
					  '01' => array('descricao' => 'Transação referida pelo emissor',						'acao' => 'Oriente o portador a contatar o emissor do cartão',				'permite_retentativa' => 'Não'),
					  '04' => array('descricao' => 'Cartão com restrição',									'acao' => 'Oriente o portador a contatar o emissor do cartão',				'permite_retentativa' => 'Não'),
					  '05' => array('descricao' => 'Transação não autorizada',								'acao' => '',																'permite_retentativa' => 'Não'),
					  '06' => array('descricao' => 'Tente novamente',										'acao' => '',																'permite_retentativa' => 'Sim'),
					  '07' => array('descricao' => 'Cartão com restrição',									'acao' => 'Oriente o portador a contatar o emissor do cartão',				'permite_retentativa' => 'Não'),
					  '12' => array('descricao' => 'Transação inválida',									'acao' => '',																'permite_retentativa' => 'Não'),
					  '13' => array('descricao' => 'Valor inválido',										'acao' => 'Verifique valor mínimo de R$5,00 para parcelamento',				'permite_retentativa' => 'Não'),
					  '14' => array('descricao' => 'Cartão inválido',										'acao' => '',																'permite_retentativa' => 'Não'),
					  '15' => array('descricao' => 'Emissor inválido',										'acao' => '',																'permite_retentativa' => 'Não'),
					  '41' => array('descricao' => 'Cartão com restrição',									'acao' => 'Oriente o portador a contatar o emissor do cartão',				'permite_retentativa' => 'Não'),
					  '51' => array('descricao' => 'Saldo insuficiente',									'acao' => '',																'permite_retentativa' => 'Sim'),
					  '54' => array('descricao' => 'Cartão vencido',										'acao' => '',																'permite_retentativa' => 'Não'),
					  '57' => array('descricao' => 'Transação não permitida',								'acao' => '',																'permite_retentativa' => 'Não'),
					  '58' => array('descricao' => 'Transação não permitida',								'acao' => '',																'permite_retentativa' => 'Não'),
					  '62' => array('descricao' => 'Cartão com restrição',									'acao' => 'Oriente o portador a contatar o emissor do cartão',				'permite_retentativa' => 'Não'),
					  '63' => array('descricao' => 'Cartão com restrição',									'acao' => 'Oriente o portador a contatar o emissor do cartão',				'permite_retentativa' => 'Não'),
					  '76' => array('descricao' => 'Tente novamente',										'acao' => '',																'permite_retentativa' => 'Sim'),
					  '78' => array('descricao' => 'Cartão não foi desbloqueado pelo portador',				'acao' => 'Oriente o portador a desbloquea-lo junto ao emissor do cartão',	'permite_retentativa' => 'Sim'),
					  '82' => array('descricao' => 'Transação inválida',									'acao' => '',																'permite_retentativa' => 'Não'),
					  '91' => array('descricao' => 'Banco indisponível',									'acao' => '',																'permite_retentativa' => 'Sim'),
					  '96' => array('descricao' => 'Tente novamente',										'acao' => '',																'permite_retentativa' => 'Sim'),
					  'AA' => array('descricao' => 'Tente novamente',										'acao' => '',																'permite_retentativa' => 'Sim'),
					  'AC' => array('descricao' => 'Cartão de débito tentando utilizar produto crédito',	'acao' => '',																'permite_retentativa' => 'Não'),
					  'GA' => array('descricao' => 'Transação referida pela Cielo',							'acao' => 'Aguarde contato da Cielo',										'permite_retentativa' => 'Não'),
					  'N7' => array('descricao' => 'Código de segurança inválido (Visa)',					'acao' => '',																'permite_retentativa' => 'Não'));

		if (is_array($x = @$cods[isset($LR) ? $LR : $this->getCodigoRespostaAutorizacao()])) $result = $x;

		return $result;
	}

	// Código que ainda não sei para que serve, deixei a função GET como private para ninguém usar.
	private function setARP ($ARP) { $this->ARP = $ARP; }
	private function getARP () { return $this->ARP; }

	// Código que ainda não sei para que serve, deixei a função GET como private para ninguém usar.
	private function setNSU ($NSU) { $this->NSU = $NSU; }
	private function getNSU () { return $this->NSU; }

	public function setDadosTransacao ($resposta) {
		$DadosEc = "dados-ec";
		$DadosPedido = "dados-pedido";
		$DataHora = "data-hora";
		$FormaPagamento = "forma-pagamento";

		$dados = simplexml_load_string($resposta);

		$this->setTransacaoId($dados->tid);
		$this->setTransacaoPan($dados->pan);
		$this->setTransacaoStatus($dados->status);

		$this->setDadosPedido($dados->$DadosPedido->numero, $dados->$DadosPedido->valor, $dados->$DadosPedido->$DataHora, $dados->$FormaPagamento->bandeira, $dados->$FormaPagamento->produto, $dados->$FormaPagamento->parcelas, $dados->$DadosPedido->descricao);

		$this->setElectronicCommerceIndicator($dados->autenticacao->eci);
		$this->setCodigoRespostaAutorizacao($dados->autorizacao->lr);
		$this->setARP($dados->autorizacao->arp);
		$this->setNSU($dados->autorizacao->nsu);

		$URLAutenticacao = "url-autenticacao";
		$this->setURLAutenticacao($dados->$URLAutenticacao);
	}

	// URL de retorno
	public function setURLRetorno ($URL) { $this->URLRetorno = $URL; }
	public function getURLRetorno () { return $this->URLRetorno; }

	// Dados do cartão
	public function setDadosCartao ($numero, $validade_mes, $validade_ano, $codigo_seguranca = NULL, $nome_impresso = NULL) {
		$this->cartaoNumero = preg_replace('|[^\d]|', '', $numero);
		$this->cartaoValidadeMes = $validade_mes;
		$this->cartaoValidadeAno = $validade_ano;
		$this->cartaoIndicador = !strlen($codigo_seguranca) ? CIELO_CARTAO_CODIGO_SEGURANCA_NAO_INFORMADO : ($this->getFormaPagamentoBandeira() == CIELO_CARTAO_BANDEIRA_MASTERCARD ? CIELO_CARTAO_CODIGO_SEGURANCA_INFORMADO : CIELO_CARTAO_CODIGO_SEGURANCA_INFORMADO);
		$this->cartaoCodigoSeguranca = $codigo_seguranca;
		$this->cartaoNomeImpresso = $nome_impresso;
		$this->cartaoBin = substr($this->cartaoNumero, 0, 6);
	}

	// Transação finalizada com sucesso?
	public function transacaoFinalizada () { return in_array($this->getTransacaoStatus(), array(CIELO_TRANSACAO_STATUS_AUTORIZADA, CIELO_TRANSACAO_STATUS_CAPTURADA)); }

	// Requisições
	public function requisicaoTransacao ($incluirCartao = false) {
		$msg = $this->XMLHeader() . "\n" .
			   '<requisicao-transacao id="' . $this->genRequisicaoId() . '" versao="' . CIELO_VERSAO . '">' . "\n   "
					. $this->XMLDadosEstabelecimento() . "\n   ";

		if ($incluirCartao) $msg .=	$this->XMLDadosPortador() . "\n   ";

		$msg .=   $this->XMLDadosPedido() . "\n   " .
				  $this->XMLFormaPagamento() . "\n   " .
				  $this->XMLURLRetorno() . "\n   " .
				  $this->XMLAutorizacaoAutomatica() . "\n   " .
				  $this->XMLCapturaAutomatica() . "\n" .
				'</requisicao-transacao>';

		$objResposta = $this->enviaRequisicao($msg);

		return $objResposta;
	}

	public function requisicaoTransacaoId () {
		$msg = $this->XMLHeader() . "\n" .
			   '<requisicao-tid id="' . $this->genRequisicaoId() . '" versao ="' . CIELO_VERSAO . '">' . "\n   "
					. $this->XMLDadosEstabelecimento() . "\n   " 
					. $this->XMLFormaPagamento() . "\n" .
			   '</requisicao-tid>';

		$objResposta = $this->enviaRequisicao($msg);

		return $objResposta;
	}

	public function requisicaoAutorizacaoPortador () {
		$msg = $this->XMLHeader() . "\n" .
			   '<requisicao-autorizacao-portador id="' . $this->genRequisicaoId() . '" versao ="' . CIELO_VERSAO . '">' . "\n"
					. '<tid>' . $this->getTransacaoId() . '</tid>' . "\n   "
					. $this->XMLDadosEstabelecimento() . "\n   " 
					. $this->XMLDadosCartao() . "\n   "
					. $this->XMLDadosPedido() . "\n   "
					. $this->XMLFormaPagamento() . "\n   "
					. '<capturar-automaticamente>' . $this->getCapturaAutomatica() . '</capturar-automaticamente>' . "\n" .
			   '</requisicao-autorizacao-portador>';

		$objResposta = $this->enviaRequisicao($msg);

		return $objResposta;
	}
	
	public function requisicaoAutorizacaoCartao () { return $this->requisicaoAutorizacaoPortador(); }

	public function requisicaoAutorizacaoTransacaoId () {
		$msg = $this->XMLHeader() . "\n" .
			 '<requisicao-autorizacao-tid id="' . $this->genRequisicaoId() . '" versao="' . CIELO_VERSAO . '">' . "\n  "
				. '<tid>' . $this->getTransacaoId() . '</tid>' . "\n  "
				. $this->XMLDadosEstabelecimento() . "\n" .
			 '</requisicao-autorizacao-tid>';

		$objResposta = $this->enviaRequisicao($msg);

		return $objResposta;
	}

	/* Primeiro parâmetro: valor.
	   Se o valor passado for menor que o do pedido, será feita uma captura parcial.
	   Se nenhum valor for passado ou ele for igual ao do pedido, será feita uma captura total.

	   Segundo parâmetro: anexo.
	   Textual, apenas uma descrição da captura a ser executada.

	   Ambos os parâmtros são opcionais. */
	public function requisicaoCaptura ($valor = NULL, $anexo = NULL) {
		$msg = $this->XMLHeader() . "\n" .
				'<requisicao-captura id="' . $this->genRequisicaoId() . '" versao="' . CIELO_VERSAO . '">' . "\n   "
				. '<tid>' . $this->getTransacaoId() . '</tid>' . "\n   "
				. $this->XMLDadosEstabelecimento() . "\n";

		if (strlen($anexo)) $msg .=	'   <valor>' . $this->formatCurrency($valor) . '</valor>' . "\n";
		if (strlen($anexo)) $msg .=	'   <anexo>' . $anexo . '</anexo>' . "\n";

		$msg .= '</requisicao-captura>';

		$objResposta = $this->enviaRequisicao($msg);

		return $objResposta;
	}

	public function requisicaoCancelamento () {
		$msg = $this->XMLHeader() . "\n" . 
			   '<requisicao-cancelamento id="' . $this->genRequisicaoId() . '" versao="' . CIELO_VERSAO . '">' . "\n   "
				. '<tid>' . $this->getTransacaoId() . '</tid>' . "\n   "
				. $this->XMLDadosEstabelecimento() . "\n" .
			   '</requisicao-cancelamento>';

		$objResposta = $this->enviaRequisicao($msg);

		return $objResposta;
	}

	public function requisicaoConsulta () {
		$msg = $this->XMLHeader() . "\n" .
			   '<requisicao-consulta id="' . $this->genRequisicaoId() . '" versao="' . CIELO_VERSAO . '">' . "\n   "
				. '<tid>' . $this->getTransacaoId() . '</tid>' . "\n   "
				. $this->XMLDadosEstabelecimento() . "\n" .
			   '</requisicao-consulta>';

		$objResposta = $this->enviaRequisicao($msg);

		return $objResposta;
	}

	// Catálogo de erros
	public function getErro ($codigo) {
		$result = false;

		$cods = array('001' => array('erro' => 'Mensagem inválida',										'descricao' => 'A mensagem XML está fora do formato especificado pelo arquivo ecommerce.xsd', 						'acao' => 'Revisar as informações enviadas na mensagem XML frente às especificações'),
					  '002' => array('erro' => 'Credenciais inválidas',									'descricao' => 'Impossibilidade de autenticar uma requisição da loja virtual',										'acao' => 'Verificar se o número de afiliação e a chave estão corretos'),
					  '003' => array('erro' => 'Transação inexistente',									'descricao' => 'Não existe transação para o identificador informado',												'acao' => 'Rever a aplicação'),
					  '010' => array('erro' => 'Inconsistência no envio do cartão',						'descricao' => 'A transação, com ou sem cartão, está divergente com a permissão de envio dessa informação',			'acao' => 'Rever se o cadastro da loja permite o envio do cartão ou não'),
					  '011' => array('erro' => 'Modalidade não habilitada',								'descricao' => 'A transação está configurada com uma modalidade de pagamento não habilitada para a loja',			'acao' => 'Rever a modalidade de pagamento solicitada'),
					  '012' => array('erro' => 'Número de parcelas inválido',							'descricao' => 'O número de parcelas solicitado ultrapassa o máximo permitido',										'acao' => 'Rever a forma de pagamento'),
					  '013' => array('erro' => 'Flag de autorização automática inválida',				'descricao' => 'Flag de autorização automática incompatível com a forma de pagamento solicitada',					'acao' => 'Rever as regras de utilização da flag <autorizar/>'),
					  '014' => array('erro' => 'Autorização Direta inválida',							'descricao' => 'A solicitação de Autorização Direta está inválida',													'acao' => 'Rever as regras de utilização da Autorização Direta'),
					  '015' => array('erro' => 'Autorização Direta sem Cartão',							'descricao' => 'A solicitação de Autorização Direta está sem cartão',												'acao' => 'Rever as regras de utilização da Autorização Direta'),
					  '016' => array('erro' => 'Identificador, TID, inválido',							'descricao' => 'O TID fornecido está duplicado',																	'acao' => 'Rever a aplicação'),
					  '017' => array('erro' => 'Código de segurança ausente',							'descricao' => 'O código de segurança do cartão não foi enviado (essa informação é sempre obrigatória para Amex)',	'acao' => 'Rever a aplicação'),
					  '018' => array('erro' => 'Indicador de código de segurança inconsistente',		'descricao' => 'Uso incorreto do indicador de código de segurança',													'acao' => 'Revisar as informações de cartão enviadas na mensagem XML'),
					  '019' => array('erro' => 'URL de Retorno não fornecida',							'descricao' => 'A URL de Retorno é obrigatória, exceto para recorrência e autorização direta',						'acao' => 'Revisar as informações enviadas na mensagem XML'),
					  '020' => array('erro' => 'Status não permite autorização',						'descricao' => 'Não é permitido realizar autorização para o status da transação',									'acao' => 'Rever as regras de autorização'),
					  '021' => array('erro' => 'Prazo de autorização vencido',							'descricao' => 'Não é permitido realizar autorização, pois o prazo está vencido',									'acao' => 'Rever as regras de autorização'),
					  '025' => array('erro' => 'Encaminhamento a autorização não permitido',			'descricao' => 'O resultado da Autenticação da transação não permite a solicitação de Autorização',					'acao' => 'Rever as regras de autorização'),
					  '030' => array('erro' => 'Status inválido para captura',							'descricao' => 'O status da transação não permite captura',															'acao' => 'Rever as regras de captura'),
					  '031' => array('erro' => 'Prazo de captura vencido',								'descricao' => 'A captura não pode ser realizada, pois o prazo para captura está vencido',							'acao' => 'Rever as regras de captura'),
					  '032' => array('erro' => 'Valor de captura inválido',								'descricao' => 'O valor solicitado para captura não é válido',														'acao' => 'Rever as regras de captura'),
					  '033' => array('erro' => 'Falha ao capturar',										'descricao' => 'Não foi possível realizar a captura',																'acao' => 'Realizar nova tentativa. Persistindo, entrar em contato com o Suporte e- commerce e informar o TID da transação'),
					  '040' => array('erro' => 'Prazo de cancelamento vencido',							'descricao' => 'O cancelamento não pode ser realizado, pois o prazo está vencido',									'acao' => 'Rever as regras de cancelamento'),
					  '041' => array('erro' => 'Status não permite cancelamento',						'descricao' => 'O atual status da transação não permite cancelamento',												'acao' => 'Rever as regras de cancelamento'),
					  '042' => array('erro' => 'Falha ao cancelar',										'descricao' => 'Não foi possível realizar o cancelamento',															'acao' => 'Realizar nova tentativa. Persistindo, entrar em contato com o Suporte e-commerce e informar o TID da transação'),
					  '043' => array('erro' => 'Valor de cancelamento é maior que valor autorizado',	'descricao' => 'O valor que está tentando cancelar supera o valor total capturado da transação',					'acao' => 'Revisar o valor do cancelamento parcial, pois não pode ser maior que o valor capturado da transação'),
					  '051' => array('erro' => 'Recorrência Inválida',									'descricao' => 'As configurações da transação não permitem que a transação recorrente seja efetuada com sucesso',	'acao' => 'Verifique se escolheu "Crédito à vista"'),
					  '053' => array('erro' => 'Recorrência não habilitada',							'descricao' => 'O cadastro do lojista não permite o envio de transações recorrentes',								'acao' => 'Entre em contato com suporte para saber como habilitar a recorrência no cadastro'),
					  '061' => array('erro' => 'Transação Recorrente Inválida',							'descricao' => 'As configurações da transação recorrente estão inválidas',											'acao' => 'Verifique se o produto é "Crédito à vista"'),
					  '097' => array('erro' => 'Sistema indisponível',									'descricao' => 'Falha no sistema',																					'acao' => 'Persistindo, entrar em contato com o Suporte'),
					  '098' => array('erro' => 'Timeout',												'descricao' => 'A aplicação não respondeu dentro de 25 segundos',													'acao' => 'Persistindo, entrar em contato com o Suporte'),
					  '099' => array('erro' => 'Erro inesperado',										'descricao' => 'Falha no sistema',																					'acao' => 'Persistindo, entrar em contato com o Suporte e informar o TID da transação'));

		return $result;
	}

	// Envia requisição
	private function HTTPRequest ($paEndereco, $paPost = array()) {
		// Transforma o array para querystring
		$qs = '';
		foreach ($paPost as $k => $v) $qs .= $k . '=' . rawurlencode($v) . '&';
		$qs = preg_replace('|&$|', '', $qs);

		// inicializa uma sessão cURL
		$sessao_curl = @curl_init();

		// CURLOPT_URL
		// Seta o endereço da conexão
		@curl_setopt($sessao_curl, CURLOPT_URL, $paEndereco);

		// CURLOPT_FAILONERROR
		// Gera silenciosamente uma falha caso o código HTTP retornado for maior ou igual a 400
		@curl_setopt($sessao_curl, CURLOPT_FAILONERROR, true);

		// CURLOPT_SSL_VERIFYPEER
		// verifica a validade do certificado
		@curl_setopt($sessao_curl, CURLOPT_SSL_VERIFYPEER, true);

		// CURLOPPT_SSL_VERIFYHOST
		// verifica se a identidade do servidor bate com aquela informada no certificado
		@curl_setopt($sessao_curl, CURLOPT_SSL_VERIFYHOST, 2);

		// CURLOPT_SSL_CAINFO
		// informa a localização do certificado para verificação com o peer
		@curl_setopt($sessao_curl, CURLOPT_CAINFO, CIELO_AUTORIDADE_CERTIFICADORA_CRT_FILE);

		// CURLOPT_SSLVERSION
		// informa a versão do SSL a ser usada pela conexão
		@curl_setopt($sessao_curl, CURLOPT_SSLVERSION, 3);

		// CURLOPT_CONNECTTIMEOUT
		// o tempo em segundos de espera para obter uma conexão
		@curl_setopt($sessao_curl, CURLOPT_CONNECTTIMEOUT, 10);

		// CURLOPT_TIMEOUT
		// o tempo máximo em segundos de espera para a execução da requisição (curl_exec)
		@curl_setopt($sessao_curl, CURLOPT_TIMEOUT, 40);

		// CURLOPT_RETURNTRANSFER
		// TRUE para curl_exec retornar uma string de resultado em caso de sucesso, ao
		// invés de imprimir o resultado na tela. Retorna FALSE se há problemas na requisição
		@curl_setopt($sessao_curl, CURLOPT_RETURNTRANSFER, true);

		// CURLOPT_POST
		// Informa que o método POST deve ser usado
		@curl_setopt($sessao_curl, CURLOPT_POST, true);

		// CURLOPT_POSTFIELDS
		// Se passar um array, os dados serão codificados como "multipart/form-data".
		// Se passar um string URL-encoded, os dados serão codificados como "application/x-www-form-urlencoded".
		@curl_setopt($sessao_curl, CURLOPT_POSTFIELDS, $qs);

		// Executa a sessão cURL
		$resultado = @curl_exec($sessao_curl);

		// Encerra a sessão cURL
		@curl_close($sessao_curl);

		return $resultado ? $resultado : @curl_error($sessao_curl);
	}

	// Verifica em Resposta XML a ocorrência de erros 
	// Parâmetros: XML de envio, XML de Resposta
	private function verificaErros ($vmPost, $vmResposta) {
		$result = false;

		try {
			$cond0 = stripos($vmResposta, "SSL certificate problem") !== false;
			$cond1 = ($objResposta = simplexml_load_string($vmResposta, null, LIBXML_NOERROR)) == null;
			$cond2 = $objResposta->getName() == "erro";

				if ($cond0) throw new Exception("CERTIFICADO INVÁLIDO - O certificado da transação não foi aprovado", "099");
			elseif ($cond1) throw new Exception("HTTP READ TIMEOUT - o Limite de Tempo da transação foi estourado", "099");
			elseif ($cond2) $this->throwError($objResposta->codigo, $objResposta->mensagem, $vmPost);

			if ($cond0 || $cond1 || $cond2) $result = true;
		} catch (Exception $ex) {
			$this->throwError($ex->getCode(), $ex->getMessage(), $vmPost);
			$result = true;
		}

		return $result;
	}

	private function throwError ($error_code, $error_message, $XML) {
		$error_msg = 'Código do erro: ' . $error_code . ' (' . $error_message . ')';

		// Gera página HTML
		echo '<html><head><title>Erro na transa&ccedil;&atilde;o</title></head><body>';
		echo '<span style="color: red; font-weight: bold">Ocorreu um erro em sua transa&ccedil;&atilde;o!</span><br />';
		echo '<pre>' . $error_msg . '</pre>';
		//echo '<pre>XML de envio:<br /><br />' . htmlentities($XML) . '</pre>';
		echo '</body></html>';

		// Dispara o erro
		trigger_error($error_msg, E_USER_ERROR);
	}

	// Funções para transformar os strings de um array em UTF8 decoded //
	private function isUTF8 ($str) {
		$len = strlen($str);

		for ($i=0; $i<$len; $i++){
			$c = ord($str[$i]);

			if ($c > 128) {
					if ($c > 247) return false;
				elseif ($c > 239) $bytes = 4;
				elseif ($c > 223) $bytes = 3;
				elseif ($c > 191) $bytes = 2;
				else return false;

				if (($i + $bytes) > $len) return false;

				while ($bytes > 1) {
					$i++;
					$b = ord($str[$i]);
					if ($b < 128 || $b > 191) return false;
					$bytes--;
				}
			}
		}

		return true;
	}

	private function UTF8DecodeString ($s) { return is_string($s) && $this->isUTF8($s) ? utf8_decode($s) : $s; }

	private function UTF8DecodeArray ($a) {
		if (is_array($a)) { foreach ($a as $k => $v) {
			$a[$k] = is_array($v) ? $this->UTF8DecodeArray($v) : $this->UTF8DecodeString($v);
		} }

		return $a;
	}
	// =============================================================== //

	// Funções para formatação de valores e datas
	private function formatCurrency ($valor) { return number_format($valor, 2, '', ''); }

	private function setPedidoDataHora ($data = NULL) {
		$x = @strtotime($data);
		$result = $x !== false && $x !== -1 ? $x : mktime();

		$this->dadosPedidoDataHora = $result;
		return $result;
	}

	private function getPedidoDataHora () { return $this->dadosPedidoDataHora; }

	public function formatPedidoDataHora ($data = NULL) {
		$x = @strtotime($data);
		$t = $x !== false && $x !== -1 ? $x : $this->getPedidoDataHora();

		return date("Y-m-d", $t) . "T" . date("H:i:s", $t);
	}

	public function getISODate ($data = NULL) { return date('Y-m-d H:i:s', ($x = @strtotime($data)) !== false && $x !== -1 ? $x : $this->getPedidoDataHora()); }

	// Geradores de XML
	private function XMLHeader () { return '<?xml version="1.0" encoding="' . CIELO_CHARSET_ENCODING . '" ?>'; }

	private function XMLDadosEstabelecimento () {
		$msg = '<dados-ec>' . "\n      " .
					'<numero>' . $this->getEstabelecimentoNumero() . '</numero>' . "\n      " .
					'<chave>' . $this->getEstabelecimentoChave() . '</chave>' . "\n   " .
				'</dados-ec>';

		return $msg;
	}

	private function XMLDadosPortador () {
		$msg = '<dados-portador>' . "\n      " . 
					'<numero>' . $this->cartaoNumero . '</numero>' . "\n      " .
					'<validade>' . $this->cartaoValidadeAno . $this->cartaoValidadeMes . '</validade>' . "\n      " .
					'<indicador>' . $this->cartaoIndicador . '</indicador>' . "\n      " .
					'<codigo-seguranca>' . $this->cartaoCodigoSeguranca . '</codigo-seguranca>' . "\n   ";

		// Verifica se Nome do Portador foi informado
		if (strlen($this->cartaoNomeImpresso)) $msg .= '   <nome-portador>' . $this->cartaoNomeImpresso . '</nome-portador>' . "\n   " ;

		$msg .= '</dados-portador>';

		return $msg;
	}

	private function XMLDadosCartao () {
		$msg = '<dados-cartao>' . "\n      " . 
					'<numero>' . $this->cartaoNumero . '</numero>' . "\n      " .
					'<validade>' . $this->cartaoValidadeAno . $this->cartaoValidadeMes . '</validade>' . "\n      " .
					'<indicador>' . $this->cartaoIndicador . '</indicador>' . "\n      " .
					'<codigo-seguranca>' . $this->cartaoCodigoSeguranca . '</codigo-seguranca>' . "\n   ";

		// Verifica se Nome do Portador foi informado				
		if (strlen($this->cartaoNomeImpresso)) $msg .= '   <nome-portador>' . $this->cartaoNomeImpresso . '</nome-portador>' . "\n   " ;

		$msg .= '</dados-cartao>';

		return $msg;
	}

	private function XMLDadosPedido () {
		$this->setPedidoDataHora();

		$msg = '<dados-pedido>' . "\n      " .
					'<numero>' . $this->getPedidoNumero() . '</numero>' . "\n      " .
					'<valor>' . $this->formatCurrency($this->getPedidoValor()) . '</valor>' . "\n      " .
					'<moeda>' . $this->dadosPedidoMoeda . '</moeda>' . "\n      " .
					'<data-hora>' . $this->formatPedidoDataHora() . '</data-hora>' . "\n      ";

		if (strlen($x = $this->getPedidoDescricao())) $msg .= '<descricao>' . $x . '</descricao>' . "\n      ";

		$msg .= 	'<idioma>' . $this->dadosPedidoIdioma . '</idioma>' . "\n   " .
				'</dados-pedido>';

		return $msg;
	}

	private function XMLFormaPagamento () {
		$msg = '<forma-pagamento>' . "\n      " .
					'<bandeira>' . $this->getFormaPagamentoBandeira() . '</bandeira>' . "\n      " .
					'<produto>' . $this->getFormaPagamentoMetodo() . '</produto>' . "\n      " .
					'<parcelas>' . $this->getFormaPagamentoParcelas() . '</parcelas>' . "\n   " .
				'</forma-pagamento>';

		return $msg;
	}

	private function XMLURLRetorno () {
		return '<url-retorno>' . $this->getURLRetorno() . '</url-retorno>';
	}

	private function XMLAutorizacaoAutomatica () {
		return '<autorizar>' . $this->getAutorizacaoAutomatica() . '</autorizar>';
	}

	private function XMLCapturaAutomatica () {
		return '<capturar>' . $this->getCapturaAutomatica() . '</capturar>';
	}

	// Envia Requisição
	private function enviaRequisicao ($vmPost) {
		$result = false;

		$vmResposta = $this->HTTPRequest($this->webServiceEndPoint, array("mensagem" => $vmPost));

		if (($ok = !$this->verificaErros($vmPost, $vmResposta))) $this->setDadosTransacao($result = $vmResposta);

		return $result;
	}

	// Função para gerar ID de requisição
	private function genRequisicaoId () { return substr(md5(uniqid(rand(), true)), 0, 8) . '-' . substr(md5(uniqid(rand(), true)), 0, 4) . '-' . substr(md5(uniqid(rand(), true)), 0, 4) . '-' . substr(md5(uniqid(rand(), true)), 0, 4) . '-' . substr(md5(uniqid(rand(), true)), 0, 12); }

	// Armazenamento e carregamento
	public function save () { $_SESSION[$this->getStorageIndex($this->getPedidoNumero())] = $this->toXML(); }

	public function load ($numero_pedido) { return $this->fromXML($_SESSION[$this->getStorageIndex($numero_pedido)]); }

	private function getStorageIndex ($numero_pedido) { return "Cielo_" . $this->getEstabelecimentoNumero() . "_" . $this->getEstabelecimentoChave() . "_" . $numero_pedido; }

	// Transforma em/lê string
	public function toXML () {
		$msg = $this->XMLHeader() .
			   '<objeto-pedido>' .
					'<tid>' . $this->getTransacaoId() . '</tid>' .
					'<status>' . $this->getTransacaoStatus() . '</status>' .
					'<eci>' . $this->getElectronicCommerceIndicator() . '</eci>' .
					$this->XMLDadosEstabelecimento() .
					$this->XMLDadosPedido() .
					$this->XMLFormaPagamento() .
			   '</objeto-pedido>';

		return $msg;
	}

	public function fromXML ($XML) {
		$result = false;

		$DadosEc = "dados-ec";
		$DadosPedido = "dados-pedido";
		$DataHora = "data-hora";
		$FormaPagamento = "forma-pagamento";

		if (($XML = simplexml_load_string($XML))) {
			$this->setTransacaoId($XML->tid);
			$this->setTransacaoStatus($XML->status);

			$this->setDadosEstabelecimento($XML->$DadosEc->numero, $XML->$DadosEc->chave);

			$this->setDadosPedido($XML->$DadosPedido->numero, $XML->$DadosPedido->valor, $XML->$DadosPedido->$DataHora, $XML->$FormaPagamento->bandeira, $XML->$FormaPagamento->produto, $XML->$FormaPagamento->parcelas, $XML->$DadosPedido->descricao);

			$this->setElectronicCommerceIndicator($XML->autenticacao->eci);
			$this->setCodigoRespostaAutorizacao($XML->autorizacao->lr);
			$this->setARP($XML->autorizacao->arp);
			$this->setNSU($XML->autorizacao->nsu);

			$result = true;
		}

		return $result;
	}

	// Exportação dos dados
	public function export () {
		$transacao = array('id' => $this->getTransacaoId(),
						   'status' => $this->getTransacaoStatus(),
						   'eci' => $this->getElectronicCommerceIndicator());

		$estabelecimento = array('numero' => $this->getEstabelecimentoNumero(),
								 'chave' => $this->getEstabelecimentoChave());

		$pedido = array('numero' => $this->getPedidoNumero(),
						'valor' => $this->getPedidoValor(),
						'moeda' => $this->dadosPedidoMoeda,
						'data' => $this->getPedidoDataHora(),
						'descricao' => $this->getPedidoDescricao(),
						'idioma' => $this->dadosPedidoIdioma);

		$pagamento = array('bandeira' => $this->getFormaPagamentoBandeira(),
						   'metodo' => $this->getFormaPagamentoMetodo(),
						   'parcelas' => $this->getFormaPagamentoParcelas());

		$data = array('transacao' => $transacao,
					  'estabelecimento' => $estabelecimento,
					  'pedido' => $pedido,
					  'pagamento' => $pagamento);

		return $data;
	}

	// Construtor da classe
	// Primeiro parâmetro: se ambiente da loja está em processo de homologação (true) ou já em produção (false)
	function __construct ($test = false) {
		$this->webServiceEndPoint = $test ? CIELO_WEBSERVICE_ENDPOINT_TEST : CIELO_WEBSERVICE_ENDPOINT_PRODUCTION;

		@session_start();
		@ini_set("date.timezone", "America/Sao_Paulo");
	}
}

?>