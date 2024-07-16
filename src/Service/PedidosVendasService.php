<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Service\Traits\Service;

class PedidosVendasService extends RootService {
	use Service;
	
	protected $uri = 'pedidos/vendas';
	
	public function gerarNfce($pedidoId) {
		return $this->request('POST', $this->uri . '/' . $pedidoId . '/gerar-nfce')->getResponse();
	}
	
	public function lancarEstoque($pedidoId) {
		return $this->request('POST', $this->uri . '/' . $pedidoId . '/lancar-estoque')->getResponse();
	}
}
